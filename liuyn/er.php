<?php
header("content-type:text/html;charset=utf-8");
mysql_connect("127.0.0.1",'root','root')or die('连接失败');
mysql_select_db('xiao')or die('打开失败');
$id=$_GET['id'];
$sql="delete from yi where id=$id";
$res = mysql_query($sql);

 //echo $res; die;
if($res){
	echo "<script>alert('删除成功');location.href='yi.php';</script>";
}else{
	echo "<script>alert('删除失败');location.href='yi.php';</script>";
}



?>