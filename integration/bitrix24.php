<?php
require_once( 'settings.php' );

function sendDataToBitrix( $method, $data ) {
	$queryUrl = BITRIX24_WEBHOOK_URL . $method;
	$queryData = http_build_query( $data );

	$curl = curl_init();
	curl_setopt_array( $curl, array(
		CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_POST => 1,
		CURLOPT_HEADER => 0,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $queryUrl,
		CURLOPT_POSTFIELDS => $queryData,
	) );

	$result = curl_exec( $curl );
	curl_close( $curl );
	return json_decode( $result, 1 );
}

function addLead( $contact ) {
	$leadData = sendDataToBitrix( 'crm.lead.add', [ 
		'fields' => [ 
			'TITLE' => BITRIX24_LEAD_TITLE,
			'STAGE_ID' => 'NEW',
      'NAME' => $contact['NAME'],
      'PHONE' => [ [ 'VALUE' => $contact['PHONE'], 'VALUE_TYPE' => 'WORK' ] ],
			// 'CONTACT_ID' => $contact['CONTACT_ID'],
			'SOURCE_ID' => BITRIX24_LEAD_SOURCE_ID,
		], 'params' => [ 
			'REGISTER_SONET_EVENT' => 'Y'
		]
	] );

	return $leadData['result'];
}

function addContact( $contact ) {
	$check = checkContact( $contact );

	if ( $check['total'] != 0 )
		return $check['result'][0]['ID'];

	$contactData = sendDataToBitrix( 'crm.contact.add', [ 
		'fields' => [ 
			'NAME' => $contact['NAME'],
			'PHONE' => [ [ 'VALUE' => $contact['PHONE'], 'VALUE_TYPE' => 'WORK' ] ],
			'TYPE_ID' => 'CLIENT',
		], 'params' => [ 
			'REGISTER_SONET_EVENT' => 'Y'
		]
	] );

	return $contactData['result'];
}

function addMessage( $contact ) {
	$messageData = sendDataToBitrix( 'crm.livefeedmessage.add', [ 
		'fields' => [ 
			'MESSAGE' => $contact['DESCRIPTION'],
			'POST_TITLE' => 'Данные с формы сайта',
			'ENTITYTYPEID' => 1,
			'ENTITYID' => $contact['LEAD_ID'],
		], 'params' => [ 
			'REGISTER_SONET_EVENT' => 'Y'
		]
	] );

	return $messageData['result'];
}

function checkContact( $contact ) {
	$list = sendDataToBitrix( 'crm.contact.list', [ 
		'filter' => [ 'PHONE' => $contact['PHONE'] ],
		'select' => [ 'ID' ],
	] );

	return $list;
}
