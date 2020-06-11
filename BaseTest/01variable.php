<?php 
$x=5;
$y=6;
$z=$x+$y;
echo $z;

//PHP 有四种不同的变量作用域local,global,static,parameter
$gg= 5;//全局变量
function my_test(){
    global $gg;
    $jb = 10;//局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 gg 为: $gg";
    echo "<br>";
    echo "变量jb 为: $jb";
}
my_test();
echo "<p>测试函数外变量:<p>";
echo "变量 gg 为: $gg";
echo "<br>";
// echo "变量jb 为: $jb";    //报错

// PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。
// index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
myTest();
echo $y;


?>