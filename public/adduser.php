<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){ // اگر فرم قبلا پر شده پردازشش کن

// A. validation
    $imgSrc = 'img/1.png';
// B. Insert in DB


// 2. create insert query
    $sql = "INSERT INTO users (name, email, password,img) 
	VALUES('{$_POST['name']}', '{$_POST['email']}','{$_POST['password']}', '{$imgSrc}')";

    $db = new DB();

    $result = $db -> execute( $sql );
    unset( $db );

// C. success message
//اگر با موفقیت درج شد
    if( $result )
        $alert = alertTemplate('با موفقیت ثبت شد!', 'success');


}
?>
<?php include "../includes/header.php";?>
<?php
if( isset($alert) )
    echo $alert;
?>
<?php include "../includes/footer.php";?>