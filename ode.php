<?php
session_start();
@$kullaniciadi = $_SESSION['kullaniciadi'];
@$date = date("Y.m.d");
@$id=$_GET['id'];
@$submit=$_POST['submit'];
@$fatura=$_POST['fatura'];
@$telefon=$_POST['telefon'];
@$il=$_POST['il'];
@$ilce=$_POST['ilce'];
@$adres=$_POST['adres'];
@$siparis_tutari=$_POST['siparistutari'];
@$siparis_id=$_POST['siparisid'];
@$siparis_tarihi=$_POST['siparistarihi'];
@$siparis=$_POST['siparis'];
@$urunid=$_POST['urunid'];
include('baglan.php');
			if($submit)
			{
				$sepetguncelle=mysql_query("UPDATE siparis SET odendi='1' WHERE id='$siparis_id'");
$sepetekle=mysql_query("INSERT INTO odeme VALUES ('','$fatura','$adres','$telefon','$il','ilce','$siparis_tarihi','$siparis','$siparis_tutari','$siparis_id')");
			die("Ürün ödemesi Başarı ile Gerçekleştirildi");


			}
				$ara = mysql_query("SELECT * FROM siparis where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$urunid=$goster['id'];
				$odendi=$goster['odendi'];
				$siparistarih=$goster['siparistarih'];
				$siparisveren=$goster['siparisveren'];
				$siparis=$goster['siparis'];
				$siparis_tutari=$goster['siparis_tutari'];
				$islemde=$goster['islemde'];
				}
				$ara=mysql_query("select * from kullanici where kullaniciadi='$kullaniciadi'");
				while($goster=mysql_fetch_array($ara))
				{
				$kullaniciadi=$goster['kullaniciadi'];
				$kid=$goster['id'];
				$fullisim=$goster['fullisim'];
				$sepet=$goster['sepet'];
				$sepetdetay=$goster['sepetdetay'];
				}



?>
<html>
<head>
	<title>About-Pet Shop </title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
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
						 <span class='navigation' id='kullanici2'>; Sepetinizde şuan (";
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
			  <h2 align="center">Pet Shop Ödeme Sayfası</h2>
				<p align="center">&nbsp;</p>


</div>

			<div id="footer">
			  <div id="footnote">	<center>
			  	<form method="POST" action="ode.php">
				<table border="1" width="60%">
					<tr>
						<td>Fatura Adı</td>
						<td>
							<p><input type="text" name="fatura" size="64"></p>

						</td>
					</tr>
					<tr>
						<td>Adres</td>
						<td><input type="text" name="adres" size="64"></td>
					</tr>
					<tr>
						<td>Telefon</td>
						<td><input type="text" name="telefon" maxlength='11' size="64"></td>
					</tr>

					<tr>
						<td>Siparis Tutarı</td>
						<td><input type="text" name="siparistutari" readonly='readonly' value='<?php echo $siparis_tutari; ?>' size="64"></td>
					</tr>
					<tr>
						<td>Sipariş</td>
						<td><input type="text" name="siparis" readonly='readonly' value='<?php echo $siparis; ?>' size="64"></td>
					</tr>
					<tr>
						<td>Siparis Tarihi</td>
						<td><input type="text" name="siparistarih" readonly='readonly' value='<?php echo $siparistarih; ?>' size="64"></td>
					</tr>
					<tr>
						<td>Siparis Numarası</td>
						<td><input type="text" name="siparisid" readonly='readonly' value='<?php echo $urunid; ?>' size="64"></td>
					</tr>

					<tr>
						<td colspan="2">
						<p align="center">
						<input type="submit" value="Gönder" name="submit"></td>
					</tr>
				</table>
				</form></center>
				</div>
			</div>


</body>
</html>
