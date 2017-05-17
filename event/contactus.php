
<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WeaatherData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!--  <style>
  footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}

</style>-->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
  $('#username').focus(); // Focus to the username field on body loads
  $('#login').click(function(){ // Create `click` event function for login
    var username = $('#username'); // Get the username field
    var password = $('#password'); // Get the password field
    var login_result = $('.login_result'); // Get the login result div
    login_result.html('loading please wait..'); // Set the pre-loader can be an animation
    if(username.val() == ''){ // Check the username values is empty or not
      username.focus(); // focus to the filed
      login_result.html('<span class="error">Enter the username</span>');
      return false;
    }
    if(password.val() == ''){ // Check the password values is empty or not
      password.focus();
      login_result.html('<span class="error">Enter the password</span>');
      return false;
    }
    if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
      var UrlToPass = 'action=login&username='+username.val()+'&password='+password.val();
      
      $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
      type : 'POST',
      data : UrlToPass,
      url  : 'checker.php',
      success: function(responseText){ // Get the result and asign to each cases
        if(responseText == 0){
          
          login_result.html('<span class="error">Username or Password Incorrect!</span>');
        }
        else if(responseText == 1){
          window.location = 'testing.php';
        }
        else{
          alert('Unable to login ,Please contact your service provider');
        }
      }
      });
    }
    return false;
  });
});
</script>

</head>
<body background="background.jpg">

<div class="container" >
    <div class="jumbotron" style="background-color:#66a3ff;">
    <h1>Weather Data</h1>
    <p> Place for complete weather information</p>	
    </div>  <!-- banner-->
      <marquee behavior="scroll" scrolldelay="70" bgcolor= "#e8e683" height="90%">
      <strong>Welcome to WeatherData !!</strong></marquee>

      

    
    <div class="panel-body col-md-12" style="background-color:lavender;"> 
     <div class="row">  	
	     <button onclick="window.location.href='index.php'"type="button" class="btn btn-primary col-md-2">Home</button>
	     <button type="button" class="btn btn-primary col-md-2">Contact us</button>
	     <button type="button" class="btn btn-primary col-md-2">About</button>

        <div class="col-md-6" id="login_result">
          username<input type="text" name="username" id="username"> password</input>
          <input type="password" name="password" id="password"></input>
        </div>
      </div>

     <div class="row">
      <span class="col-md-8"></span>
        <button type="button" class="btn btn-primary" name="login" id="login">Login</button>
       
        <button type="button" onclick="window.location.href='registerv.html'" class="btn btn-primary ">Register</button>
        <a href="forgotpassword.php">forgot password?</a>
     </div>
    </div>
</div>

  <div>

  </div><!-- left column-->

  <div class="container">
	 <nav class="navbar navbar-default">
	    <div class="container-fluid">
      	<div>
        		<ul class="nav navbar-nav">        
      		  </ul>
    	 </div>
  	 </div>
	 </nav>
  </div><!-- menu-->


  <div class="container"id="ajaxsearch">
           
<div class="container" >
        <div class="row col-md-12"  style="border-style: solid; font-weight: bold;">
            <div class="col-md-6" > Project Members </div> <div class="col-md-6"> UTD ID </div>
        </div>
        
        <div class="row col-md-12">
            <div class="col-md-6"style="border-style: solid;font-weight: bold;"> Vineeth Xavier </div> <div class="col-md-6"style="border-style: solid;font-weight: bold;"> 1001169649 </div>
        </div>
        
        <div class="row col-md-12">
            <div class="col-md-6"style="border-style: solid;font-weight: bold;"> Adhavann Ramalingam </div> <div class="col-md-6"style="border-style: solid;font-weight: bold;"> 1001243532  </div>
        </div>
        
        <div class="row col-md-12">
            <div class="col-md-6" style="border-style: solid;font-weight: bold;">Siddharth Shah </div> <div class="col-md-6"style="border-style: solid;font-weight: bold;">  1001235577</div>
        </div>
        
        <div class="row col-md-12">
            <div class="col-md-6" style="border-style: solid;font-weight: bold;"> Shivesh Singh </div> <div class="col-md-6" style="border-style: solid;font-weight: bold;"> 1001231391  </div>
        </div>
  </div>
    
<br>     
<br> 
<br> 
                       
    <section >                     
  <footer class="footer clearfix">
  <div class="navbar navbar-default text-center container"  style="background-color:#679898;">
   
     <p>
     &#169; copyright Weather Data UTA 2015<br />  Contact 
          <a href="mailto:vineethxaviercs3@gmail.com">vineethxaviercs3@gmail.com</a>
      </p>
      </div>
    </footer>
</section>






</body>
</html>