<?php
//测试的时候地址带上?url=http://www.ruåånoøøob.com/,则净化后的 $url 变量所示:http://www.runoob.com/
if(!filter_has_var(INPUT_GET, "url"))
{
    echo("没有 url 参数");
}
else
{
    $url = filter_input(INPUT_GET, 
    "url", FILTER_SANITIZE_URL);
    echo $url;
}
?>