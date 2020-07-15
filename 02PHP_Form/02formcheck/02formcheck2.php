<?php
// 定义变量并默认设置为空值
// 我们可以通过test_input()函数来检测 $_POST 中的所有变量, 脚本代码如下所示
// 当用户提交表单时，我们将做以下两件事情：
// 使用 PHP trim() 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
// 使用PHP stripslashes()函数去除用户输入数据中的反斜杠 (\)
$name = $email = $gender = $comment = $website = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}
 
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>