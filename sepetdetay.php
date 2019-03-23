<?php
session_start();
@$kullaniciadi = $_SESSION['kullaniciadi'];
@$date = date("Y.m.d");
@$id=$_GET['id'];
@$urununfiyati=0;
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
	<title>Pet Shop <?php echo @$kullaniciadi; ?> Sepet detayı </title>
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
			  <h2 align="center">Pet Shop Sepetiniz</h2>
				<p align="center">&nbsp;</p>
				<p align="center">&nbsp;</p>

							<div align="center">
								<?php


										echo"<center><table border='1'><tr>
			<td>Siparis No</td>
			<td>Siparis Tarihi</td>
			<td>Siparisi</td>
			<td>Siparis Tutari</td>
			<td>Siparis Islemdemi</td>
			</tr>";
			if($sepet=="0")
			{
			echo "<td colspan='5'><h3>Sergilenecek Ürünününz Bulunmamaktadır!</h3></td>";

			}
			else
			{
$ara = mysql_query("SELECT * FROM `siparis` where siparisveren='$kullaniciadi' ORDER BY siparistarih DESC");
				while($goster=mysql_fetch_array($ara))
				{
				$id=$goster['id'];
				$siparisveren=$goster['siparisveren'];
				$siparistarih=$goster['siparistarih'];
				$siparis=$goster['siparis'];
				$siparistutari=$goster['siparis_tutari'];
				$islemde=$goster['islemde'];
				$odendi=$goster['odendi'];
				if($islemde=="1")
				{
				echo "<tr>
				<td>$id</td>
				<td>$siparistarih</td>
				<td>$siparis</td>
				<td>$siparistutari</td>
				<td>"; if($odendi=="1")
				{
				echo "Ödeme Yapılmış!";
				}
				else
				{
				echo "<a href='ode.php?id=$id&siparis=$siparisveren'>Ödemeyi Yap</a></td>";
				}
				}
				}
				echo"</tr></table></center>";}


?>
<?php
echo "<html>
<body>
<table>
<tr>
<td align='center'><b><font face='Tahoma'>
<a target='I1' href='sepetisil.php'><span style='text-decoration: none'>
<font color='#000000'>SEPETİ BOŞALT</font></span></a></font></b></td>
</tr>
</table>
</body>
</html>"
?>


						</ul>

		      </div>


</div>

			<div id="footer">
			  <div id="footnote"></div>
			</div>


</body>
</html>
