<?php 
// XML 解析
// 如需读取和更新 - 创建和处理 - 一个 XML 文档，您需要 XML 解析器。

// 有两种基本的 XML 解析器类型：

// 基于树的解析器：这种解析器把 XML 文档转换为树型结构。它分析整篇文档，并提供了对树中元素的访问，例如文档对象模型 (DOM)。
// 基于事件的解析器：将 XML 文档视为一系列的事件。当某个具体的事件发生时，解析器会调用函数来处理。
// DOM 解析器是基于树的解析器。

// 请看下面的 XML 文档片段：

// <?xml version="1.0" encoding="ISO-8859-1" 
// <from>Jani</from>
//XML DOM 把上面的 XML 视为一个树形结构：

// Level 1: XML 文档
// Level 2: 根元素： <from>
// Level 3: 文本元素： "Jani"


$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");

print $xmlDoc->saveXML();
// 上面的实例创建了一个 DOMDocument-Object，并把 "note.xml" 中的 XML 载入这个文档对象中。
// saveXML() 函数把内部 XML 文档放入一个字符串，这样我们就可以输出它。

echo '<br>';
// 我们要初始化 XML 解析器，加载 XML，并遍历 <note> 元素的所有元素：
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item)
{
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
// 在上面的实例中，您看到了每个元素之间存在空的文本节点。
// 当 XML 生成时，它通常会在节点之间包含空白。XML DOM 解析器把它们当作普通的元素，如果您不注意它们，有时会产生问题。

//todo学习更多XML Dom教程:https://www.runoob.com/xml/xml-dom.html

?>