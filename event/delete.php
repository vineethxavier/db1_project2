<?php
include('config.php');
if(isset($_GET['del_id']))
{
	$id=$_GET['del_id'];
	$sql=mysql_query("DELETE FROM `tb_event` WHERE  event_id=$id");
	if($sql)
	{
	 echo'<script>window.location="home.php?dash";</script>';	
	}
}
	
?>
