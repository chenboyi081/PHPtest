<?php 
//00 
// PHP 的真正威力源自于它的函数。
// 在 PHP 中，提供了超过 1000 个内建的函数。
// https://www.runoob.com/php/php-functions.html

//01 PHP 内建函数
// 完整手册：https://www.runoob.com/php/php-ref-array.html

//02 创建 PHP 函数
function writeName()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();

echo "<br>--------------<br>";

//03 PHP 函数 - 添加参数
function writeName2($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName2("Kai Jim");
echo "My sister's name is ";
writeName2("Hege");
echo "My brother's name is ";
writeName2("Stale");
echo "<br>";

function writeName3($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
echo "My name is ";
writeName3("Kai Jim",".");
echo "My sister's name is ";
writeName3("Hege","!");
echo "My brother's name is ";
writeName3("Ståle","?");
echo "<br>--------------<br>";
//04 PHP 函数 - 返回值
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);
?>