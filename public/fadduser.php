<?php include "../includes/header.php"; ?>

<div class="main">
    <div class="form">
        <h1><a href="login.php">ورود</a>/<a href="fadduser.php">ثبت نام</a></h1>

        <form action="adduser.php" method="POST">
            <h3>ثبت نام</h3>
            <label for="name">نام به صورت کامل:(نام و نام خانوادگی)</label>
            <section class="input-group">
                <input type="text" name="name" id="name" class="form-control" required>
            </section>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">آدرس ایمیل:(نام کاربری)</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">پسورد:</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" name="submit" value="ثبت نام" class="btn btn-primary">
        </form>
    </div>
</div>
</div>

<?php include "../includes/footer.php"; ?>
