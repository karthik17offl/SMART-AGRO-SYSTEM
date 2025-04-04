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
		<h3 class="style"><a href="">View Cart</a></h3>
			<div class="specials-grids">
            
             <form action="" method="post">
         <?php
		 $pid=$_GET['pid'];
		$t=mysql_query("select * from product where pid=$pid");
		while($w=mysql_fetch_array($t))
		{
		$pimage=$w['pimage'];
$pname=$w['pname'];
$pdescp=$w['pdescp'];
$price=$w['price'];
$qty=$w['qty'];
		?>
        <table align="left" cellpadding="10" cellspacing="0" border="1" class="cart_table">
          <tr><td>Product image</td><td>Product name</td><td>Product Description</td><td>Price</td><td>Qty</td><td>Checkout</td></tr>
          <?php
echo "<tr><td><img src='upload/$pimage' height='50px' /></td><td>$pname</td><td>$pdescp</td><td>$price</td><td><input type='text' name='qty' class='cart_box' ></td><td><input type='submit' name='checkout' value='Checkout' class='add_cart'></td></tr>";
		  ?>
          </table>
                </form>
                <?php
				}
				?>
            
            <div class="clear"> </div>
            </div>
		
		<div class="clear"></div>

	</div>
	<div class="clear"></div>
</div>
</div>
 <?php
if(isset($_POST['checkout']))
{
$stid=$_SESSION['bid'];
$pid=$_GET['pid'];
$qty=$_POST['qty'];
$date=date("Y-m-d");
mysql_query("insert into cart(stid,pid,qty,date)values('$stid','$pid','$qty','$date')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Product ordered Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=order.php">';
}
include "footer.php";
?>
            