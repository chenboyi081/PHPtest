<?php 
//00 超级全局变量在PHP 4.1.0之后被启用, 是PHP系统中自带的变量，在一个脚本的全部作用域中都可用。
// PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。 你不需要特别说明，就可以在函数及类中使用。
// PHP 超级全局变量列表:
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION
//https://www.runoob.com/php/php-superglobals.html

//01 $GLOBALS
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z; 
echo "<br>";

//02 $_SERVER
echo $_SERVER['PHP_SELF'];  //当前执行脚本的文件名，与 document root 有关。
echo "<br>";
echo $_SERVER['SERVER_NAME']; //当前运行脚本所在的服务器的主机名。
echo "<br>";
echo $_SERVER['HTTP_HOST'];     //当前请求头中 Host: 项的内容，如果存在的话。
echo "<br>";
echo $_SERVER['HTTP_REFERER'];  //引导用户代理到当前页的前一页的地址（如果存在）。由 user agent 设置决定。并不是所有的用户代理都会设置该项，
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];   //包含当前脚本的路径。



//03 $_REQUEST
//PHP $_REQUEST 用于收集HTML表单提交的数据。


//04 $_POST
//PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。

//05  $_GET
// PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。
// $_GET 也可以收集URL中发送的数据。

?>