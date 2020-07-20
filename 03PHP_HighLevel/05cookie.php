<?php 
// Cookie 是什么？
// cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。

//设置cookies
setcookie("user", "runoob", time()+3600);

$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);

// 取回 Cookie的值
echo $_COOKIE["user"];

//查看所有 cookie
print_r($_COOKIE);

// 我们使用 isset() 函数来确认是否已设置了 cookie
isset($_COOKIE["user"]);

// 删除 Cookie
// 设置 cookie 过期时间为过去 1 小时
setcookie("user", "", time()-3600);





?>
