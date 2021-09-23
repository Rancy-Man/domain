链接解析和域名解析. 提供二级域名和顶级域名. 持续完善中
### 如何安装
直接使用composer进行安装. 国内请使用阿里云的源. 主要是怕你们下载不下来.
```
composer require lucifer/domain
```
### 如何使用
```
$url_info = \Lucifer\Domain::parseUrl('baidu.com');

var_dump($url_info);
```
最后. 所有数据源信息来源于wiki. 这里会自动转义特殊字符. 
### 感谢
Translate.php来源于
```
https://github.com/true/php-punycode
```
点击此处即可[访问](https://github.com/true/php-punycode)