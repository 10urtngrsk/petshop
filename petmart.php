<?php
session_start();//Kullaniciya g�re islem baslatiliyor...
@$kullaniciadi = $_SESSION['kullaniciadi']; //Kullanici adi giris yapan kullaniciya g�re belirleniyor...
include('baglan.php'); //Veritabani baglantisi �ekiliyor...
				$ara=mysql_query("select * from kullanici where kullaniciadi='$kullaniciadi'"); //Sorgu olusturuyoruz...
				while($goster=mysql_fetch_array($ara))//veri �ekiliyor...
				{
				$kullaniciadi=$goster['kullaniciadi'];
				$id=$goster['id'];
				$fullisim=$goster['fullisim'];
				$sepet=$goster['sepet'];
				$sepetdetay=$goster['sepetdetay'];
				}


?>


<html>

<head>
	<title><?php echo "Pet Shop"; ?></title>
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

			       <div id="content">
			         <div class="content">

					   <ul>
						 <li><br>
									    <br>
								        <br>
							          <br>
										<img src="images/koi2.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop">
										    <h2>Balik</h2>
							     <span><a href="balikmama.php">Yemler</a></span>
								 <span><a href="balikev.php">Akvaryumlar</a></span>
						 <span><a href="petmart.html"></a></span><span><a href="petmart.html"></a></span></li>
									<li><br>
									  <br>
									  <br>
										<br>
										<img src="images/cat3.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop">
										<h2>Kedi</h2>
											<span><a href="kedimama.php">Mamalar</a></span>
											<span><a href="kediev.php">Barinaklar</a></span>
											<span><a href="petmart.html"></a></span><span><a href="petmart.html"></a></span></li>
									<li>
										<img src="images/dog2.jpg" width="140" height="240" alt="Pet Shop" title="Pet Shop">
										<h2>K&ouml;pek</h2>
										    <span><a href="kopekmama.php">Mamalar</a></span>
										<span><a href="kopekev.php">Barinaklar</a></span>
										<span><a href="petmart.html"></a></span><span><a href="petmart.html"> </a></span></li>
									<li>
										<img src="images/bird3.jpg" width="140" height="240" alt="Pet Shop" title="Pet Shop">
										<h2>Kuslar </h2>
										    <span><a href="kusmama.php">Yemler</a></span>
										<span><a href="kusev.php">Kafesler</a></span> <span><a href="petmart.html"></a></span><span><a href="petmart.html"> </a></span></li>
				         <li></li>
									<li>
										<a href="index.html"></a>
										<h2>&nbsp;</h2>
									</li>
					  </ul>
					 </div>

					    <div id="sidebar">


								  <br> <br> <table border='0' align='center' ><tr><td><strong></strong></td></tr>


</body>
</html>
