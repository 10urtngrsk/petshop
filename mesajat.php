<?php
ob_start() ;
session_start();
@$kullanici = $_SESSION['kullaniciadi'];
include('baglan.php');
@$date = date("Y-m-d");
@$submit = $_POST['submit'];
@$konu = strip_tags($_POST['konu']);
@$mesaj = strip_tags($_POST['mesaj']);
@$date = date("Y-m-d");
if($kullanici)
{
if ($submit)
{

	//kutulardaki varligi kontrol ediyoruz
	if($konu&&$mesaj)
	{
		$mesajsorgu=mysql_query("
		INSERT INTO mesaj VALUES ('','$kullanici','$konu','$mesaj','$date','0')
		");
echo "<html>
<head>
<style type='text/css'>
<!--
.style1 {
	font-family: Tahoma;
	font-weight: bold;
	font-size: 10px;
}
-->
</style>
<script>
function son()
{
self.close();
}
</script>
</head>
<body onLoad=\"setTimeout('son()', 3000)\">

<center><span class='style1'>Mesajınız Bize Başarı ile Ulaştırıldı! Bu Pencere Otomatik olarak kapanacaktır!</span></center>

</body>
</html>";}
}
else
{
echo "
<form method='POST' action='mesajat.php'>
<table width='44%' border='0' class='style1' cellpadding='0'>

	<tr>
		<td><div align='center'>Konu:</div></td>
		<td><div align='center'>
			<input name='konu' size='20' style='float: left'></div></td>
		<td width='8'><div align='center'></div></td>
	</tr>
	<tr>
		<td><div align='center'>Mesaj:</div></td>
		<td><div align='left'>
				<textarea rows='16' name='mesaj' cols='63'></textarea></div></td>
		<td width='8'><div align='center'></div></td>
	</tr>
	<tr>
		<td><div align='center'>Gönder:</div></td>
		<td><div align='center'>
			<input type='submit' value='Gönder' name='submit' style='float: left'></div></td>
		<td width='8'><div align='center'></div></td>
	</tr>
		  </table></form>";
}
}
else
die('Önce Giriş Yapmalısınız!');
?>
