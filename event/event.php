<h4 align="center"><font color="#FC8116"></font></h4>
<div class="box box-primary">
                                <div class="box-header">
                                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>   
                                <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
                                <script type="text/javascript">
$(document).ready(function() {
	
    $("#weatherevent").on("change", function()
    {
  
    });
});
</script>
<script>
function getprecipitationtype(value)
{
	
	$('#precipitationtype').val(value);
	
	  var weatherevent= $('#weatherevent').val(); 
	  var a="<option value='"+weatherevent+"'>"+weatherevent+"</option>"
		$("#precipitationtype").html(a);
       if(weatherevent=='Freazing Rain'|| weatherevent=='Thunder Storm' || weatherevent=='Hail')
	   {
		    
			  //$("#ontype").hide();   
			 $("#precipitationtype").prop("disabled",true); 
			 $("#precipitationtype").html("<option>--select--</option>");
	
	   }
	   else {
		$("#precipitationtype").prop("disabled",false);  
	   }
}
</script>
                                
    

<?php
ob_start();
//session_start();

if(! isset($_SESSION['logid']))
{
	header("Location:index.php");
}
?>
<?php
include("tinymce.php");
if(isset($_POST['submit']))
{
	
			
				
				$date=$_POST['date'];
				$timedurartion=$_POST['timedurartion'];
				$city=$_POST['city'];
				$weatherevent=$_POST['weatherevent'];
				if($weatherevent=='Rain' || $weatherevent=='Snow' )
				{
					$precipitationtype=$_POST['precipitationtype'];
				}
				else
				{
				$precipitationtype="";
				}
				
				$amount=$_POST['amount'];
				$cloud_coverage=$_POST['cloud_coverage'];
				$temperature=$_POST['temperature'];
									
										$sql=mysql_query("INSERT INTO `tb_event`(`calender`, `time_duration`, `city`, `whether_event`, `precipitation_type`, `precipitation_amount`, `cloud_coverage`, `temperature`) VALUES ('$date','$timedurartion','$city','$weatherevent','$precipitationtype','$amount','$cloud_coverage','$temperature')");
										
										if($sql)
										{
										echo '<h4 style="color:#01DF01;" align="center">Successfully added</h4>';
										}
										else
										{	
											echo '<h4 style="color:red;" align="center">Error</h4>';
										}
								
						
}


?>
<script type="text/javascript">
function validate()
{
	if( document.add_event.date.value == "" )
   {
     alert( "Please provide Date!" );
     document.add_event.date.focus() ;
     return false;
   }
   if( document.add_event.timedurartion.value == "" )
   {
     alert( "Please provide Time Durartion!" );
     document.add_event.timedurartion.focus() ;
     return false;
   }
     if( document.add_event.city.value == "" )
   {
     alert( "Please provide City!" );
     document.add_event.city.focus() ;
     return false;
   }
       if( document.add_event.weatherevent.value == "" )
   {
     alert( "Please provide Weatherevent!" );
     document.add_event.weatherevent.focus() ;
     return false;
   }
     
    
       if( document.add_event.amount.value == "" )
   {
     alert( "Please provide  Precipitation Amount!" );
     document.add_event.amount.focus() ;
     return false;
   }

       if( document.add_event.cloud_coverage.value == "" )
   {
     alert( "Please provide Cloud Coverage!" );
     document.add_event.cloud_coverage.focus() ;
     return false;
   }
       if( document.add_event.temperature.value == "" )
   {
     alert( "Please provide Temperature!" );
     document.add_event.temperature.focus() ;
     return false;
   }
      
   return( true );
}
</script>
<script>
	function isNum(evt) 
		{
    		evt = (evt) ? evt : window.event;
   		 	var charCode = (evt.which) ? evt.which : evt.keyCode;
   		 	if (charCode > 31 && (charCode < 48 || charCode > 57 ) )
		 	{
       	 		return false;
    		}
    		return true;
		}
		function isfloat(evt) 
		{
    		evt = (evt) ? evt : window.event;
   		 	var charCode = (evt.which) ? evt.which : evt.keyCode;
   		 	if (charCode > 31 && (charCode < 48 || charCode > 57 ) && charCode > 46 )
		 	{
       	 		return false;
    		}
    		return true;
		}
		</script>
<div class="box-body">

<form action="#" method="post" onsubmit="return(validate());" name="add_event" width="100%" enctype="multipart/form-data"/>
<div class="form-group" > <label for="exampleInputEmail1">Calender:</label> 
     <input class="form-control" type="date" name="date"  id="date" maxlength="80"  />
 </div>
 <div  class="form-group">
				<h4> Time Duration</h4> 
				<select name="timedurartion" class="form-control" >
                <option value="">--Select--</option>
					<option value="00-01">00-01</option>
					<option value="01-02">01-02</option>
					<option value="02-03">02-03</option>
					<option value="03-04">03-04</option>
					<option value="04-05">04-05</option>
					<option value="05-06">05-06</option>
					<option value="06-07">06-07</option>
					<option value="07-08">07-08</option>
					<option value="08-09">08-09</option>
					<option value="09-10">09-10</option>
					<option value="10-11">10-11</option>
					<option value="11-12">11-12</option>
					<option value="12-13">12-13</option>
					<option value="13-14">13-14</option>
					<option value="14-15">14-15</option>
					<option value="15-16">15-16</option>
					<option value="16-17">16-17</option>
					<option value="17-18">17-18</option>
					<option value="18-19">18-19</option>
					<option value="19-20">19-20</option>
					<option value="20-21">20-21</option>
					<option value="21-22">21-22</option>
					<option value="22-23">22-23</option>
					<option value="23-24">23-24</option>
				</select>				
			</div>
            <div class="form-group" > <label for="exampleInputEmail1">City</label> 
     <select name="city" class="form-control">
  				   <option value="">--Select--</option>
					<option value="Athens">Athens</option>
					<option value="Rome">Rome</option>
					<option value="Paris">Paris</option>
					<option value="Berlin">Berlin</option>
				</select>
 </div>
 <div class="form-group" > <label for="exampleInputEmail1">Whether Event</label> 
 <select name="weatherevent" class="form-control"  id="weatherevent" onchange="getprecipitationtype(this.value);" >
 					<option value="">--Select--</option>
					<option value="Rain">Rain</option>
					<option value="Hail">Hail</option>
					<option value="Snow">Snow</option>
					<option value="Freazing Rain">Freazing Rain</option>
					<option value="Thunder Storm">Thunder Storm</option>
				</select>
                </div>

  
 
 <div class="form-group" id="ajaxprecipitationtype"> <label for="exampleInputEmail1">Precipitation Type </label> 
     <select name="precipitationtype" id="precipitationtype" class="form-control"  >
     				
                    
                  <option value="">--Select--</option>
					<?php /*?><option value="Rain"<?php if('Rain'=='Rain'){echo 'selected';}?> >Rain</option>
                   
					<option value="Snow" <?php if('Snow'=='Snow'){echo 'selected';}?>>snow</option><?php */?>
                 
				</select>
 </div>

 
 
 
 <div class="form-group" > <label for="exampleInputEmail1">Precipitation Amount </label> 
     <input class="form-control" type="text" name="amount"  id="amount" maxlength="80" onKeyPress="return isNum(event)" />
 </div>
 
 <div class="form-group" > <label for="exampleInputEmail1">Cloud Coverage</label> 
    <select name="cloud_coverage" class="form-control" id="cloud_coverage">
   					 <option value="">--Select--</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
 </div>
 <div class="form-group" > <label for="exampleInputEmail1">Temperature</label> 
    <input class="form-control" type="text" name="temperature"  id="temperature" onkeypress="return isfloat(event)" maxlength="80" />
 </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form></div>


