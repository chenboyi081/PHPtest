<?php
// PHP json_encode() 用于对变量进行 JSON 编码，该函数如果执行成功返回 JSON 数据，否则返回 FALSE 。

// 语法
// string json_encode ( $value [, $options = 0 ] )
// 参数
// value: 要编码的值。该函数只对 UTF-8 编码的数据有效。
// options:由以下常量组成的二进制掩码 JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_NUMERIC_CHECK, JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES, JSON_FORCE_OBJECT, JSON_PRESERVE_ZERO_FRACTION, JSON_UNESCAPED_UNICODE, JSON_PARTIAL_OUTPUT_ON_ERROR。

// 要注意的是 JSON_UNESCAPED_UNICODE 选项，如果我们不希望中文被编码，可以添加该选项。


   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
   
//    以上代码执行结果为：
   
//    {"a":1,"b":2,"c":3,"d":4,"e":5}

   
//    使用 JSON_UNESCAPED_UNICODE 选项
   $arr = array('runoob' => '菜鸟教程', 'taobao' => '淘宝网');
   echo json_encode($arr); // 编码中文
   echo PHP_EOL;  // 换行符
   echo json_encode($arr, JSON_UNESCAPED_UNICODE);  // 不编码中文
//    以上代码执行结果为：
//    {"runoob":"\u83dc\u9e1f\u6559\u7a0b","taobao":"\u6dd8\u5b9d\u7f51"}
//    {"runoob":"菜鸟教程","taobao":"淘宝网"}
?>