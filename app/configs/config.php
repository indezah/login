<?php

    // print_r($_SERVER);
define('APP_NAME', 'Woodworks');
define('ROOT', "http://".$_SERVER["SERVER_NAME"]."/login/public");


if ($_SERVER['SERVER_NAME'] == 'localhost') {
    
    define('DBHOST', 'localhost');
    define('DBNAME', 'woodworks');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', 'mysql');
} else {
    define('DBHOST', 'localhost');
    define('DBNAME', 'woodworks');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', 'mysql');
}
