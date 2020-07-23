<?php 
// 在我们访问 MySQL 数据库前，我们需要先连接到数据库服务器：

include 'phpsql_head.php';
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
// 连接在脚本执行完后会自动关闭。你也可以使用以下代码来关闭连接：
$conn = null;


?>