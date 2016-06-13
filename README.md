# Ling-FM

一个简单 (Jian Lou) 的音乐电台

------

# 安装

- 创建数据库，导入 fm.sql

- 配置数据库配置文件 application/config/database.php

- 将 application/views/fm_view.php 里的 ` <title>Ling</title> ` 的 Ling 改为你的标题

- 将 fm.js 第一行里的 ` http://example.org/ ` 改为你的域名

- 压缩一下css和js

------

# 管理

**没有后台，直接操作数据库吧，用 phpMyAdmin 或 Adminer，向表 Ling_fm 添加数据**

id	是序号，纯数字，从1开始，不可重复。  例： 1

name 是音乐名称。  例： Test

url	是音乐地址，支持mp3和ogg格式。  例： http://example.org/test.mp3

img 是图片地址。  例： http://example.org/test.jpg


**例子**

>id 1  
>name Test1  
>url http://example.org/test1.mp3  
>img http://example.org/test1.jpg  

>id 2  
>name Test2  
>url http://example.org/test2.ogg  
>img http://example.org/test2.png  

>id 3  
>name Test3  
>url http://example.com/test3.mp3  
>img http://example.com/test3.jpg  
