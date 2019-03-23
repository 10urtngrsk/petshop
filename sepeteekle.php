<?php
session_start();
@$user = $_SESSION['kullaniciadi'];
@$date = date("Y.m.d");
@$id=$_GET['id'];
@$urununfiyati=0;
include('baglan.php');
$ara=mysql_query("select * from kullanici where kullaniciadi='$user'");
				while($goster=mysql_fetch_array($ara))
				{
					$sepet=$goster['sepet'];
				}
				$sepet=$sepet+1;
		$ara=mysql_query("select * from urun where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$urunadi=$goster['urunadi'];
				$urunfiyat=$goster['urunfiyat'];
				$stokadet=$goster['stokadet'];
				$urungrup=$goster['urungrup'];
				$urunaciklama=$goster['urunaciklama'];
				$urunkategori=$goster['urunkategori'];
				$image=$goster['image'];
				$indirimdemi=$goster['indirimdemi'];
				$kazanc=$urunfiyat-$indirimfiyat;
				}
				if($indirimdemi=="1")
				{
				$urununfiyati=$indirimfiyat;
				}
				else
				{
				$urununfiyati=$urunfiyat;
				}
				$sql=mysql_query("select * from urun where id='id'");
				while($goster=mysql_fetch_array($sql))
				{
				$stokadet=$goster['stokadet'];
				}
				$stokadet=$stokadet-1;
	$sepetguncellee=mysql_query("UPDATE urun SET stokadet='$stokadet' WHERE id='$id'");



	$sepetekle=mysql_query("INSERT INTO siparis VALUES ('','$user','$date','$urunadi urun','$urununfiyati','1','$id','0')");
	$sepetguncelle=mysql_query("UPDATE kullanici SET sepet='$sepet' WHERE kullaniciadi='$user'");


				echo "<table border='1' width='350'>
	<tr>
		<td colspan='2'><font size='4'><strong>$urunadi</strong></font></td>
	</tr>
	<tr>
		<td colspan='2'><center><img src=get.php?id=$id width='100' height='100'></center></td>
	</tr>
	<tr>
		<td width='100'>Ürün Adı:</td>
		<td>$urunadi</td>
	</tr>
	<tr>
		<td width='10'>Ürün Kategorisi / Ürün Türü:</td>
		<td width='30'>$urunkategori / $urungrup</td>
	</tr>

	<tr>
		<td width='100'>Ürün Fiyatı:</td>
		<td width='300'>$urunfiyat TL / Adet </td>
	</tr>
	<tr>
		<td width='10'>Stok Adet:</td>
		<td width='30'>$stokadet Adet</td>
	</tr>
<tr>
		<td width='10'>Ürün Açıklaması:</td>
		<td width='300'>$urunaciklama</td>
	</tr>



		<tr>
		<td colspan='2'><font color='green' size='4'>Ürün Sepete Başarı ile Eklendi!</font></td>
	</tr>
</table>";




				?>
