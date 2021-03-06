<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){ // اگر فرم قبلا پر شده پردازشش کن

// A. validation
    $imgSrc = 'images/image.jpg';
// B. Insert in DB


// 2. create insert query
    $sql = "INSERT INTO gift (name, price, description, image) 
	VALUES('{$_POST['name']}', {$_POST['price']},'{$_POST['description']}', '{$imgSrc}')";

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