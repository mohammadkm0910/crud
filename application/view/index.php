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
            <?php
            $counter = 1;
            foreach ($all as $user){
                ?>
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['family']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['created_at']; ?></td>
                <td>
                    <a href="" class="btn btn-sm btn-warring">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-info">
                        <i class="fa fa-info"></i>
                    </a>
                    <a href="" onclick="return confirm('آیا از حذف این رکورد مطمئن هستید؟')"
                       class="btn btn-sm btn-danger">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
