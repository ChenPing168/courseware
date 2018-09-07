1.更改hosts文件

2.开启主配置文件（/etc/httpd/conf/httpd.conf）NameVirtualHost *:80  

3.在扩展配置文件(/etc/httpd/conf.d/vitual.conf) 写入以下内容

<VirtualHost *:80>
    ServerAdmin houdunwangmzy@163.com
    DocumentRoot /www/qq
    ServerName www.qq.com
</VirtualHost>
<VirtualHost *:80>
    ServerAdmin houdunwangmzy@163.com
    DocumentRoot /www/hd
    ServerName www.hd.com
</VirtualHost>

4.在/www目录创建 hd和qq目录，里面放入不同的文件，实现
www.hd.com访问hd目录
www.qq.com访问qq目录






