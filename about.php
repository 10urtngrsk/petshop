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
						<li><a href='petmart.php'>Alisveris</a></li>
						<li  class='active'><a href='about.php'>Hakkimizda</a></li>
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
						<li><a href='petmart.php'>Alisveris</a></li>
						<li  class='active'><a href='about.php'>Hakkimizda</a></li>
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
			  <h2 align="center">Pet Shop Hakkımızda</h2>
				<p align="center">&nbsp;</p>
				<table border="0" width="100%" >
					<tr>
						<td background='images/images.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td align="center"><?php


						include('baglan.php');

						$ara=mysql_query("select * from site where id='1'");
				while($goster=mysql_fetch_array($ara))
				{
				$hakkimizda=$goster['hakkimizda'];
				}
					echo $hakkimizda;

						?></td>
						<td background='images/images.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					</tr>
				</table>


</div>

			<div id="footer">
			  <div id="footnote"></div>
			</div>


</body>
</html>
