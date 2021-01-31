<!doctype html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->asset('icon/font-awesome.min.css'); ?>">
    <title>اطلاعات کاربران</title>
</head>
<body dir="rtl">
<div class="container">
    <div class="row">
        <a href="<?php $this->url('home/create'); ?>" class="btn">اضافه کردن کاربر</a>
    </div>
    <div class="scroll-x">
        <table class="table">
            <thead>
            <tr>
                <th>تعداد</th>
                <th>نام</th>
                <th>فامیلی</th>
                <th>ایمیل</th>
                <th>شماره موبایل</th>
                <th>تاریخ ایجاد</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
