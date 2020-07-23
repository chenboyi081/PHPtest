<?php 
// 我们将创建一个名为 "MyGuests" 的表，有 5 个列： "id", "firstname", "lastname", "email" 和 "reg_date":

// CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
//     )
//     上表中的注意事项:
    
//     数据类型指定列可以存储什么类型的数据。完整的数据类型请参考我们的 数据类型参考手册。
    
//     在设置了数据类型后，你可以为每个列指定其他选项的属性：
    
//     NOT NULL - 每一行都必须含有值（不能为空），null 值是不允许的。
// DEFAULT value - 设置默认值
// UNSIGNED - 使用无符号数值类型，0 及正数
// AUTO INCREMENT - 设置 MySQL 字段的值在新增记录时每次自动增长 1
// PRIMARY KEY - 设置数据表中每条记录的唯一标识。 通常列的 PRIMARY KEY 设置为 ID 数值，与 AUTO_INCREMENT 一起使用。
// 每个表都应该有一个主键(本列为 "id" 列)，主键必须包含唯一的值。


include 'phpsql_head.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 使用 sql 创建数据表
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    
    // 使用 exec() ，没有结果返回
    $conn->exec($sql);
    echo "数据表 MyGuests 创建成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>