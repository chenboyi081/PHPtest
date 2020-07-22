<?php 
// PHP 7 新增加的 NULL 合并运算符（??）是用于执行isset()检测的三元运算的快捷方式。

// NULL 合并运算符会判断变量是否存在且值不为NULL，如果是，它就会返回自身的值，否则返回它的第二个操作数。

// 以前我们这样写三元运算符：

// $site = isset($_GET['site']) ? $_GET['site'] : '菜鸟教程';
// 现在我们可以直接这样写：

// $site = $_GET['site'] ?? '菜鸟教程';

// 获取 $_GET['site'] 的值，如果不存在返回 '菜鸟教程'
$site = $_GET['site'] ?? '菜鸟教程';

print($site);
print("<br>"); // PHP_EOL 为换行符


// 以上代码等价于
$site = isset($_GET['site']) ? $_GET['site'] : '菜鸟教程';

print($site);
print("<br>");
// ?? 链
$site = $_GET['site'] ?? $_POST['site'] ?? '菜鸟教程';

print($site);
?>