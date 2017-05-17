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
	
			$id=$_GET['edit_event'];
				
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
									
										$sql=mysql_query("UPDATE `tb_event` SET `calender`='$date', `time_duration`='$timedurartion', `city`='$city', `whether_event`='$weatherevent', `precipitation_type`='$precipitationtype', `precipitation_amount`='$amount', `cloud_coverage`='$cloud_coverage', `temperature`='$temperature' where event_id =$id");
										
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
				if (charCode==46)
		 		{
		 			return true;
		 		}
       	 		return false;
    		}
    		return true;
		}
		</script>
<div class="box-body">
<?php 
$id=$_GET['edit_event'];
$result=mysql_query("SELECT * FROM `tb_event` WHERE  event_id=$id");
while($row=mysql_fetch_array($result))
{
	
?>
<form action="#" method="post" onsubmit="return(validate());" name="add_event" width="100%" enctype="multipart/form-data"/>
<div class="form-group" > <label for="exampleInputEmail1">Calender:</label> 
     <input class="form-control" type="date" name="date"  id="date" value="<?php echo $row['calender'];?>" maxlength="80"  />
 </div>
 <div  class="form-group">
				<h4> Time Duration</h4> 
				<select name="timedurartion" class="form-control" >
                <option value="00-01" <?php if($row['time_duration']=='00-01'){echo 'selected';}?>>00-01</option>
					<option value="01-02" <?php if($row['time_duration']=='01-02'){echo 'selected';}?>>01-02</option>
					<option value="02-03" <?php if($row['time_duration']=='02-03'){echo 'selected';}?>>02-03</option>
					<option value="03-04" <?php if($row['time_duration']=='03-04'){echo 'selected';}?>>03-04</option>
					<option value="04-05" <?php if($row['time_duration']=='04-05'){echo 'selected';}?>>04-05</option>
					<option value="05-06" <?php if($row['time_duration']=='05-06'){echo 'selected';}?>>05-06</option>
					<option value="06-07" <?php if($row['time_duration']=='06-07'){echo 'selected';}?>>06-07</option>
					<option value="07-08" <?php if($row['time_duration']=='07-08'){echo 'selected';}?>>07-08</option>
					<option value="08-09" <?php if($row['time_duration']=='08-09'){echo 'selected';}?>>08-09</option>
					<option value="09-10" <?php if($row['time_duration']=='09-10'){echo 'selected';}?>>09-10</option>
					<option value="10-11" <?php if($row['time_duration']=='10-11'){echo 'selected';}?>>10-11</option>
					<option value="11-12" <?php if($row['time_duration']=='11-12'){echo 'selected';}?>>11-12</option>
					<option value="12-13" <?php if($row['time_duration']=='12-13'){echo 'selected';}?>>12-13</option>
					<option value="13-14" <?php if($row['time_duration']=='13-14'){echo 'selected';}?>>13-14</option>
					<option value="14-15" <?php if($row['time_duration']=='14-15'){echo 'selected';}?>>14-15</option>
					<option value="15-16" <?php if($row['time_duration']=='15-16'){echo 'selected';}?>>15-16</option>
					<option value="16-17" <?php if($row['time_duration']=='16-17'){echo 'selected';}?>>16-17</option>
					<option value="17-18" <?php if($row['time_duration']=='17-18'){echo 'selected';}?>>17-18</option>
					<option value="18-19" <?php if($row['time_duration']=='18-19'){echo 'selected';}?>>18-19</option>
					<option value="19-20" <?php if($row['time_duration']=='19-20'){echo 'selected';}?>>19-20</option>
					<option value="20-21" <?php if($row['time_duration']=='20-21'){echo 'selected';}?>>20-21</option>
					<option value="21-22" <?php if($row['time_duration']=='21-22'){echo 'selected';}?>>21-22</option>
					<option value="22-23" <?php if($row['time_duration']=='22-23'){echo 'selected';}?>>22-23</option>
					<option value="23-24" <?php if($row['time_duration']=='23-24'){echo 'selected';}?>>23-24</option>
				</select>				
			</div>
            <div class="form-group" > <label for="exampleInputEmail1">City</label> 
     <select name="city" class="form-control">
  				   <option value="Athens" <?php if($row['city']=='Athens'){echo 'selected';}?>>Athens</option>
					<option value="Rome" <?php if($row['city']=='Rome'){echo 'selected';}?>>Rome</option>
					<option value="Paris" <?php if($row['city']=='Paris'){echo 'selected';}?>>Paris</option>
					<option value="Berlin" <?php if($row['city']=='Berlin'){echo 'selected';}?>>Berlin</option>
				</select>
 </div>
 <div class="form-group" > <label for="exampleInputEmail1">Whether Event</label> 
 <select name="weatherevent" class="form-control"  id="weatherevent" onchange="getprecipitationtype(this.value);" >
 					<option value="Rain" <?php if($row['whether_event']=='Rain'){echo 'selected';}?> >Rain</option>
					<option value="Hail" <?php if($row['whether_event']=='Hail'){echo 'selected';}?>>Hail</option>
					<option value="Snow" <?php if($row['whether_event']=='Snow'){echo 'selected';}?>>Snow</option>
					<option value="Freazing Rain" <?php if($row['whether_event']=='Freazing Rain'){echo 'selected';}?>>Freazing Rain</option>
					<option value="Thunder Storm" <?php if($row['whether_event']=='Thunder Storm'){echo 'selected';}?>>Thunder Storm</option>
				</select>
                </div>

  
 
 <div class="form-group" id="ajaxprecipitationtype"> <label for="exampleInputEmail1">Precipitation Type </label> 
     <select name="precipitationtype" id="precipitationtype" class="form-control"  >
					<option value="Rain"<?php if('Rain'=='Rain'){echo 'selected';}?> >Rain</option>
					<option value="Snow" <?php if('Snow'=='Snow'){echo 'selected';}?>>snow</option>
				</select>
 </div>
 <div class="form-group" > <label for="exampleInputEmail1">Precipitation Amount </label> 
     <input class="form-control" type="text" name="amount"  id="amount" maxlength="80" value="<?php echo $row['precipitation_amount'];?>" onKeyPress="return isNum(event)" />
 </div>
 
 <div class="form-group" > <label for="exampleInputEmail1">Cloud Coverage</label> 
    <select name="cloud_coverage" class="form-control" id="cloud_coverage">
   					<option value="0" <?php if($row['cloud_coverage']=='0'){echo 'selected';}?>>0</option>
					<option value="1" <?php if($row['cloud_coverage']=='1'){echo 'selected';}?>>1</option>
					<option value="2" <?php if($row['cloud_coverage']=='2'){echo 'selected';}?>>2</option>
					<option value="3" <?php if($row['cloud_coverage']=='3'){echo 'selected';}?>>3</option>
					<option value="4" <?php if($row['cloud_coverage']=='4'){echo 'selected';}?>>4</option>
					<option value="5" <?php if($row['cloud_coverage']=='5'){echo 'selected';}?>>5</option>
					<option value="6" <?php if($row['cloud_coverage']=='6'){echo 'selected';}?>>6</option>
				</select>
 </div>
 <div class="form-group" > <label for="exampleInputEmail1">Temperature</label> 
    <input class="form-control" type="text" name="temperature" value="<?php echo $row['temperature'];?>" id="temperature" maxlength="80" onKeyPress="return isNum(event)"/>
 </div>
 <?php } ?>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form></div>


