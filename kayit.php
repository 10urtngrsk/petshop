<?php
include('baglan.php');
@$submit = $_POST['submit'];

@$username = strip_tags($_POST['kadi']);
@$password = strip_tags($_POST['pass']);
@$repeatpassword = strip_tags($_POST['repass']);
@$tamad = strip_tags($_POST['tamad']);
@$telno = strip_tags($_POST['telno']);
@$email = strip_tags($_POST['email']);
@$date = date("Y-m-d");




if ($submit)
{

	//kutulardaki varligi kontrol ediyoruz
	if($username&&$password&&$repeatpassword&&$email&&$tamad&&$telno)
	{
		$veritabanisorgu=mysql_query("SELECT * FROM kullanici WHERE kullaniciadi='$username'");
		while($row=mysql_fetch_assoc($veritabanisorgu))
	{
		$dbusername=$row['kullaniciadi'];
		if($username==$dbusername)
		{
		echo"<html>
<head>
	<title>Kayit</title>
	<link href='css/style.css' rel='stylesheet' type='text/css' />
	</head>

<body>


			<div id='header'>
	           		<ul class='navigation'>
					<form method='POST' action='gir.php'>
						<li class='active'><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
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
					</form>
					</ul>
			</div>

			<div id='body'>


							<form method='POST' action='kayit.php'>
							<center><table border='1'>
								<tr><td colspan='2'><div align='center' id='basarisiz'>Böyle Bir Kullanici Su Anda Sistemimizde Mevcut Lütfen Baska Bir Kullanici Adi Seçin!</div></td></tr>
								<tr id='kullanici'>
								<td>Kullanici Adi:</td>
								<td><input name='kadi' type='text' size='20' maxlength='12'></td></tr>
								<tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='pass' type='password' size='20' maxlength='12'></td>
							  </tr>
							  <tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='repass' type='password' size='20' maxlength='12'></td>
							  </tr>
								<tr id='kullanici'>
								<td>Tam Isim</td>
								<td><input type='text' name='tamad' size='20'></td></tr>
								<tr id='kullanici'>
								<td>Telefon Numarasi:</td>
								<td><input type='text' name='telno' size='20' maxlength='11'></td></tr>
								<tr id='kullanici'>
								<td>email:</td>
								<td><input type='text' name='email' size='20'></td></tr>
								<tr><td colspan='2'>
								  <div align='center'>
								    <input type='submit' value='Kaydol!' name='submit'>
							      </div></td></tr>
							</table>
							</center></form>
							<p>
		      </div>


</div>


</body>
</html>";
		exit();
		}
	}
	$veritabanisorgu=mysql_query("SELECT * FROM kullanici WHERE email='$email'");
		while($row=mysql_fetch_assoc($veritabanisorgu))
	{
		$dbemail=$row['email'];
		if($email==$dbemail)
		{
		echo"<html>
<head>
	<title>Kayit</title>
	<link href='css/style.css' rel='stylesheet' type='text/css' />
	</head>

<body>


			<div id='header'>
	           		<ul class='navigation'>
					<form method='POST' action='gir.php'>
						<li class='active'><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
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
					</form>
					</ul>
			</div>

			<div id='body'>


							<form method='POST' action='kayit.php'>
							<center><table border='1'>
								<tr><td colspan='2'><div align='center' id='basarisiz'>Böyle Bir email Adresi Su Anda Sistemimizde Mevcut Lütfen Baska Bir email Seçin!</div></td></tr>
								<tr id='kullanici'>
								<td>Kullanici Adi:</td>
								<td><input name='kadi' type='text' size='20' maxlength='12'></td></tr>
								<tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='pass' type='password' size='20' maxlength='12'></td>
							  </tr>
							  <tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='repass' type='password' size='20' maxlength='12'></td>
							  </tr>
								<tr id='kullanici'>
								<td>Tam Isim</td>
								<td><input type='text' name='tamad' size='20'></td></tr>
								<tr id='kullanici'>
								<td>Telefon Numarasi:</td>
								<td><input type='text' name='telno' size='20' maxlength='11'></td></tr>
								<tr id='kullanici'>
								<td>email:</td>
								<td><input type='text' name='email' size='20'></td></tr>
								<tr><td colspan='2'>
								  <div align='center'>
								    <input type='submit' value='Kaydol!' name='submit'>
							      </div></td></tr>
							</table>
							</center></form>
							<p>
		      </div>


</div>


</body>
</html>";
		exit();
		}
	}
		//kontroller
		if($password==$repeatpassword)
		{
		$queryreg=mysql_query("



		INSERT INTO kullanici VALUES ('','$username','$password','$tamad','$telno','$email','$date','','','kayitli')

		");
		$lastid=mysql_insert_id();

		die ("<html>
<head>
	<title>Kayit</title>
	<link href='css/style.css' rel='stylesheet' type='text/css' />
	</head>

<body>


			<div id='header'>
	           		<ul class='navigation'>
					<form method='POST' action='kontrol.php'>
						<li class='active'><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
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
					</form>
					</ul>
			</div>

			<div id='body'>



							<div align='center' id='basarili'>Kayit Basari Ile Tamamlandi! Simdi Giris yapabilirsiniz!</div>
		      </div>


</div>


</body>
</html>");



		}

	}
	else
	echo "<html>
<head>
	<title>Kayit</title>
	<link href='css/style.css' rel='stylesheet' type='text/css' />
	</head>

<body>
							<div align='center' id='basarisiz'>Kayit Basarisiz Oldu! Lütfen Bosluklari Doldurunuz!</div>

</body>
</html>";


}
echo "<html>
<head>
	<title>Kayit</title>
	<link href='css/style.css' rel='stylesheet' type='text/css' />
	</head>

<body>
			<div id='header'>
	           		<ul class='navigation'>
					<form method='POST' action='kontrol.php'>
						<li class='active'><a href='index.php'>Anasayfa</a></li>
						<li><a href='petmart.php'>Alisveris</a></li>
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
					</form>
					</ul>
			</div>

			<div id='body'>
							<form method='POST' action='kayit.php'>
							<center><table border='1'>
								<tr><td colspan='2'><div align='center'><img src='images/it.jpg' width='286' height='250'/></div></td></tr>
								<tr id='kullanici'>
								<td>Kullanici Adi:</td>
								<td><input name='kadi' type='text' size='20' maxlength='12'></td></tr>
								<tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='pass' type='password' size='20' maxlength='12'></td>
							  </tr>
							  <tr id='kullanici'>
                                  <td>Sifre:</td>
								  <td><input name='repass' type='password' size='20' maxlength='12'></td>
							  </tr>
								<tr id='kullanici'>
								<td>Tam Isim</td>
								<td><input type='text' name='tamad' size='20'></td></tr>
								<tr id='kullanici'>
								<td>Telefon Numarasi:</td>
								<td><input type='text' name='telno' size='20' maxlength='11'></td></tr>
								<tr id='kullanici'>
								<td>email:</td>
								<td><input type='text' name='email' size='20'></td></tr>
								<tr><td colspan='2'>
								  <div align='center'>
								    <input type='submit' value='Kaydol!' name='submit'>
							      </div></td></tr>
							</table>
							</center></form>
							<p>
		      </div>


</div>


</body>
</html>";

?>
