<?php

if (!defined('DBHOST'))
    define('DBHOST', 'localhost');
if (!defined('DBUSER'))
    define('DBUSER', 'root');
if (!defined('DBPASS'))
    define('DBPASS', '');
if (!defined('DBNAME'))
    define('DBNAME', 'giftcard');

if (!defined('CHARSET'))
    define('CHARSET', 'utf8mb4');
if (!defined('COLLATE'))
    define('COLLATE', 'uft8_general_ci');


$dbHost = DBHOST;
$dbUser = DBUSER;
$dbPass = DBPASS;
$dbname = DBNAME;
$charset = CHARSET;
$collate = COLLATE;

$softsetup=true;