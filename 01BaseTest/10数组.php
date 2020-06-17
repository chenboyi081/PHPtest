<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br/>";

//02 获取数组的长度 - count() 函数
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br/>";

//03遍历数值数组
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}

//04 PHP 关联数组
// 关联数组是使用您分配给数组的指定的键的数组。
// 这里有两种创建关联数组的方法：
// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// 或者是：
// $age['Peter']="35";
// $age['Ben']="37";
// $age['Joe']="43";


//05 遍历关联数组
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


//06 多维数组 在高级教程部分讲解

//07 PHP 数组排序https://www.runoob.com/php/php-arrays-sort.html
//sort() - 对数组进行升序排列
$cars=array("Volvo","BMW","Toyota");
sort($cars);
print_r($cars);
echo "<br>";

$numbers=array(4,6,2,22,11);
sort($numbers);
print_r($numbers);
echo "<br>";

//08 rsort() - 对数组进行降序排列

//09 asort() - 根据数组的值，对数组进行升序排列
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);
echo "<br>";

//10 ksort() - 根据数组的键，对数组进行升序排列
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
print_r($age);
echo "<br>";


//11 arsort() - 根据数组的值，对数组进行降序排列
//12 krsort() - 根据数组的键，对数组进行降序排列
?>  