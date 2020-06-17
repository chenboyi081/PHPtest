<?php
$txt="Hello world!";
echo $txt;

//02
// 在 PHP 中，只有一个字符串运算符。
// 并置运算符 (.) 用于把两个字符串值连接起来。
// 下面的实例演示了如何将两个字符串变量连接在一起：
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;

//03 strlen()
echo strlen("Hello world!");

//04 strpos()用于在字符串内查找一个字符或一段指定的文本。
//如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
echo strpos("Hello world!","world");


//05其他String 函数 https://www.runoob.com/php/php-ref-string.html
?>