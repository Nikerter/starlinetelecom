<!--Объявление параметров для подключения-->
<?php

$host = "localhost";
$db_name = "straline";
$login = "root";
$pswrd = "";
/*Подключение к БД*/
$connect = mysql_connect("$host","$login","$pswrd");
if (!$connect) {

	exit(mysql_error());
}
else {
	mysql_select_db("$db_name",$connect);
}
/*Выбор кодировки*/
mysql_select_db("$db_name",$connect);
mysql_query("SET NAMES 'utf-8'");
?>