<?php

// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";

    // 在默认的情况下，根据在 php.ini 中的 error_log 配置，PHP 向服务器的记录系统或文件发送错误记录。
    // 通过使用 error_log() 函数，您可以向指定的文件或远程目的地发送错误记录。
    // 通过电子邮件向您自己发送错误消息，是一种获得指定错误的通知的好办法
    // 这个方法不适合所有的错误。常规错误应当通过使用默认的 PHP 记录系统在服务器上进行记录。
    echo "已通知网站管理员";
    error_log("Error: [$errno] $errstr", 1, "someone@example.com", "From: webmaster@example.com");
}

// 设置错误处理函数
set_error_handler("customError", E_USER_WARNING);
// 由于我们希望我们的自定义函数能处理所有错误，set_error_handler() 仅需要一个参数，可以添加第二个参数来规定错误级别。

// 触发错误trigger_error()函数
// echo($test);
$test = 2;
if ($test > 1) {
    trigger_error("变量值必须小于等于 1", E_USER_WARNING);
}
。?>
