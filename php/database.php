<?php 

// defining names for db, user, pass and host
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// connecting to database
mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

//selecting database
@mysql_select_db(DB_NAME) or die("Tidak dapat menemukai pangkalan data!");

//checking for failed connection
if(mysqli_connect_errno($connect))
{
	echo 'Tidak dapat menyambungkan';
}

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

?>