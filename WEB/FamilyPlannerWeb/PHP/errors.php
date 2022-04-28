<?php
session_start();
class ErrorMessage{
    public static $fnameErr = "Your first name has forbidden characters!";
    public static $snameErr = "Your surnamename has forbidden characters!";
    public static $mailErr = "This is not an email adress!";
    public static $pwdErr = "Your password has forbidden characters!";
}
?>