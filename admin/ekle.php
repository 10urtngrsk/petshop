<?php
include('../baglan.php');
@$submit = $_POST['submit'];
@$urunadi= $_POST['urunadi'];
@$urunfiyat= $_POST['urunfiyat'];
@$stokadet= $_POST['stokadet'];

@$urunkategori= $_POST['urunkategori'];
@$urungrup= $_POST['urungrup'];
@$urunaciklama= $_POST['urunaciklama'];
@$file=$_FILES['image']['tmp_name'];


if($submit)
{
switch ($urunkategori)
{
case "Kuş":
$urunkategori="kus";
break;
case "Kedi":
$urunkategori="kedi";
break;
case "Köpek":
$urunkategori="kopek";
break;
case "Balık":
$urunkategori="balik";
break;
default:
echo "Hiçbir Kategori Secilmedi";
break;
}

switch ($urungrup)
{
case "Yem/Mama":
$urungrup="mama";
break;
case "Barinak/Kafes/Akvaryum":
$urungrup="ev";
break;
default:
echo "Hiçbir Grup Secilmedi";
break;
}


if(isset($_POST['indirimdemi']))
{
$indirimdemi="1";
}
else
{
$indirimdemi="0";
}
@$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
@$image_name=addslashes($_FILES['image']['name']);
@$image_size=getimagesize($_FILES['image']['tmp_name']);
if($image_size==FALSE)
{echo "Bu Bir Resim Değil!";
exit();
}
else
{
$queryreg=mysql_query("



		INSERT INTO urun VALUES ('','$urunadi','$urunfiyat','$stokadet','$indirimdemi','$indirimfiyat','$urunkategori','$urungrup','$urunaciklama','$image_name','$image')

		");
		die("<center><font size='6' color='green'>Yeni ürün Başarı ile Eklendi</font><br>Yeni Ürün Eklemek için <a href='ekle.php'>Buraya</a> Tıklayınız!</center>");

		}}
?>



<html>
<head>
<meta http-equiv='Content-Language' content='tr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>
<title>Pet Shop ürün Ekleme Bölgesi</title>
</head>

<body style="text-align: center">
<center>
<form method='POST' action='ekle.php' enctype='multipart/form-data'>
<table border='1' width='38%'>
	<tr>
		<td colspan='2'>
		<p align='center'><i><b><font size='5' color='#C0C0C0'>Pet Shop ürün
		Ekleme Bölgesi</font></b></i></td>
	</tr>
	<tr>
		<td width='11%'><i><b>ürün Adı:</b></i></td>
		<td width='26%'><font size='3'><input type='text' name='urunadi' size='55'></font></td>
	</tr>
	<tr>
		<td width='11%'><i><b>ürün Fiyatı:</b></i></td>
		<td width='26%'><font size='3'><input type='text' name='urunfiyat' size='55'></font></td>
	</tr>
	<tr>
		<td width='11%'><i><b>Stok Adedi:</b></i></td>
		<td width='26%'><font size='3'><input type='text' name='stokadet' size='55'></font></td>
	</tr>

	<tr>
		<td width='11%'><i><b>ürün Kategorisi:</b></i></td>
		<td width='26%'><font size='3'><select size='1' name='urunkategori'>
		<option>Kuş</option>
		<option>Balık</option>
		<option>Köpek</option>
		<option>Kedi</option>
		</select></font></td>
	</tr>
	<tr>
		<td width='11%'><i><b>Ürün Grubu:</b></i></td>
		<td width='26%'><font size='3'><select size='1' name='urungrup'>
		<option>Yem/Mama</option>
		<option>Barınak/Kafes/Akvaryum</option>
		</select></font></td>
	</tr>
	<tr>
		<td width='11%'><i><b>Ürün Açıklaması:</b></i></td>
		<td width='26%'>
			<font size='3'>
			<textarea rows='8' name='urunaciklama' cols='34'></textarea></font>
	</tr><tr>
		<td width='11%'><i><b>Resim:</b></i></td>
		<td width='26%'>
			<input type='file' name='image'></td>
	</tr>
	<tr>
		<td colspan='2'>
			<p align='center'><font size='3'><input type='submit' value='Gönder' name='submit'></font></p>

		</td>
	</tr>
</table>
</form>
</body>
</center>
</html>
