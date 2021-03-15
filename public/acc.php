<?php
include '../includes/settings.php';
include('../includes/functions.php');
$alert = '';
if (isset($_POST['submit'])) { // اگر فرم قبلا پر شده پردازشش کن

// A. validation
    unset( $_POST['submit'] ); // این پارامتر درج نشود
// B. Insert in DB
    $db = new DB();
    messages::add( $_POST );
// 2. create insert query
    unset($db);
    $alert = alerts();
}

include "../includes/header.php";

if (isset($alert))
    echo $alert;


include "../includes/footer.php"; ?>