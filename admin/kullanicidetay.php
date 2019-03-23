<?php

 include('../baglan.php');
@$date = date('Y-m-d');
@$id=$_GET['id'];
$ara=mysql_query("select * from kullanici where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$kullaniciadi=$goster['kullaniciadi'];
				$sifre=$goster['sifre'];
				$email=$goster['email'];
				$uye_tarih=$goster['uye_tarih'];
				$uye_tipi=$goster['uye_tipi'];
				$sepet=$goster['sepet'];
				$fullisim=$goster['fullisim'];
				$telefon_no=$goster['telefon_no'];
				}

 echo "<script>
function don()
{
location.href = 'kullanici.php';
}
</script><center><form method='POST' action=''>
	<table border='1' width='37%'>
	<tr>
		<td width='220'>Kullanici Adi:</td>
		<td><input type='text' name='T2' size='50' readonly='readonly' value=' $kullaniciadi '></td>
	</tr>
	<tr>
		<td width='220'>Tam İsim:</td>
		<td><input type='text' name='T9' size='50' readonly='readonly' value=' $fullisim '></td>
	</tr>
	<tr>
		<td width='220'>Sifre:</td>
		<td><input type='text' name='T3' size='50' readonly='readonly' value=' $sifre '></td>
	</tr>
	<tr>
		<td width='220'>E-Mail:</td>
		<td><input type='text' name='T4' size='50' readonly='readonly' value=' $email '></td>
	</tr>
	<tr>
		<td width='220'>Üyelik Durumu:</td>
		<td><input type='text' name='T5' size='50' readonly='readonly' value=' $uye_tipi '></td>
	</tr>
	<tr>
		<td width='220'>Kayit Tarihi:</td>
		<td><input type='text' name='T6' size='50' readonly='readonly' value=' $uye_tarih '></td>
	</tr>
	<tr>
		<td width='220'>Kullanici ID:</td>
		<td><input type='text' name='T7' size='50' readonly='readonly' value=' $id '></td>
	</tr>
	<tr>
		<td width='220'>Sepetteki Ürün Sayisi:</td>
		<td><input type='text' name='T8' size='50' readonly='readonly' value=' $sepet '></td>
	</tr>
	<tr>
		<td width='220'>Telefon Numarası:</td>
		<td><input type='text' name='T10' size='50' readonly='readonly' value=' $telefon_no '></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><input type='button' value='Kapat!' onClick='don()'></td>
	</tr>
</table>
</form></center>";
?>
