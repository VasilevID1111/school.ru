<?php
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','school');

	$mysql = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("База не существует");
	if ($mysql == false) {
		echo "Не смогли подключиться к Базе данных";
	} else {
		$mysql->set_charset('utf8');
	}
?>