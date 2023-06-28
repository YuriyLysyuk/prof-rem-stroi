<?php
$response = [];

// Проверяем что форма отправлена по POST
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
	'comment' => [ 
		'label' => 'Комментарий',
		'value' => '',
	],
	'page' => [ 
		'label' => 'Страница',
		'value' => '',
		'type' => 'link',
	],
];

// Обрабатываем полученные поля
foreach ( $fields as $name => $options ) {
	if ( isset( $_POST[ $name ] ) && ! empty( $_POST[ $name ] ) ) {
		$fields[ $name ]['value'] = test_input( $_POST[ $name ] );
	} else {
		unset( $fields[ $name ] );
	}
}

/**
 * Обрабатываем файл сметы
 */
if ( isset( $_FILES['file'] ) && $_FILES['file']['error'] !== 4 ) {
	// Если файл загружен
	if ( $_FILES['file']['error'] === UPLOAD_ERR_OK ) {
		// получаем детали загруженного файла 
		$fileTmpPath = $_FILES['file']['tmp_name'];
		$fileName = $_FILES['file']['name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		$fileNameCmps = explode( ".", $fileName );
		$fileExtension = strtolower( end( $fileNameCmps ) );

		// нормализуем имя файла
		$newFileName = md5( time() . $fileName ) . '.' . $fileExtension;

		// инициализируем массив допустимых разрешений
		$allowedfileExtensions = [ 'txt', 'xls', 'xlsx', 'doc', 'docx', 'pdf' ];

		if ( in_array( $fileExtension, $allowedfileExtensions ) ) {
			// Директория для загрузки смет
			// ToDo: исправить место сохранения файла в uploads WP
			$uploadFileDir = './upload_files/';

			$destPath = $uploadFileDir . $newFileName;

			if ( move_uploaded_file( $fileTmpPath, $destPath ) ) {
				$url = getFileUrl( $destPath );

				$fields['file'] = [ 
					'label' => 'Смета',
					'value' => '<a href="' . $url . '" target="_blank">Открыть</a>'
				];
			} else {
				// проблема с перемещением загруженного файла
				$response['status'] = 'error';
				$response['message'] = 'Ошибка при сохранении файла на сервере. Свяжитесь с администратором или попробуйте отправить еще раз';

				send( $response );
			}
		} else {
			// недопустимый тип файла
			$response['status'] = 'error';
			$response['message'] = 'Недопустимый тип файла, разрешены: ' . implode( ', ', $allowedfileExtensions );

			send( $response );
		}
	} else {
		// ошибка при загрузке файла
		$response['status'] = 'error';
		$response['message'] = 'Ошибка при загрузке файла: ' . $_FILES['file']['error'];

		send( $response );
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
	if ( isset( $options['type'] ) && $options['type'] === 'link' ) {
		$message .= '
    <tr>
      <td>' . $options['label'] . '</td><td><a href="' . $options['value'] . '" target="_blank">' . $options['value'] . '</a></td>
    </tr>
    ';
	} else {
		$message .= '
    <tr>
      <td>' . $options['label'] . '</td><td>' . $options['value'] . '</td>
    </tr>
    ';
	}

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
if ( mail( $to, $subject, $message, implode( "\r\n", $headers ) ) ) {
	$response['status'] = 'success';
	$response['message'] = 'Заявка отправлена';
} else {
	$response['status'] = 'error';
	$response['message'] = 'Ошибка при отправке заявки';
}

send( $response );

function test_input( $data ) {
	$data = trim( $data );
	$data = stripslashes( $data );
	$data = htmlspecialchars( $data );
	return $data;
}

function send( $response ) {
	header( "Content-Type: application/json" );
	echo json_encode( $response );

	exit();
}

function getFileUrl( $filePath ) {
	$protocol = $_SERVER['PROTOCOL'] = isset( $_SERVER['HTTPS'] ) && ! empty( $_SERVER['HTTPS'] ) ? 'https' : 'http';

	$host = $_SERVER['HTTP_HOST'];

	// ToDo: исправить место сохранения файла в uploads WP
	$theme = 'wp-content/themes/prof-rem-stroi';

	$url = $protocol . '://' . $host . '/' . $theme . '/' . str_replace( './', '', $filePath );

	return $url;
}
