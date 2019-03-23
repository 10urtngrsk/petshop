<?php
include('../baglan.php');
@$submit = $_POST['submit'];
@$baslik= $_POST['T2'];
@$hakkimizda= $_POST['T3'];
@$aciklama= $_POST['T4'];
if($submit)
{
$querychange=mysql_query("
		UPDATE site SET baslik='$baslik' WHERE id='1'
		");
		$querychange=mysql_query("
		UPDATE site SET hakkimizda='$hakkimizda' WHERE id='1'
		");
		$querychange=mysql_query("
		UPDATE site SET aciklama='$aciklama' WHERE id='1'
		");

}
$ara=mysql_query("select * from site where id='1'");
				while($goster=mysql_fetch_array($ara))
				{
				$baslik=$goster['baslik'];
				$hakkimizda=$goster['hakkimizda'];
				$aciklama=$goster['aciklama'];
				}

 echo "<center><form method='POST' action='site.php'>
	<table border='1' width='37%'>

	<tr>
		<td colspan='2'>
		<p align='center'>Site Ayarlari</td>
	</tr>
	<tr>
		<td width='220'>Site Başlığı:</td>
		<td><input type='text' name='T2' size='50' value=' $baslik '></td>
	</tr>
	<tr>
		<td width='220'>Hakkımızda(Sadece İngilizce Karakterler!):</td>
		<td><textarea rows='13' name='T3' cols='47'>$hakkimizda</textarea></td>
	</tr>
	<tr>
		<td width='220'>Anahtar Kelimeler:</td>
		<td><input type='text' name='T4' size='50' value=' $aciklama '></td>
	</tr>
	<tr>
		<td colspan='2'>
		<p align='center'><input type='submit' value='Güncelle!' name='submit'></td>
	</tr>
</table>
</form></center>";
?>
