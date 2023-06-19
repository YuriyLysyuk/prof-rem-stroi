<?php
// Выходим, если это не отправка формы по POST
if ( $_SERVER["REQUEST_METHOD"] != "POST" ) {
	exit();
}

// Начальные значения всех полей
$fields = [ 
	'name' => [ 
		'label' => 'Имя',
		'value' => '',
	],
	'tel' => [ 
		'label' => 'Телефон',
		'value' => '',
	],
];

foreach ( $fields as $name => $options ) {
	if ( isset( $_POST[ $name ] ) && ! empty( $_POST[ $name ] ) ) {
		$fields[ $name ]['value'] = test_input( $_POST[ $name ] );
	} else {
		unset( $fields[ $name ] );
	}
}

/**
 * Настройки почты
 */

// Получатель
$to = ( isset( $_POST['admin_email'] ) ) ? test_input( $_POST['admin_email'] ) : '';

// тема письма
$subject = ( isset( $_POST['subject'] ) ) ? test_input( $_POST['subject'] ) : 'Тема письма';

// текст письма
$message = '
<html>
<head>
  <title>' . $subject . '</title>
</head>
<body>
  <table border="1" bordercolor="#eee" cellspacing="0" cellpadding="5">
';

foreach ( $fields as $name => $options ) {
	$message .= '
  <tr>
    <td>' . $options['label'] . '</td><td>' . $options['value'] . '</td>
  </tr>
  ';
}

$message .= '
  </table>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';

// Отправляем
$response = [];

if ( mail( $to, $subject, $message, implode( "\r\n", $headers ) ) ) {
	$response['status'] = 'success';
	$response['message'] = 'Заявка отправлена';
} else {
	$response['status'] = 'error';
	$response['message'] = 'Ошибка при отправке заявки';
}

header( "Content-Type: application/json" );
echo json_encode( $response );
exit();

function test_input( $data ) {
	$data = trim( $data );
	$data = stripslashes( $data );
	$data = htmlspecialchars( $data );
	return $data;
}
