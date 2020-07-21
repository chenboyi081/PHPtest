<?php
// 选项和标志用于向指定的过滤器添加额外的过滤选项。

// 不同的过滤器有不同的选项和标志。

$var=300;
 
$int_options = array(
    "options"=>array
    (
        "min_range"=>0,
        "max_range"=>256
    )
);
 
if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))    //选项必须放入一个名为 "options" 的相关数组中。如果使用标志，则不需在数组内。
{
    echo("不是一个合法的整数");
}
else
{
    echo("是个合法的整数");
}
?>