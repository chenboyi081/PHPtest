<?php 
// 通过使用 FILTER_CALLBACK 过滤器，可以调用自定义的函数，把它作为一个过滤器来使用。这样，我们就拥有了数据过滤的完全控制权。

// 您可以创建自己的自定义函数，也可以使用已存在的 PHP 函数。

// 将您准备用到的过滤器的函数，按指定选项的规定方法进行规定。在关联数组中，带有名称 "options"。

// 在下面的实例中，我们使用了一个自定义的函数把所有 "_" 转换为 "."：

function convertSpace($string)
{
    return str_replace("_", ".", $string);
}

$string = "www_runoob_com!";

echo filter_var($string, FILTER_CALLBACK,
    array("options"=>"convertSpace"));


?>