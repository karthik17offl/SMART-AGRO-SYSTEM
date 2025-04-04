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
		<h3 class="style"><a href="">Add  Product</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="add_product" enctype="multipart/form-data">
                                <div>
						    	<span><label>Category</label></span>
						    	<span><input name="cat" type="text" class="textbox"></span>
						    </div>
						     <div>
						    	<span><label>Product name</label></span>
						    	<span><input name="pname" type="text" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>Product Description</label></span>
						    	<span><input name="pdescp" type="text" class="textbox"></span>
						    </div>
                            
                            
                            <div>
						    	<span><label>Product name</label></span>
						    	<span><input name="pname" type="text" class="textbox"></span>
						    </div>
                            
                            
						    <div>
						     	<span><label>Product image</label></span>
						    	<span><input name="pimg" type="file" class="textbox"></span>
						    </div>
                             <div>
						    	<span><label>Price</label></span>
						    	<span><input name="price" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>Quantity</label></span>
						    	<span><input name="qty" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Add Product" name="submit" ></span>
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
if(isset($_POST['submit']))
{
$pimage=$_FILES['pimg']['name'];
$pname=mysql_real_escape_string($_POST['pname']);
$cat=$_POST['cat'];
$pdescp=mysql_real_escape_string($_POST['pdescp']);
$price=$_POST['price'];
$qty=$_POST['qty'];
$sid=$_SESSION['sid'];
mysql_query("insert into product(pname,pdescp,cat,price,qty,pimage,sid)values('$pname','$pdescp','$cat','$price','$qty','$pimage','$sid')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Product added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=add_products.php">';
}
include "footer.php";
?>
            