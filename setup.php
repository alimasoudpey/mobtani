<?php
include "settings.php";
include "functions.php";
$db = new DB(false);
if(! $softsetup){
$sql = "DROP DATABASE IF EXISTS {$dbname}";
$db->execute($sql);}
$sql = "CREATE DATABASE IF NOT EXISTS {$dbname} CHARSET {$charset} COLLATE {$collate}";
$result = $db->execute($sql);
if ($result)
    echo alertTemplate('دیتابیس با موفقیت ایجاد شد', 'success');

unset($db);
$db = new DB();
$sql = "CREATE TABLE messages(
id INT AUTO_INCREMENT NOT NULL,
name varchar (255),
email varchar (255),
caption varchar (255),
message TEXT,
PRIMARY KEY (id)
)";
$result = $db->execute($sql);
if ($result)
    echo alertTemplate('جدول پیام با موفقیت ایجاد شد', 'success');

$sql = "CREATE TABLE gift(
id INT AUTO_INCREMENT NOT NULL,
name varchar (255),
price int(11),
image varchar (255),
description TEXT,
PRIMARY KEY (id)
)";
$result = $db->execute($sql);
if ($result)
    echo alertTemplate('جدول گیفت با موفقیت ایجاد شد', 'success');

$sql = "CREATE TABLE users(
name varchar (255),
email varchar (255),
password varchar (255),
img varchar (255),
PRIMARY KEY (email)
)";
$result = $db->execute($sql);
if ($result)
    echo alertTemplate('جدول گیفت با موفقیت ایجاد شد', 'success');
