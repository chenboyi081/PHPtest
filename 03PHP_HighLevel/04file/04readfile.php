<!-- 逐行读取文件 -->
<!-- fgets() 函数用于从文件中逐行读取文件。 -->

<!-- 注释：在调用该函数之后，文件指针会移动到下一行。 -->

<?php
$file = fopen("welcome.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
while(!feof($file))
{
    echo fgets($file). "<br>";
}
fclose($file);
?>