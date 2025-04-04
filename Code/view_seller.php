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

		<h3 class="style"><a href="">Seller</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Seller</td><td>Mobile No</td><td>Address</td><td>Pin</td><td>District</td><td>Product</td><td>Action</td</tr>
          <?php
		$t=mysql_query("select * from seller");
		while($j=mysql_fetch_array($t))
		{
		$sid=$j['sid'];
		$username=$j['susername'];
		$mobileno=$j['mobileno'];
	$address=$j['address'];
	$pinno=$j['pinno'];
	$dist=$j['dist'];
	$productdetails=$j['productdetails'];
		
echo "<tr><td>$username</td><td>$mobileno</td><td>$address</td><td>$pinno</td><td>$dist</td><td>$productdetails</td><td><a href='view_seller.php?sid=$sid'>Delete</a></td></tr>";
				}
				?>
                </table>
               
            
            <div class="clear"> </div>
            </div>

	</div>
	<div class="clear"></div>
</div>
</div>
<?php
if($_GET['sid']!='')
{
$sid=$_GET['sid'];
mysql_query("delete from seller where sid='$sid'");
echo "<script type='text/javascript'>alert('Seller account deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_seller.php">';
}
include "footer.php";
?>
