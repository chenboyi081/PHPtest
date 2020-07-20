<?php 
// https://www.runoob.com/php/php-date.html

// PHP date() 函数用于格式化时间/日期。
// PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。
// 时间戳是一个字符序列，表示一定的事件发生的日期/时间。
// 语法：string date ( string $format [, int $timestamp ] )
//timestamp 参数可选
// date函数详解：https://www.runoob.com/php/func-date-date.html

echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d");


?>