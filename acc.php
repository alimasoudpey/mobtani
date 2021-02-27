<!DOCTYPE html>
<html lang="fa">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.rtl.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>تماس با ما</title>
</head>
<body>
<header>

    <nav>
        <ul class="nav">
            <li><a href="index.php"><i class="fa fa-home"></i>صفحه اصلی</a></li>
            <li><a href="#"><i class="fa fa-gamepad"></i>بازی ها</a></li>
            <li><a href="contact.php"><i class="fa fa-envelope"></i>تماس با ما</a></li>
        </ul>
    </nav>

    <div class="logo">
        <img src="img/main/white.png"/>
    </div>

    <div class="account">
        <ul>
            <li>
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="جستجو...">
                <datalist id="datalistOptions">
                    <option value="steam">
                </datalist>
            </li>
            <li><a href="#">حساب کاربری<i class="fa fa-user-circle"></i></a></li>
        </ul>
    </div>
</header>

<main>
    <div class="main">
<?php
$dbc = new mysqli('localhost', 'root', '', 'giftcard');

$sql = "INSERT INTO messages(name,email,caption,message) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['title']}', '{$_POST['body']}')";

$result = $dbc -> query( $sql );

$dbc -> close();

echo 'پیام با موفقیت ثبت شد';
?>
    </div>
</main>


<aside></aside>


<footer></footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
</body>
</html>
