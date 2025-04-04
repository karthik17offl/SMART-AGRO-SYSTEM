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
	
	
		
}
if(isset($_POST['login']))
{

	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$login_qry="SELECT * FROM reg1 WHERE username='$username' and password='$password'";
	$result=mysql_query($login_qry)or die("cant access");
	$count=mysql_num_rows($result);
	if($count>0){
	header("location:home.php");
	}
	else{
		$msg="username or  password incorrect!";
		}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Agro Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- start header -->
<div class="h_bg">
<div class="wrap">
<div class="wrapper1">	
	<div class="menu">	
				<ul class="top-nav">
					 <li><a href="index.php">HOME</a></li>
					<li class="active"><a class="hsubs" href="buyer.php">BUYER</a></li>
                       <li class="active"><a class="hsubs" href="seller.php">SELLER</a></li> 
					<li><a href="contact.php">CONTACT</a></li>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="index.php"><h2>Agro Farm</h2></a>
		</div>
	<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">REGISTRATION</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="home.php">
                                <div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="about-info"></span>
						    </div>
                             <div>
						    	<span><label>DATE</label></span>
						    	<span><input name="date" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>MOBILENO</label></span>
						    	<span><input name="password" type="text" class="textbox"></span>
						    </div>
                             <div>
						    	<span><label>ADDRESS</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>PINNO</label></span>
						    	<span><input name="pinno" type="text" class="textbox"></span>
						    </div>
                            <div>
						     	<span><label>DIST</label></span>
						    	<span><input name="dist" type="text" class="textbox"></span>
						    </div>
                            <div>
						     	<span><label>PRODUCTDETAILS</label></span>
						    	<span><input name="productdetails" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Register" name="Register" ></span>
						  </div>
						
					</form>

				    </div>
                    
			
		</div>
		<div class="ser-grid-list img_style">
		
		<div class="gallery1">
			
		</div>
			<p class="para"> </p>
			
		</div>
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">LOG IN</a></h3>
		<div class="contact-form">
				  	
					       <form method="post" action="index.php">
					    	<div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="login" name="login" ></span>
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
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<ul class="f_nav">
			<li><a href="#">agroform.rtc@gmail.com</a></li>
		</ul>
		<div class="f_call">
			<h3>9942602515</h3>
		</div>
		<div class="clear"></div>
		<h2><a href="index.html">Agro farm</a></h2>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</div>
</body>
</html>