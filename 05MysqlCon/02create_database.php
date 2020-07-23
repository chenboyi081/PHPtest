<?php 
// 使用 PDO 实例创建数据库 myDBPDO 
include 'phpsql_head.php';

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    
    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);
    
    echo "数据库创建成功<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

//提示： 使用 PDO 的最大好处是在数据库查询过程出现问题时可以使用异常类来 处理问题。
//如果 try{ } 代码块出现异常，脚本会停止执行并会跳到第一个 catch(){ } 代码块执行代码。
//在以上捕获的代码块中我们输出了 SQL 语句并生成错误信息。
?>