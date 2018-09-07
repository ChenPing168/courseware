<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="Public/uploadify/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="Public/uploadify/jquery.uploadify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Public/uploadify/uploadify.css">
</head>
<body>
<!-- html页面 -->
<div lab="uploadFile">
    <input id="f" type="file" multiple="true">
    <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
    <script type="text/javascript">
        $(function() {
            $('#f').uploadify({
                'formData'     : {//POST数据
                    '<?php echo session_name();?>' : '<?php echo session_id();?>',
                },
                'fileTypeDesc' : '上传文件',//上传描述
                'fileTypeExts' : '*.jpg;*.png',
                'swf'      : '<?php echo __PUBLIC__?>/uploadify/uploadify.swf',
                'uploader' : '<?php echo U('upload')?>',
                'buttonText':'选择文件',
                'fileSizeLimit' : '2000KB',
                'uploadLimit' : 10,//上传文件数
                'width':65,
                'height':25,
                'successTimeout':10,//等待服务器响应时间
                'removeTimeout' : 0.2,//成功显示时间
                'onUploadSuccess' : function(file, data, response) {
                    //转为json
                    data=$.parseJSON(data);
                    //获得图片地址
                    var imageUrl = data.url;
                    var li="<li><img src='"+imageUrl+"'/><input type='hidden' name='thumb' value='"+data.path+"'/></li>";
                    $("#uploadList ul").prepend(li);
                }
            });
        });
    </script>
    <div id="uploadList">
        <ul>

        </ul>
    </div>
</div>

</body>
</html>