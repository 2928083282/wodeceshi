<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<input type="text" name="neirong" id="neirong1" value="">
<input type="submit" name="submit" id="button" value="提交">
</form>
<?php  //判断用户是否正常提交的程序
$pathname=$_SERVER['PHP_SELF'];                         //保存当前页面名称              
if($_SERVER['REQUEST_METHOD']=='POST')                  //是否为POST方式提交      
{
	$ref=$_SERVER['HTTP_REFERER'];                      //获取表单提交前的URL     
	$url="http://{$_SERVER['SERVER_NAME']}$pathname";   //获取当前的URL             
	echo "当前页来源为：".$ref."<br>服务器地址为：".$url;              
	if(strcmp($url,$ref)==0)                            //比较两个URL是否相同
	{                                                          
		echo "正常提交";                                   
	}else{                                           
		echo "不允许提交外部数据";                 
	}                                           
}else{                                   
		echo "请先提交表单";                                
	}
?>

















</body>
</html>