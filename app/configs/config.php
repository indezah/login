<?php

    // print_r($_SERVER);
define('APP_NAME', 'Woodworks');
define('ROOT', "http://localhost/login/public");


if ($_SERVER['SERVER_NAME'] == 'localhost') {

    define('DBHOST', 'localhost');
    define('DBNAME', 'woodworks');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
} else {
    define('DBHOST', 'localhost');
    define('DBNAME', 'woodworks');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
}
