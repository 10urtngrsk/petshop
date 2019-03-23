<?php
@$kullaniciadi = $_POST['kadi'];
@$email=$_POST['email'];
@$submit=$_POST['submit'];
if($submit)
 {
include('baglan.php');
				$ara=mysql_query("select * from kullanici where kullaniciadi='$kullaniciadi'");
				while($goster=mysql_fetch_array($ara))
				{
				@$akullaniciadi=$goster['kullaniciadi'];
				@$aemail=$goster['email'];
				@$sifre=$goster['sifre'];
				@$fullisim=$goster['fullisim'];
				@$ssepet=$goster['sepet'];
				}
				if(@$kullaniciadi&&@$email)
				{
				if(@$akullaniciadi==$kullaniciadi&&@$aemail==$email)
				{
				echo"Şifreniz: $sifre";
				}
				else
				{
				echo "Bir Yanlışlık var bu işte lütfen kontrol ediniz!";
				}
				}
				else
				{
				echo " Boşlukları Doldur!";
				}

}
?>
<html>
<head>
	<title>About-Pet Shop Template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body style="text-align: center">



			<div id="header">
	           		<ul class="navigation">
	           		<?php
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
					</form>";?>
					</ul>
			</div>

			<div id="body">
			  <h2 align="center">Pet Shop Parola Hatırlatıcı</h2>
				<p align="center">&nbsp;</p>
				<table border="0" width="100%">
					<tr>
						<td align="center" background='images/images.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td align="center">
						<form method="POST" action="reminder.php">
							<p>&nbsp;</p>
							<table border="1" width="100%" align="center">
								<tr>
									<td>Kullanıcı Adınız:</td>
									<td>
									<input type="text" name="kadi" size="20"></td>
								</tr>
								<tr>
									<td>E-Mail Adresiniz:</td>
									<td>
									<input type="text" name="email" size="20"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
									<input type="submit" value="Gönder" name="submit"></td>
								</tr>
							</table>
						</form>
						<?php




						?></td>
						<td align="center" background='images/images.jpg' width="598">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					</tr>
				</table>


</div>

			<div id="footer">
			  <div id="footnote"></div>
			</div>


</body>
</html>
