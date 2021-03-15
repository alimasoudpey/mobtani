<?php include "../includes/header.php";?>
    <div class="main">
        <div class="form">
            <h1>افزودن گیفت</h1>

            <form action="acc.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">نام:</label>
                    <input id="name" class="form-control" type="text" placeholder="نام خود را وارد کنید" aria-label="default input example" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">ایمیل:</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان پیام:</label>
                    <input type="text" id="title" class="form-control" name="caption">
                    <span class="form-text">عنوان پیام الزامی است</span><br>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">متن پیام:</label>
                    <textarea id="body" class="form-control" name="message"></textarea>
                </div>
                <input type="submit" name="submit" value="ارسال" class="btn btn-primary">
            </form>
        </div>
    </div>
<?php include "../includes/footer.php";?>