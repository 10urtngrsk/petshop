<?php
session_start();
@$user = $_SESSION['kullaniciadi'];
@$date = date("Y.m.d");
@$id=$_GET['id'];
@$urununfiyati=0;
include('../baglan.php');
			echo"<center><table border='1'><tr>
			<td>Siparis No</td>
			<td>Siparis Veren</td>
			<td>Siparis Tarihi</td>
			<td>Siparisi</td>
			<td>Siparis Tutarı</td>
			<td>Siparis İslemdemi</td>
			</tr>";
$ara = mysql_query("SELECT * FROM `siparis` ORDER BY `siparis`.`siparistarih` ASC");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$siparisveren=$goster['siparisveren'];
				$siparistarih=$goster['siparistarih'];
				$siparis=$goster['siparis'];
				$siparistutari=$goster['siparis_tutari'];
				$islemde=$goster['islemde'];
				$odendi=$goster['odendi'];
				if($islemde=="1")
				{
				echo "<tr>
				<td>$id</td>
				<td>$siparisveren</td>
				<td>$siparistarih</td>
				<td>$siparis</td>
				<td>$siparistutari</td>
				<td>"; if($odendi=='1')
				{ echo "<a href='islemeal.php?id=$id&siparis=$siparisveren'>Ürünü Teslim Et</a></td>";}
				else
				{
				echo "Ödeme Daha Gerçekleştirilmedi";
				}
				}


				}echo"</tr></table></center>";



?>
