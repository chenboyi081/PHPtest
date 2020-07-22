<?php 
// 表单通常由多个输入字段组成。为了避免对 filter_var 或 filter_input 函数重复调用，
// 我们可以使用 filter_var_array 或 the filter_input_array 函数。

// 在本例中，我们使用 filter_input_array() 函数来过滤三个 GET 变量。
// 接收到的 GET 变量是一个名字、一个年龄以及一个 e-mail 地址：

$filters = array
(
    "name" => array
    (
        "filter"=>FILTER_SANITIZE_STRING
    ),
    "age" => array
    (
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array
        (
            "min_range"=>1,
            "max_range"=>120
        )
    ),
    "email"=> FILTER_VALIDATE_EMAIL
);

$result = filter_input_array(INPUT_GET, $filters);

if (!$result["age"])
{
    echo("年龄必须在 1 到 120 之间。<br>");
}
elseif(!$result["email"])
{
    echo("E-Mail 不合法<br>");
}
else
{
    echo("输入正确");
}
?>