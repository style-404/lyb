<?php
header("Content-type:text/html;charset=utf8");//字符编码设置   
$conn = @ mysql_connect("localhost", "root", "123456") or die("数据库链接错误");
mysql_select_db("bbs", $conn);
mysql_query("set names 'utf8'"); //使用utf-8中文编码;
?>