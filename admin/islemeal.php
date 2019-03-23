<?php
session_start();
@$user = $_SESSION['kullaniciadi'];
@$date = date("Y.m.d");
@$id=$_GET['id'];
@$siparisveren=$_GET['siparis'];
include('../baglan.php');
				$sqli=mysql_query("select * from kullanici where kullaniciadi='$siparisveren'");
				while($goster=mysql_fetch_array($sqli))
				{
					$sepet=$goster['sepet'];
				}
				$sepet=$sepet-1;
				$ara = mysql_query("SELECT * FROM siparis where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$urunid=$goster['urunid'];
				$siparisveren=$goster['siparisveren'];
				$siparistarih=$goster['siparistarih'];
				$siparis=$goster['siparis'];
				$siparistutari=$goster['siparis_tutari'];
				$islemde=$goster['islemde'];
				}
	$sepetguncelle=mysql_query("UPDATE kullanici SET sepet='$sepet' WHERE kullaniciadi='$user'");
	$sepetguncelleee=mysql_query("UPDATE siparis SET islemde='0' WHERE id='$id'");

echo"<font color='Green' size='6'><center>Sipariş Başarı ile işleme Alınmıştır...</center></font>";


?>
