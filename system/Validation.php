<?php
namespace System;
class Validation
{
    public function validName($name)
    {
        if (empty($name))
            return "نمی تواند خالی باشد";
        elseif (preg_match("/[0-9]+/",$name))
            return "شامل اعداد نمی تواند باشد";
        else
            return "";
    }
    public function validEmail($email)
    {
        if (empty($email))
            return "نمی تواند خالی باشد";
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return "ایمیل معتبر وارد کنید!";
        else
            return "";

    }
    public function validPhone($phone)
    {
        $newPhone = str_replace("-","",$phone);
        if (empty($phone))
            return "نمی تواند خالی باشد";
        elseif (!is_numeric($newPhone))
            return "شماره تلفن معتبر وارد کنید";
        else
            return  "";
    }
    public function validAddress($address)
    {
        if (empty($address))
            return "نمی تواند خالی باشد";
        elseif (strlen($address) < 5)
            return "آدرس طولانی تری وارد کنید";
        else
            return "";
    }
}
