<!-- 逐字符读取文件 -->
<!-- fgetc() 函数用于从文件中逐字符地读取文件。 -->

<!-- 注释：在调用该函数之后，文件指针会移动到下一个字符。 -->

<?php
$file=fopen("welcome.txt","r") or exit("无法打开文件!");
while (!feof($file))
{
    echo fgetc($file);
}
fclose($file);

// PHP Filesystem 参考手册:https://www.runoob.com/php/php-ref-filesystem.html
?>