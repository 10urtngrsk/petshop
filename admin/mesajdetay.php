<?php
include('../baglan.php');
@$date = date('Y-m-d');
@$id=$_GET['id'];
			$ara=mysql_query("select * from mesaj where id='$id'");
				while($goster=mysql_fetch_array($ara))
				{
				$kimden=$goster['kimden'];
				$konu=$goster['mesaj_konu'];
				$tarih=$goster['gonderim_tarihi'];
				$id=$goster['id'];
				$okundu=$goster['okunmus'];
				$mesaj_icerik=$goster['mesaj_icerik'];
				}
				if($okundu==0)
				{
				$querychange=mysql_query("
		UPDATE mesaj SET okunmus='1' WHERE id='$id'
		");
				}

 echo "<script>
function don()
{
location.href = 'mesaj.php';
}
</script><center><form method='POST' action=''>
	<div align='center'>
	<table border='1' width='47%' height='304'>
		<tr>
			<td colspan='2'>
			<p align='center'><b><font face='Tahoma' size='2'>$kimden Kişisinden Gelen
			Mesaj</font></b></td>
		</tr>
		<tr>
			<td width='13%'><b><font face='Tahoma' size='2'>Gönderim Tarihi</font></b></td>
			<td width='28%'>$tarih</td>
		</tr>
		<tr>
			<td width='13%'><b><font face='Tahoma' size='2'>Mesajın Konusu</font></b></td>
			<td width='28%'><font face='Tahoma'>
			<input name='konu' size='65' style='font-weight: 700' value='$konu'></font></td>
		</tr>
		<tr>
			<td width='13%'><b><font face='Tahoma' size='2'>Mesaj:</font></b></td>
			<td width='28%'><font face='Tahoma'>
			<textarea rows='15' name='mesaj' cols='47' style='font-weight: 700'>$mesaj_icerik</textarea></font></td>
		</tr>

	<tr>
		<td colspan='2'>
		<p align='center'><input type='button' value='Kapat!' onClick='don()'></td>
	</tr>
</table>
</div>
</form></center>";
?>
