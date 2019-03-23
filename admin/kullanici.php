<?php
include('../baglan.php');
echo"<center>
<table border='1' width='50%'><tr><td colspan='3'><center><span class='style1'>Sistemdeki Kayitli Kullanicilar</span></center></td></tr>";
		  $sil="<img src='images/delete.png' width='15' height='15' hspace='2' alt='Kullaniciyi Sil'/>";
		  $gor="<img src='images/look.gif' width='15' height='15' hspace='2' alt='Kullaniciyi Incele'/>";
$ara=mysql_query("select * from kullanici where id");
				while($goster=mysql_fetch_array($ara))
				{
				$kullaniciadi=$goster['kullaniciadi'];
				$id=$goster['id'];

				echo "<tr>
				<td width='46'>
		  <img src='images/user.png' width='26' height='26' hspace='10'></td>
				<td width='300'><span class='style1'>".$kullaniciadi."</span> </td><td><span class='style1'><a target='I1' href='http://localhost/petshop/admin/kullanicisil.php?id=".$id."' target='_blank'>".$sil."</a></span>&nbsp;
				<span class='style1'><a target='I1' href='http://localhost/petshop/admin/kullanicidetay.php?id=".$id."' target='I2'>".$gor."</a></span> </td>
			</tr>";


				}
				echo "</table></center>";


?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Yeni Sayfa 1</title>
</head>

<body>

</body>

</html>
