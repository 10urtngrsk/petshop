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
	<title>
		<?php
  include('baglan.php');

	$ara=mysql_query("select * from site where id='1'");
while($goster=mysql_fetch_array($ara))
{
$baslik=$goster['baslik'];
}
echo $baslik;
?>
</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>


			<div id="header">

	           		<ul class="navigation">
	           		<?php
	           		if($kullaniciadi)
	           		{
	           			echo "<li  class='active'><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
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
						<li class='active' ><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
						<li><a href='about.php'>Hakkimizda</a></li>
						<li><a href='contact.php'>iletisim</a></li>

	                    <span id='kullanici'>Kullanici Adi:
                        <input type='text' name='T1' size='12'>
&nbsp; Sifre:
<input type='password' name='T2' size='12'>
                      &nbsp;
                      <input type='submit' value='Gönder' name='B1'>
                        </span>
                        <span class='navigation' id='kullanici2'><a href='reminder.php'>Sifremi Unuttum!</a> &nbsp;<a href='kayit.php'>Kayit Ol!</a> </span>
					</form>";}?>
					</ul>
			</div>

			<div id="body">

					<div class="banner">&nbsp;</div>


</div>



			<div id="footer"><div id="footnote"></div>
</div>


</body>
</html>
