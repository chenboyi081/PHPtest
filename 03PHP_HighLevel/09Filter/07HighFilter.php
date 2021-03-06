<?php 
// PHP 高级过滤器:https://www.runoob.com/php/php-filter-advanced.html
// 1.0 检测一个数字是否在一个范围内
//以下实例使用了 filter_var() 函数来检测一个 INT 型的变量是否在 1 到 200 内:

$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("变量值不在合法范围内");
} else {
    echo("变量值在合法范围内");
}


//2.0 检测 IPv6 地址 
//以下实例使用了 filter_var() 函数来检测一个 $ip 变量是否是 IPv6 地址:
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip 是一个 IPv6 地址");
} else {
    echo("$ip 不是一个 IPv6 地址");
}

//3.0 检测 URL - 必须包含QUERY_STRING（查询字符串）
//以下实例使用了 filter_var() 函数来检测 $url 是否包含查询字符串：
$url = "http://www.runoob.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url 是一个合法的 URL");
} else {
    echo("$url 不是一个合法的 URL");
}

//4.0 移除 ASCII 值大于 127 的字符
//以下实例使用了 filter_var() 函数来移除字符串中 ASCII 值大于 127 的字符，同样它也能移除 HTML 标签：
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;




?>