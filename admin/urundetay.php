<?php

 include('../baglan.php');
@$date = date('Y-m-d');
@$id=$_GET['id'];
$ara=mysql_query("select * from urun where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$urunadi=$goster['urunadi'];
				$urunfiyat=$goster['urunfiyat'];
				$stokadet=$goster['stokadet'];
				$indirimdemi=$goster['indirimdemi'];
				$indirimfiyat=$goster['indirimfiyat'];
				$urunkategori=$goster['urunkategori'];
				$urungrup=$goster['urungrup'];
				$urunaciklama=$goster['urunaciklama'];
				}
				if($indirimdemi==1)
				{
				$indirimdemi="Evet";
				}
				else
				{
				$indirimdemi="Hay�r";
				}

 echo "<script>
function don()
{
location.href = 'urun.php';
}
</script><center><form method='POST' action=''>
	<table border='1' width='37%'>
	<tr>
		<td width='220'>Ürün Adı:</td>
		<td><input type='text' name='T2' size='50' readonly='readonly' value=' $urunadi '></td>
	</tr>
	<tr>
		<td width='220'>Ürün Fiyatı</td>
		<td><input type='text' name='T9' size='50' readonly='readonly' value=' $urunfiyat TL '></td>
	</tr>
	<tr>
		<td width='220'>Stok Adet:</td>
		<td><input type='text' name='T3' size='50' readonly='readonly' value=' $stokadet '></td>
	</tr>
	<tr>
		<td width='220'>İndirimde mi:</td>
		<td><input type='text' name='T4' size='50' readonly='readonly' value=' $indirimdemi '></td>
	</tr>
	<tr>
		<td width='220'>İndirimli Fiyatı:</td>
		<td><input type='text' name='T5' size='50' readonly='readonly' value=' $indirimfiyat TL'></td>
	</tr>
	<tr>
		<td width='220'>Ürün Kategorisi:</td>
		<td><input type='text' name='T6' size='50' readonly='readonly' value=' $urunkategori '></td>
	</tr>
	<tr>
		<td width='220'>Ürün Grubu:</td>
		<td><input type='text' name='T7' size='50' readonly='readonly' value=' $urungrup '></td>
	</tr>
	<tr>
		<td width='220'>Ürün Kodu:</td>
		<td><input type='text' name='T8' size='50' readonly='readonly' value=' $id '></td>
	</tr>
	<tr>
		<td width='220'>Ürün Açıklaması:</td>
		<td><textarea rows='12' name='S1' cols='30' readonly='readonly'>$urunaciklama</textarea></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><input type='button' value='Kapat!' onClick='don()'></td>
	</tr>
</table>
</form></center>";
?>
