欢迎 <?php echo $_POST["fname"]; ?>!<br>
你的年龄是 <?php echo $_POST["age"]; ?>  岁。


<!-- 预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。 -->
<!-- 从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。 -->
<!-- 注释：然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。 -->

<!-- PHP $_REQUEST 变量 -->
<!-- 预定义的 $_REQUEST 变量包含了 $_GET、$_POST 和 $_COOKIE 的内容。 -->
<!-- $_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。 -->
<br>
欢迎 <?php echo $_REQUEST["fname"]; ?>!<br>
你的年龄是 <?php echo $_REQUEST["age"]; ?>  岁。