<!-- 常量是一个简单值的标识符。该值在脚本中不能改变。 -->
<!-- 一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 
(常量名不需要加 $ 修饰符)。 -->
<!-- 注意： 常量在整个脚本中都可以使用。 -->
<?php 
// 设置常量，使用 define() 函数，函数语法如下：

// bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )


// 区分大小写的常量名
// define("GREETING", "欢迎访问 Runoob.com");
// echo GREETING;    // 输出 "欢迎访问 Runoob.com"
// echo '<br>';
// echo greeting;   //报错 输出 "greeting"


// 不区分大小写的常量名
// define("GREETING", "Hello you.", true);//警告：最新7.x的php不推荐不区分大小写
// echo GREETING; // 输出 "Hello you."
// echo Greeting; // 输出 "Hello you."


// 常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。

// 以下实例演示了在函数内使用常量，即便常量定义在函数外也可以正常使用常量。
define("GREETING", "欢迎访问 Runoob.com");

function myTest() {
    echo GREETING;
}

myTest();    // 输出 "欢迎访问 Runoob.com"
?>