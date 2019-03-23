<?php
ob_start() ;
session_start();
@$kullaniciadi = $_SESSION['kullaniciadi'];
include('baglan.php');
$ara=mysql_query("select * from kullanici where kullaniciadi='$kullaniciadi'");
				while($goster=mysql_fetch_array($ara))
				{
				$kullaniciadi=$goster['kullaniciadi'];
				$id=$goster['id'];
				$id=$goster['id'];
				$fullisim=$goster['fullisim'];
				$sepet=$goster['sepet'];
				$sepetdetay=$goster['sepetdetay'];
				}


?>
<html>
<head>
	<title>Pet Shop - Balık Yemleri</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>
</head>

<body style="text-align: center">



			<div id="header">
	           		<ul class="navigation">
	           		<?php
	           		if($kullaniciadi)
	           		{
	           			echo "<li><a href='index.php'>Anasayfa</a></li>
						<li class='active'><a href='petmart.php'>Alisveris</a></li>
						<li><a href='about.php'>Hakkimizda</a></li>
						<li><a href='contact.php'>iletisim</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class='navigation' id='kullanici2'>Hoşgeldiniz Sayın</span>
						 <font color='white'>$fullisim</font>
						 <span class='navigation' id='kullanici2'>; Sepetinizde Şuan (";
						 if($sepet==0)
						 {
						 echo $sepet;
						 }
						 else{
						 echo "<a href='sepetdetay.php?kullanici=$kullaniciadi'>".$sepet."</a>";}
						 echo ") Ürün Bulunmaktadır!&nbsp;&nbsp;&nbsp;
						|<a href='cikis.php'>&nbsp;&nbsp; çıkış</a>
						</span>";
					}
	           		else
	           		{
					echo "<form method='POST' action='kontrol.php'>
						<li ><a href='index.php'>Anasayfa</a></li>
						<li  class='active'><a href='petmart.php'>Alisveris</a></li>
						<li><a href='about.php'>Hakkimizda</a></li>
						<li><a href='contact.php'>iletisim</a></li>

	                    <span id='kullanici'>Kullanici Adi:
                        <input type='text' name='T1' size='12'>
&nbsp; Sifre:
<input type='text' name='T2' size='12'>
                      &nbsp;
                      <input type='submit' value='Gönder' name='B1'>
                        </span>
                        <span class='navigation' id='kullanici2'><a href='reminder.php'>Sifremi Unuttum!</a> &nbsp;<a href='kayit.php'>Kayit Ol!</a> </span>
					</form>";}?>
					</ul>
			</div>

			<div id="body">
			  <h2 align="center">Pet Shop - Balık Yemleri</h2>
				<p align="center">
				<iframe name="I1" width="882" height="342" src="balikdetay.php" border="0" frameborder="0">Tarayıcınız satır içi çerçeveleri desteklemiyor veya şu anda satır içi çerçeveleri göstermek için yapılandırılmamış.</iframe></p>


</div>
<center><table border="0" width="80%">
<?php
$ara=mysql_query("select * from urun where urunkategori='balik' AND urungrup='mama'");
$say=0; //İlk olarak gelen verileri sayacak bir deger atıyoruz
while($goster=mysql_fetch_array($ara)) //$sorgu değişkenini while döngüsüne arraylayıp atıyoruz
{
				$id=$goster['id'];
				$urunadi=$goster['urunadi'];
				$urunfiyat=$goster['urunfiyat'];
				$stokadet=$goster['stokadet'];
$say++; //$say değişkenini her kayıt için 1 artırıyoruz

//Şimdi gelelim burada koşulumuzu belirtmeye
if ($say%5==1) //$say degerinin 5 e bölümünden kalan 1 ise
{
echo "<tr>
<td width='300'><a href='balikdetay.php?urun=".$id."' target='I1'><img src=get.php?id=$id width='100' height='100'><br>$urunadi</a>

 <br>Fiyatı: $urunfiyat TL<br>Stok Adedi: $stokadet <br>--------------------
</td>
";
//Bu koşulda tr tagını kapatmıyoruz
} else if ($say/5==1) //$say degerinin 5 e bölümünde sonuç 1 ise
{
echo "
<td width='300'>
<a href='balikdetay.php?urun=".$id."' target='I1'><img src=get.php?id=$id width='100' height='100'><br>$urunadi</a>
 <br>Fiyatı: $urunfiyat TL<br>Stok Adedi: $stokadet <br>--------------------
</td>
</tr>
";
//Bu seferde tr tagını açmadık direk kapadık
} else { //Yukarıdaki her 2 koşulda sağlanmıyorsa
echo "
<td width='300'><a href='balikdetay.php?urun=".$id."' target='I1'><img src=get.php?id=$id width='100' height='100'><br>$urunadi</a>
 <br>Fiyatı: $urunfiyat TL<br>Stok Adedi: $stokadet <br>--------------------
</td>
";
//Bu seferde hiç tr tagı kullanmadık
}
}?>
</table></center>
</body>
</html>
