<?php
include('../baglan.php');
@$submit=$_POST['submit'];
@$kullanici=$_POST['kullanici'];
@$sifre=$_POST['sifre'];
@$kullaniciadi = $_SESSION['kullaniciadi'];
if($submit)
{

if($kullanici&&$sifre)
{
$ara=mysql_query("select * from kullanici where kullaniciadi='$kullanici'");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$kullaniciadi=$goster['kullaniciadi'];
				$sifre=$goster['sifre'];
				$uye_tipi=$goster['uye_tipi'];
				}
				if($uye_tipi!='yonetici')
				{
				die("<html>

<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Pet Shop Yönetici Paneli Girişi</title>
</head>

<body><br><br><br><br><br><br><br><br>
<center>
<form method='POST' action='index.php'>
<table border='0' width='39%'>
	<tr>
		<td colspan='2' align='center'><font face='Tahoma' size='6' color='red'>Bu Alana Giriş Yetkiniz Bulunmamaktadır!</font></td>
	</tr>
<tr>
		<td colspan='2' align='center'><font face='Tahoma' size='6'>Pet Shop Yönetim Paneli Girişi</font></td>
	</tr>
	<tr>
		<td width='48%' align='center'><font face='Tahoma'>Kullanıcı Adı</font></td>
		<td width='50%'><font face='Tahoma'><input type='text' name='kullanici' size='20'></font></td>
	</tr>
	<tr>
		<td width='48%' align='center'>
		<p align='center'><font face='Tahoma'>Şifre</font></td>
		<td width='50%'><font face='Tahoma'><input type='password' name='sifre' size='20'></font></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><font face='Tahoma'><input type='submit' value='Gönder' name='B1'></font></p>
		<font face='Tahoma'>
		</form>
		</font>
		<p>&nbsp;</td>
	</tr>
</table>
</center>
</body>

</html>");
}//admin mi blo�u
if($kullaniciadi==$sifre)
{
session_start();
@$kullaniciadi = $_SESSION['kullaniciadi'];
echo"<script>

location.href = 'index.php';

</script>";


}
}//Kullan�c� ad� dolumu Blo�u
else
{

die("<html>

<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Pet Shop Yönetici Paneli Girişi</title>
</head>

<body><br><br><br><br><br><br><br><br>
<center>
<form method='POST' action='index.php'>
<table border='0' width='39%'>
	<tr>
		<td colspan='2' align='center'><font face='Tahoma' size='6' color='red'>Lütfen Boşlukları Doldurunuz</font></td>
	</tr>
<tr>
		<td colspan='2' align='center'><font face='Tahoma' size='6'>Pet Shop Yönetim Paneli Girişi</font></td>
	</tr>
	<tr>
		<td width='48%' align='center'><font face='Tahoma'>Kullanıcı Adı</font></td>
		<td width='50%'><font face='Tahoma'><input type='text' name='kullanici' size='20'></font></td>
	</tr>
	<tr>
		<td width='48%' align='center'>
		<p align='center'><font face='Tahoma'>Şifre</font></td>
		<td width='50%'><font face='Tahoma'><input type='password' name='sifre' size='20'></font></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><font face='Tahoma'><input type='submit' value='Gönder' name='B1'></font></p>
		<font face='Tahoma'>
		</form>
		</font>
		<p>&nbsp;</td>
	</tr>
</table>
</center>
</body>

</html>");
}

}//G�ndere bas�ld�m� blo�u


if($kullaniciadi)
{
echo"
<html>

<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Pet Shop Admin Yönetim Paneli</title>
</head>

<body bgcolor='#FFFF66'>
<p align='right'><a href='../cikis.php'><span style='text-decoration: none'>
		<font color='#000000'>Çıkış</font></span></a></p>
<center>
<table border='1' width='85%' height='372'>
	<tr>
		<td colspan='6' height='173'>
		<p align='center'><font size='7' face='Tahoma'>Pet Shop Admin Yönetim
		Paneli</font><p align='center'><u><i><font face='Tahoma' size='2'>Lütfen
		Aşağıdan Yapmak İstediğiniz işlemi Seçiniz!</font></i></u></td>
	</tr>
	<tr>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='kullanici.php'>
		<img border='0' src='images/kullaniciyonetimi.png' width='125' height='125'></a></font></b></td>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='mesaj.php'>
		<img border='0' src='images/mesaj.png' width='125' height='125'></font></b></td>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='ekle.php'>
		<img border='0' src='images/Untitled-1.png' width='142' height='118'></font></b></td>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='urun.php'>
		<img border='0' src='images/logo2.png' width='164' height='39'></font></b></td>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='sepetler.php'>
		<img border='0' src='images/sepet.png' width='190' height='50'></font></b></td>
		<td align='center'>
		<p align='center'><b><font face='Tahoma'>
		<a target='I1' href='site.php'>
		<img border='0' src='images/12b914aa68ea7a38a0a09e129579e7ef.png' width='125' height='108'></font></b></td>

	</tr>
	<tr>
		<td align='center'><b><font face='Tahoma'>
		<a target='I1' href='kullanici.php'><span style='text-decoration: none'>
		<font color='#000000'>Kullanıcı Yönetimi</font></span></a></font></b></td>
		<td align='center'><b><font face='Tahoma'><a target='I1' href='mesaj.php'><span style='text-decoration: none'>
		<font color='#000000'>Mesaj Yönetimi</span></font></b></td>
		<td align='center'><b><font face='Tahoma'><a target='I1' href='ekle.php'><span style='text-decoration: none'>
		<font color='#000000'>Yeni Ürün Ekle</span></font></b></td>
		<td align='center'><b><font face='Tahoma'><a target='I1' href='urun.php'><span style='text-decoration: none'>
		<font color='#000000'>Ürün Yönetimi</span></font></b></td>
		<td align='center'><b><font face='Tahoma'><a target='I1' href='sepetler.php'><span style='text-decoration: none'>
		<font color='#000000'>Sipariş Yönetimi</span></font></b></td>
		<td align='center'><b><font face='Tahoma'><a target='I1' href='site.php'><span style='text-decoration: none'>
		<font color='#000000'>Site Yönetimi</span></font></b></td>

	</tr>
</table>

<p>
<iframe name='I1' width='1119' height='885' src='secimdetayi.php' border='0' frameborder='0'>
Tarayıcınız satır içi çerçeveleri desteklemiyor veya şu anda satır içi çerçeveleri göstermek için yapılandırılmamış.
</iframe></p>
</center>
</body>

</html>";}
else
{
echo"<html>

<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Pet Shop Yönetici Paneli Girişi</title>
</head>

<body><br><br><br><br><br><br><br><br><br><br>
<center>
<form method='POST' action='index.php'>
<table border='0' width='39%'>
	<tr>
		<td colspan='2' align='center'><font face='Tahoma' size='6'>Pet Shop Yönetim Paneli Girişi</font></td>
	</tr>
	<tr>
		<td width='48%' align='center'><font face='Tahoma'>Kullanıcı Adı</font></td>
		<td width='50%'><font face='Tahoma'><input type='text' name='kullanici' size='20'></font></td>
	</tr>
	<tr>
		<td width='48%' align='center'>
		<p align='center'><font face='Tahoma'>Şifre</font></td>
		<td width='50%'><font face='Tahoma'><input type='password' name='sifre' size='20'></font></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><font face='Tahoma'><input type='submit' value='Gönder' name='submit'></font></p>
		<font face='Tahoma'>
		</form>
		</font>
		<p>&nbsp;</td>
	</tr>
</table>
</center>
</body>

</html>
";
}

?>
