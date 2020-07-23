<?php 
// 预处理语句对于防止 MySQL 注入是非常有用的。
// 预处理语句及绑定参数
// 预处理语句用于执行多个相同的 SQL 语句，并且执行效率更高。

// 一、预处理语句的工作原理如下：
// 1.预处理：创建 SQL 语句模板并发送到数据库。预留的值使用参数 "?" 标记 。例如：
// INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)
// 2.数据库解析，编译，对SQL语句模板执行查询优化，并存储结果不输出。
// 3.执行：最后，将应用绑定的值传递给参数（"?" 标记），数据库执行语句。应用可以多次执行语句，如果参数的值不一样。

// 二、相比于直接执行SQL语句，预处理语句有三个主要优点：
// 1.预处理语句大大减少了分析时间，只做了一次查询（虽然语句多次执行）。
// 2.绑定参数减少了服务器带宽，你只需要发送查询的参数，而不是整个语句。
// 3.预处理语句针对SQL注入是非常有用的，因为参数值发送后使用不同的协议，保证了数据的合法性。

include 'phpsql_head.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 预处理 SQL 并绑定参数
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    
    // 插入行
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();
    
    // 插入其他行
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();
    
    // 插入其他行
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();
    
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>