<?php 
  include('config.php');include('admincore.php');?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
'; include('inc.php');?>
</head>
<body>
<?php $nav='home';include('head.php');?>
<?='<div id="hd_main">
   <div style="margin:20px;">
   ';
 $path=$_SERVER['SCRIPT_NAME'];if(strpos($path,'/admin/')>-1){echo '<div style="text-align:center; color:red; font-size:16px; margin-bottom:15px;">您的后台目录默认为 域名/admin ，为了安全请尽快修改后台目录</div>';}if($aik['admin_name']=='aik' && $aik['admin_pass']=='a13a02276910cbc879f020ed88816512'){echo '<div style="text-align:center; color:red; font-size:16px; margin-bottom:15px;">您的账号密码为系统默认，请尽快修改</div>';}?>
<?='      <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td colspan="2" align="center">管理系统！</td>
    </tr>
  <tr>
    <td align="right">当前使用版：</td>
    <td><span>V3.2</span></td>
  </tr>
  <tr>
    <td align="right">最新版：</td>
    <td></td>
  </tr>
  <tr>
    <td width="213" align="right">服务器操作系统：</td>
    <td width="387">'; $os=explode(' ',php_uname());echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];}?><?=')</td>
  </tr>
  <tr>
    <td width="213" align="right">服务器解译引擎：</td>
    <td width="387">'; echo $_SERVER['SERVER_SOFTWARE'];?><?='</td>
  </tr>
  <tr>
    <td width="213" align="right">PHP版本：</td>
    <td width="387">'; echo PHP_VERSION?><?='</td>
  </tr>
  <tr>
    <td align="right">域名：</td>
    <td>'; echo $_SERVER['HTTP_HOST']?><?='</td>
  </tr>
  <tr>
    <td align="right">allow_url_fopen：</td>
    <td>'; echo ini_get('allow_url_fopen')?'<span class="green">支持</span>' :'<span class="red">不支持</span>'?><?='</td>
  </tr>
  <tr>
    <td align="right">curl_init：</td>
    <td>'; if(function_exists('curl_init')){echo '<span class="green">支持</span>';}else{echo '<span class="red">不支持</span>';}?><?='</td>
  </tr>

<tr>
    <td align="right">/data/目录权限检测：</td>
    <td>'; echo is_writable('../data/')?'<span class="green">可写</span>' :'<span class="red">不可写</span>'?><?='</td>
  </tr>  

  <tr>
    <td colspan="2" style="line-height:220%; text-indent:28px;"></br>
3.2版本修复：</br>
1.修复分页10页后出问题的bug </br>
2.增加～搞笑～分类 </br>
3.修复搜索出没有资源的视频依然可以点击的BUG </br>
4.后台依据朋友们的要求增加了～畅言～设置 </br>
5.增加了友情链接位置 </br>
6.增加微信对接</td>
    </tr>
   
</table>

   </div>

</div>
'; include('foot.php');?>
</body>
</html>
