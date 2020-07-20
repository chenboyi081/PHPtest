
<!-- PHP 文件处理:https://www.runoob.com/php/php-file.html -->

<!-- 1.打开文件 -->
<!-- fopen() 函数用于在 PHP 中打开文件。 -->

<!-- 此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件： -->
<html>
<body>

<?php
$file=fopen("welcome.txt","r") or exit("Unable to open file!");
?>

</body>
</html>


