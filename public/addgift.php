<?php
include '../includes/settings.php';
include('../includes/functions.php');
$alert = '';
if (isset($_POST['submit'])) { // اگر فرم قبلا پر شده پردازشش کن

// A. validation
    $imgSrc = 'assets/images/image.jpg';
    unset( $_POST['submit'] ); // این پارامتر درج نشود
    $_POST['image'] = $imgSrc; // تصویر محصول به پارامترها اضافه شود
// B. Insert in DB
    $db = new DB();
    gift::add( $_POST );
// 2. create insert query
    unset($db);
    $alert = alerts();
}
?>
<?php include "../includes/header.php"; ?>
<?php
if (isset($alert))
    echo $alert;
?>
<?php include "../includes/footer.php"; ?>