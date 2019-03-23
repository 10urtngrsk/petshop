<?php
include('../baglan.php');
echo"<center>
<table border='1' width='50%'><tr><td colspan='3'><center><span class='style1'>Sistemdeki Kayitli Ürünler</span></center></td></tr>";
		  $sil="<img src='images/delete.png' width='15' height='15' hspace='2' alt='Ürünü Sil'/>";
		  $gor="<img src='images/look.gif' width='15' height='15' hspace='2' alt='Ürünü Incele'/>";
$ara=mysql_query("select * from urun where id");
				while($goster=mysql_fetch_array($ara))
				{
				$urunadi=$goster['urunadi'];
				$id=$goster['id'];


				echo "<tr>
				<td width='46'>
		  <img src='images/user.png' width='26' height='26' hspace='10'></td>
				<td width='300'><span class='style1'>".$urunadi."</span> </td><td><span class='style1'><a target='I1' href='http://localhost/petshop/admin/urunsil.php?id=".$id."' target='_blank'>".$sil."</a></span>&nbsp;
				<span class='style1'><a target='I1' href='http://localhost/petshop/admin/urundetay.php?id=".$id."' target='I2'>".$gor."</a></span> </td>
			</tr>";


				}
				echo "</table></center>";


?>
