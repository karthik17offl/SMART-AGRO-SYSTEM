<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="index.php"><h2>Agro Farm</h2></a>
		</div>

<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">SELLER REGISTRATION</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="buyer_register">
                                <div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						     <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>DATE</label></span>
						    	<span><input name="date" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE NO</label></span>
						    	<span><input name="mobileno" type="text" class="textbox"></span>
						    </div>
                             <div>
						    	<span><label>ADDRESS</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>PIN CODE</label></span>
						    	<span><input name="pinno" type="text" class="textbox"></span>
						    </div>
                            <div>
						     	<span><label>DIST</label></span>
						    	<span><input name="dist" type="text" class="textbox"></span>
						    </div>
                            <div class="form-group">
                                <span><label>PRODUCT DETAILS</label></span>
                                <div class="col-xs-8 selectContainer">
                                <select name="productdetails" class="form-control">
                                <option value="">Select the Product Details</option>
                                <option value="seeds">SEEDS</option>
                                <option value="crops">CROPS</option>
							    <option value="grains">GRAINS</option>
                                <option value="vegetables">VEGETABLES</option>
								<option value="fruits">FRUITS</option>
								<option value="spices">SPICES</option>
								<option value="others">OTHERS</option>
								</select>
                      </div>
                  </div>
						    
						   <div>
						   		<span><input type="submit" value="Register" name="register" ></span>
						  </div>
						
					</form>

				    </div>
			
		</div>
		
		
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
<?php
if(isset($_POST['register']))
{

	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$date=mysql_real_escape_string($_POST['date']);
	$mobileno=mysql_real_escape_string($_POST['mobileno']);
	$address=mysql_real_escape_string($_POST['address']);
	$pinno=mysql_real_escape_string($_POST['pinno']);
	$dist=mysql_real_escape_string($_POST['dist']);
	$productdetails=mysql_real_escape_string($_POST['productdetails']);
	
	mysql_query("insert into seller(susername,spassword,date,mobileno,address,pinno,dist,productdetails) 
	values('$username','$password','$date','$mobileno','$address','$pinno','$dist','$productdetails')");

echo "<script type='text/javascript'>alert('Seller account registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=seller_login.php">';
}

include "footer.php";
?>
