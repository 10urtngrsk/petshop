<?php
session_start();
@$user = $_SESSION['kullaniciadi'];
@$date = date("h:m:s");
@$id=$_GET['urun'];
include('baglan.php');
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
				$indirimfiyat=$goster['indirimfiyat'];
				$image=$goster['image'];
				$kazanc=$urunfiyat-$indirimfiyat;
				}
				?>
<html>

<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Yeni Sayfa 1</title>
</head>

<body>
<?php
if($id)
{
echo "
<table border='5' width='450'>
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
		<td width='100'>Ürün Kategorisi / Ürün Türü:</td>
		<td width='300'>$urunkategori / $urungrup</td>
	</tr>

	<tr>
		<td width='100'>Ürün Fiyatı:</td>
		<td width='300'>$urunfiyat TL / Adet </td>
	</tr>
	<tr>
		<td width='100'>Stok Adet:</td>
		<td width='300'>$stokadet Adet</td>
	</tr>

	<tr>
		<td width='100'>Ürün Açıklaması:</td>
		<td width='300'>$urunaciklama</td>
	</tr>
		<tr>
		<td colspan='2'>";
		if($stokadet<1)
		{
	echo"	<font color='Red'>Geçici Olarak Ürün Temin Edilememektedir!</font>";

		}
	else
		{echo"
		<a href='sepeteekle.php?id=$id&kim=$user'>Sepete Ekle</a>";
		}

		echo "</td>
	</tr>
</table>";
}

else
{

echo "<h1> Ürün Detayınızı Buradan Görebilirsiniz</h1>";

}

?>
</body>

</html>
