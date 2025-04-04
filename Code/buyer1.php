<?php
include("config.php");
if(isset($_POST['submit']))
{

	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
    $date=mysql_real_escape_string($_POST['date']);
	$mobileno=mysql_real_escape_string($_POST['mobileno']);
	$address=mysql_real_escape_string($_POST['address']);
	$pinno=mysql_real_escape_string($_POST['pinno']);
	$dist=mysql_real_escape_string($_POST['dist']);
	$productdetails=mysql_real_escape_string($_POST['productdetails']);
	
	
	
	mysql_query("insert into reg1(id,username,password,date,mobileno,address,pinno,dist,productdetails) 
	values( NULL,'$username','$password','$date','$mobileno','$address','$pinno','$dist','$productdetails')");
	echo "done";
	
}


?>
<html>
<body>
<table width="800" height="800">
<div style="background:#F6F">

<form method="POST" action="buyer1.php">
					<div style="background:#0CF">
							<div style=" border-top:#00FFFF">
								username:<input type="text" placeholder="name" name="username" /><div></div>
                                
                                password:<input type="password" placeholder="name" name="password" /><div></div>
								
                                date:<input type="text" placeholder="name" name="date" /><div></div>
                                
                                mobileno:<input type="text" placeholder="name" name="mobileno" /><div></div>
                                
                                address:<input type="text" placeholder="name" name="address" /><div></div>
                                
                                pinno:<input type="text" placeholder="name" name="pinno" /><div></div>
                                
                                dist:<input type="text" placeholder="name" name="dist" /><div></div>
                                
							 <div class="form-group">
                               <span><label>productdetails</label></span>
                                <div class="col-xs-8 selectContainer">
                                <select name="language" class="form-control">
                                <option value=""></option>
                                <option value="buyer">SEEDS</option>
                                <option value="seller">CROPS</option>
							    <option value="buyer">GRAINS</option>
                                <option value="seller">VEGETABLES</option>
								<option value="seller">FRUITS</option>
								<option value="seller">SPICES</option>
								<option value="seller">OTHERS</option>
								</select>
                      </div>
                  </div>
							</div>
								<input type="submit" value="Register" name="submit" /><div></div>
						
					</form>
					
					
</div>	
</table>				
					
</body>
</html>	