<?

	$connection  = mysqli_connect('127.0.0.1','mysql','mysql','sad');


	if ($connection == false)
	{

		echo "Не удалось подключиться к БД";

		echo mysql_connect_error();
		exit();
	}


session_start();

?>