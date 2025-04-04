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

		<h3 class="style"><a href="">Buyer</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Buyer</td><td>Mobile No</td><td>Address</td><td>Pin</td><td>District</td><td>Product</td><td>Action</td</tr>
          <?php
		$t=mysql_query("select * from buyer");
		while($j=mysql_fetch_array($t))
		{
		$bid=$j['bid'];
		$username=$j['busername'];
		$mobileno=$j['mobileno'];
	$address=$j['address'];
	$pinno=$j['pinno'];
	$dist=$j['dist'];
	$productdetails=$j['productdetails'];
		
echo "<tr><td>$username</td><td>$mobileno</td><td>$address</td><td>$pinno</td><td>$dist</td><td>$productdetails</td><td><a href='admindashboard.php?bid=$bid'>Delete</a></td></tr>";
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
if($_GET['bid']!='')
{
$bid=$_GET['bid'];
mysql_query("delete from buyer where bid='$bid'");
echo "<script type='text/javascript'>alert('Buyer account deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=admindashboard.php">';
}
include "footer.php";
?>
