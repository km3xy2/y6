05.21 21:47
用Wordpress安装Mimi Captcha插件，其他项目引用Mimi Captcha插件来生成验证码方法

ksweb安装Wordpress后

用Wordpress安装
Mimi Captcha插件

在Wordpress插件管理里

安装Mimi Captcha

然后可以设置

点一下Wordpress仪表盘按钮

然后，

点Wordpress仪表盘左上角的折叠菜单

展开菜单里有插件管理选项，

点击进入管理设置插件

设置

Mimi Captcha属性


然后ksweb其他项目也可以引用

Mimi Captcha

导入 storage/shared/htdocs/wordpress/wp-content/plugins/mimi-captcha/captcha.php


include  'wordpress/wp-content/plugins/mimi-captcha/captcha.php';


文件即可输出验证码













