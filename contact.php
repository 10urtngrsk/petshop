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
	<title>Pet Shop</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
	<![endif]-->
</head>

<body style="text-align: center">


			<div id="header">
	           		<ul class="navigation">
	           		<?php
	           		if($kullaniciadi)
	           		{
	           			echo "<li><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
						<li><a href='about.php'>Hakkimizda</a></li>
						<li  class='active'><a href='contact.php'>iletisim</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
						<li><a href='petmart.php'>Alisveris</a></li>
						<li><a href='about.php'>Hakkimizda</a></li>
						<li  class='active'><a href='contact.php'>iletisim</a></li>

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
			  <h2 align="center">Pet Shop İletisim Bilgilerimiz</h2>
				<p align="center">&nbsp;</p>
				<p align="center">&nbsp;</p>

							<div align="center">
								<table border="1" width="100%" height="203">
									<tr>
										<td rowspan="4"	 background='images/images.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td>Telefon Numaramiz:</td>
										<td>0(212)123-45-67</td>
										<td rowspan="4"	 background='images/images.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td>Adresimiz:</td>
										<td>Doğuş Üniversitesi - Acıbadem Kampüsü</td>
									</tr>
									<tr>
										<td>Mesaj Gonderin:</td>
										<td><?php echo "<script language='JavaScript'> function mesaj()
{
window.open('mesajat.php?kullaniciadi=".$kullaniciadi."', 'Yeni_Sayfa', 'toolbar=no, status=no, menubar=no,scrollbars=no,resizable=no,width=650, height=350') }
</script> <a onclick='mesaj()'>Mesaj Gondermek icin Tiklayin</a>";
 ?></td>
									</tr><tr>
										<td>Musteri Hizmetleri:</td>
										<td>Musteri Hizmetleri servisimiz, haftanin 7 gunu, 24 saat gonderdiginiz sorulara en hizli
sekilde yanit verir. Telefonla hizmet servisimiz her gun
08.00 - 24.00 saatleri arasindadir.

Sorulariniz varsa tiklayin.</td>
									</tr>

								</table>



						</ul>

		      </div>


</div>

			<div id="footer">
			  <div id="footnote"></div>
			</div>


</body>
</html>
