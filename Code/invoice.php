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
		<h3 class="style"><a href="">Customer Invoice</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Customer Details</td><td>Product image</td><td>Product name</td><td>Product Description</td><td>Price</td><td>Qty</td><td>Total Price</td><td>Order date</td><td>Delete</td></tr>
          <?php
	   
		$t=mysql_query("select * from cart");
		while($w=mysql_fetch_array($t))
		{
$bid=$w['stid'];
$cid=$w['cid'];
$pid=$w['pid'];
$qty=$w['qty'];
$date=$w['date'];

$sid=$_SESSION['sid'];
		  if($sid!='')
		  {
		$u=mysql_query("select * from product where pid=$pid and sid='$sid'");
		}
		else
		{
		$u=mysql_query("select * from product where pid=$pid");
		}
		$_SESSION['m']=$m=mysql_num_rows($u);
		while($y=mysql_fetch_array($u))
		{
		$pimage=$y['pimage'];
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$price=$y['price'];

		?>

          <?php
		  $tot=($qty*$price);
		  $i=mysql_query("select * from buyer where bid=$bid");
		while($j=mysql_fetch_array($i))
		{
		$username=$j['busername'];
		$mobileno=$j['mobileno'];
	$address=$j['address'];
	$pinno=$j['pinno'];
	$dist=$j['dist'];
	$productdetails=$j['productdetails'];
		if($m!=0)
		{
echo "<tr><td>username:$username <br/>mobileno:$mobileno<br/>address:$address<br/>pinno:$pinno<br/>dist:$dist<br/>productdetails:$productdetails<br/></td><td><img src='upload/$pimage' height='50px' /></td><td>$pname</td><td>$pdescp</td><td>$price</td><td>$qty</td><td>$tot</td><td>$date</td><td><a href='invoice.php?cid=$cid'>Delete</a></td></tr>";
}
if($m==0)
{
echo "<tr><td colspan='8'>No invoice available $m</td></tr>";
}
		  ?>
          
                <?php
				}
				}
				}
				?>
                </table>
               
            
            <div class="clear"> </div>
            </div>
		
		<div class="clear"></div>

	</div>
	<div class="clear"></div>
</div>
</div>
 <?php
 if($_GET['cid']!='')
{
$cid=$_GET['cid'];
mysql_query("delete from cart where cid='$cid'");
echo "<script type='text/javascript'>alert('Invoice deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=invoice.php">';
}
include "footer.php";
?>
            