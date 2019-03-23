<?php

session_start();



@$kullaniciadi=$_POST['T1'];
@$sifre=$_POST['T2'];

if($kullaniciadi&&$sifre)
{

include('baglan.php');

$ara=mysql_query("SELECT * FROM kullanici WHERE kullaniciadi='$kullaniciadi'");
	while($goster=mysql_fetch_assoc($ara))
	{
		$kullaniciadi=$goster['kullaniciadi'];
		$sifre=$goster['sifre'];
	}
	//Eger eslesiyorsa
	if($kullaniciadi==$kullaniciadi&&$sifre==$sifre)
	{
		$_SESSION['kullaniciadi']=$kullaniciadi;
		echo "<script>
function kullaniciok()
{
location.href = 'index.php';
}
</script><body onLoad=\"setTimeout('kullaniciok()', 100)\">";

	}
	else
		echo "Hatali Kullanici Adi veya Sifre!";

}
else

die('Lütfen Kullanici adi ve sifrenizi giriniz! <br><a href="http://localhost/petshop/index.php">Tekrar Dene!</a>');

?>
