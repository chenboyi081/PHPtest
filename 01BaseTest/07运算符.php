<?php 
//01 https://www.runoob.com/php/php-operators.html

//02 PHP7+ 版本新增整除运算符 intdiv(),使用实例：
var_dump(intdiv(10, 3));

//03 php中也有三元运算符
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username. "</br>";

// PHP 5.3+ 版本写法 ，自 PHP 5.3 起，可以省略三元运算符中间那部分。
$username = $test ?: 'nobody';
echo $username . "</br>";

// 注意：PHP_EOL 是一个换行符，兼容更大平台。（实测没有效果,果断改用</br>）
// 在 PHP7+ 版本多了一个 NULL 合并运算符 ??，实例如下：
// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
// $username = $_GET['user'] ?? 'nobody';
// // 类似的三元运算符
// $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

//04 组合比较符(PHP7+)
// PHP7+ 支持组合比较符（combined comparison operator）也称之为太空船操作符，符号为 <=>。
// 组合比较运算符可以轻松实现两个变量的比较，当然不仅限于数值类数据的比较。
// $c = $a <=> $b;
// 如果 $a > $b, 则 $c 的值为 1。
// 如果 $a == $b, 则 $c 的值为 0。
// 如果 $a < $b, 则 $c 的值为 -1。

// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1


?>
