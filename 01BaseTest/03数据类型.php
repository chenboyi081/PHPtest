<?php 
//// 01
// $x = "Hello world!";
// echo $x;
// echo "<br>";
// $x = 'Hello world!';
// echo $x;

//02整数 PHP var_dump() 函数返回变量的数据类型和值：
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);


//03布尔
// $x=true;
// $y=false;

//04 数组
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);

//05 对象
class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}
// 实例一个对象
$herbie = new Car("white");

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($herbie);

//06 PHP NULL 值
$x="Hello world!";
$x=null;
var_dump($x);
?>