<?php 
// PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。
// Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。


// 开始 PHP Session
// 在您把用户信息存储到 PHP session 中之前，首先必须启动会话。
// 注释：session_start() 函数必须位于 <html> 标签之前：

?>


<?php session_start(); 
// 上边的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，同时会为用户会话分配一个 UID。 
// 存储 session 数据
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}
// 如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。

// unset() 函数用于释放指定的 session 变量：
// if(isset($_SESSION['views']))
// {
//     unset($_SESSION['views']);
// }

//您也可以通过调用 session_destroy() 函数彻底销毁 session：
// session_destroy();
?>
 
<html>
<body>
 <?php 
 // 检索 session 数据
 echo "浏览量：". $_SESSION['views'];
 ?>
</body>
</html>