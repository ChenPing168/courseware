vi /etc/httpd/conf/httpd.conf

修改默认访问目录
DocumentRoot "/var/www/html” 改成 "/www"
再往下面拖，找到
<Directory "var/www/html"> 改成 <Directory "/www">

apachectl restart

然后在/www目录建立一个文件输出东西
