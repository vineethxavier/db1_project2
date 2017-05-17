<div class="box box-primary">
                                <div class="box-header">
<?php
//ob_start();
//session_start();

if(! isset($_SESSION['logid']))
{
	header("Location:index.php");
}
 $sess=$_SESSION['logid'];
 //echo $sess;
?>

<form action="#" method="post" onsubmit="return(validate01());">
  <div class="box-body" align="center">

<div class="form-group"> <label for="exampleInputEmail1">Old Password</label> 
     
     <input type="text" name="old_pass" class="form-control" required>
 </div>
 <div class="form-group"> <label for="exampleInputEmail1">New Password</label> 
     
     <input type="text" name="new_pswd" class="form-control" required>
 </div>
<div class="form-group"> <label for="exampleInputEmail1">Re_Enter Password</label> 
     
     <input type="text" name="re_pswd" class="form-control"required >
 </div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
    </div>
    
     </div>
</form>

<?php
//include("config.php");
if(isset($_POST["sub"]))
{


$old_psswrd=$_POST['old_pass'];
$new_pswd=$_POST['new_pswd'];
$re_pswd=$_POST['re_pswd'];

$b = urlencode( base64_encode( $re_pswd ) );
$encoded=mysql_real_escape_string($b);


//$encoded= base64_encode(urlencode($re_pswd));


$sq=mysql_query("select * from tb_login where id='$sess'");
$ro=mysql_fetch_array($sq);


$log_adm_pswd=$ro['password'];
			
$decoded =  base64_decode( urldecode($log_adm_pswd));
	
if($decoded==$old_psswrd)
{
 if($new_pswd==$re_pswd)
 {
 	$sql=mysql_query("UPDATE `tb_login` SET `password`='$encoded' where id='$sess' ");
 	
 echo '<h4 style="color:#01DF01;" align="center">Password Changed Successfully </h4>';
	
	
 }
	
else
 {
	 echo '<h4 style="color:#FF0000;" align="center">New Password and Re-enter password should be same</h4>';
 	
 }
}
 else
 {
	  echo '<h4 style="color:#FF0000;" align="center">Enter The Old Password Correctly</h4>';

 }
}
?>
