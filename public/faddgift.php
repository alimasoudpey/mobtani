<?php include "../includes/header.php"; ?>

<div class="main">
    <div class="form">
        <h1>ثبت محصول</h1>

        <form action="addgift.php" method="POST">
            <h3>مشخصات گیفت</h3>
            <label for="name">نام گیفت</label>
            <section class="input-group">
                <input type="text" name="name" id="name" class="form-control" required>
            </section>

            <label for="price">قیمت</label>
            <span class="input-group">
					<input type="number" name="price" id="price" class="form-control" min="0" step="1000" required>
					<span class="input-group-text">تومان</span>
				</span><br>
            <label for="description">توضیحات </label>
            <textarea name="description" id="description" class="form-control"></textarea><br>

            <label for="file">تصویر گیفت</label>
            <input type="file" name="image" id="image" class="form-control"><br>

            <input type="submit" name="submit" value="ارسال" class="btn btn-primary">
        </form>
    </div>
</div>
</div>

<?php include "../includes/footer.php"; ?>
