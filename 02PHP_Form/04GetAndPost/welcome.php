<?php 
echo '欢迎' . htmlspecialchars($_GET["fname"]) . '!<br>'.
'你的年龄是 ' .  htmlspecialchars($_GET["age"]) . '岁。'

// 何时使用 method="get"？
// 在 HTML 表单中使用 method="get" 时，所有的变量名和值都会显示在 URL 中。
// 注释：所以在发送密码或其他敏感信息时，不应该使用这个方法！
// 然而，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。
// 注释：HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。
?>
