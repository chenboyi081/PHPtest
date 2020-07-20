<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php 
// 防止 e-mail 注入的最好方法是对输入进行验证。https://www.runoob.com/php/php-secure-mail.html
// 下面的代码与上一章中的类似，不过这里我们已经增加了检测表单中 email 字段的输入验证程序：
function spamcheck($field)
{
    // filter_var() 过滤 e-mail
    // 使用 FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);
    
    //filter_var() 过滤 e-mail
    // 使用 FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if (isset($_REQUEST['email']))
{
    // 如果接收到邮箱参数则发送邮件
    
    // 判断邮箱是否合法
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
        echo "非法输入";
    }
    else
    {
        // 发送邮件
        $email = $_REQUEST['email'] ;
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        mail("someone@example.com", "Subject: $subject",
            $message, "From: $email" );
        echo "Thank you for using our mail form";
    }
}
else
{
    // 如果没有邮箱参数则显示表单
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}


?>
</body>
</html>