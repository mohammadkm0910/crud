<!doctype html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->asset('icon/font-awesome.min.css'); ?>">
    <title>وارد کردن کاربر</title>
</head>
<body dir="rtl">
<div class="container">
    <form method="post">
        <div class="row form-group">
            <div class="col-6">
                <label for="name">نام</label>
                <input type="text" placeholder="نام خود را وارد کنید" class="form-control" name="name" id="name">
                <span class="text-danger"></span>
            </div>
            <div class="col-6">
                <label for="family">فامیلی</label>
                <input type="text" placeholder="فامیلی خود را وارد کنید" class="form-control" name="family" id="family">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-6">
                <label for="email">ایمیل</label>
                <input type="email" placeholder="ایمیل خود را وارد کنید" class="form-control" name="email" id="email">
                <span class="text-danger"></span>
            </div>
            <div class="col-6">
                <label for="phone">موبایل</label>
                <input type="text" placeholder="شماره موبایل خود را وارد کنید" class="form-control" name="phone" id="phone">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="row form-group">
            <label for="address">آدرس</label>
            <textarea placeholder="آدرس نمونه..." class="form-control" name="address" id="address"></textarea>
            <span class="text-danger"></span>
        </div>
        <div class="row form-group">
            <input type="submit" value="ذخیره کاربر" class="btn btn-success btn-block" name="insert-user">
        </div>
    </form>
</div>
</body>
</html>
