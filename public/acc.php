<?php
include '../includes/settings.php';
include('../includes/functions.php');
$alert = '';
if (isset($_POST['submit'])) { // اگر فرم قبلا پر شده پردازشش کن


    $sql = "INSERT INTO messages(name,email,caption,message) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['title']}', '{$_POST['body']}')";

    $db = new DB();

    $result = $db->execute($sql);
    unset($db);
    if ($result)
        $alert = alertTemplate('با موفقیت ثبت شد!', 'success');


}

include "../includes/header.php";

if (isset($alert))
    echo $alert;


include "../includes/footer.php"; ?>