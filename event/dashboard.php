<!--<h4 align="center"><font color="#DD0003"><a href="home.php?dash">PART-1</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/star.png" height="25"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--<font color="#DD0003">
<a href="home.php?part_2">PART-2</a>
</font>
</h4>-->


<div class="box box-primary">
<div class="box-header" style=" background: #f9f9f9">
<style>
.col-md-2 { width:15%; height:auto !important; margin:5px 24px;}
.col-md-2:hover {  box-shadow: 2px 2px 2px 2px #888888; color:#367FA9 !important; background-color:#DDDDDD; }
.dash { text-align:center !important;  }
.dash p img {  margin:16px 24px; !important; float:left !important; width:80% !important; }
.dash p { float:left !important; }
.dash p a { font-size: 12px !important; text-decoration:none !important; text-align:center !important; text-transform:uppercase !important; }
.dash p a:hover { color:#367FA9 !important; }
</style>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>   
                                <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script language="javascript" type="text/javascript"> 
  function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
  function gesearch(searchs)
   {	
    								var strURL="searchs.php?searchs="+searchs;
					//alert(strURL);
		var req = getXMLHTTP();

		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('ajaxsearch').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	</script>

<div class="box-header">
<div class="col-xs-12" align="center"><br /><br />
 Search<input type="date" name="search" id="search" onchange="gesearch(this.value);"/><br /><br />
</div>
<div class="box-body table-responsive" id="ajaxsearch">
           
<br /><table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Calender:</th>
                                 
                                        <th> City</th>
                                        <th>Whether Event</th>
                                         <th>Precipitation Type</th>
                                          <th>Precipitation Amount</th>
                                        <th>Cloud Coverage</th>
                                       <th>Temperature</th>
                                       <th>Edit</th>
                                       <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody><?php 
$query=mysql_query("select * from tb_event ");
while($row=mysql_fetch_array($query))
{

?>  
                                    <tr class="odd gradeX">
                                  	 <td><?php echo $row['calender'];?></td>
                                     
                                     <td><?php echo $row['city'];?></td>
									
                                      <td><?php echo $row['whether_event'];?></td>
                         <td><?php echo $row['precipitation_type'];?></td>
                          <td><?php echo $row['precipitation_amount'];?></td> 
                          <td><?php echo $row['cloud_coverage'];?></td>
                       		  <td><?php echo $row['temperature'];?></td>		  
                                  <td><a href="home.php?edit_event=<?php echo $row['event_id']?>"><i class="fa fa-edit "></i>
</a></td>
                                  <td><a href="delete.php?del_id=<?php echo $row['event_id']; ?>" class="style2" onClick="return confirm('Are you sure you want delete?');"><i class="fa fa-trash-o"></i>
</a></td>
                                </tr>
                                      <?php } ?>
                                </tbody>
                            </table>
                            
                            </div>
                            </div>







</div>
</div>


