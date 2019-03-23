<html><head>

	<style type="text/css">
<!--
.style1 {
	font-family: Tahoma;
	font-weight: bold;
	font-style: italic;
	font-size: 12px;
}
.style2 {font-weight: bold; font-size: 18px; font-family: "Times New Roman", Times, serif;}
</style>
</head>
<body>
		<table width="100%" border="1" class="style1">

	<tr>
		<td><div align="center">Mesaj Tarihi</div></td>
		<td><div align="center">Gönderen</div></td>
		<td><div align="center">Mesaj Konusu </div></td>
		<td><div align="center">Durum </div></td>
	</tr>
		  <?php
		  ob_start() ;
          session_start();
		  $sil="<img src='images/delete.png' width='15' height='15' hspace='2' alt='Kullaniciyi Sil'/>";
		  $gor="<img src='images/look.gif' width='15' height='15' hspace='2' alt='Kullaniciyi Incele'/>";

			include('../baglan.php');
			$ara=mysql_query("select * from mesaj where id");
				while($goster=mysql_fetch_array($ara))
				{
				$kimden=$goster['kimden'];
				$konu=$goster['mesaj_konu'];
				$tarih=$goster['gonderim_tarihi'];
				$id=$goster['id'];
				$okundu=$goster['okunmus'];
				if($okundu==1)
				{
				$okundumu="<font color='green'>Okundu</font>";
				}
				else
				{
				$okundumu="<font color='red'>Okunmadı</font>";
				}

				echo"<tr>
		<td><div align='center'>". $tarih."</div></td>
		<td><div align='center'>



				".$kimden."



	</div></td>
		<td><div align='center'>".
		$konu



		."</a></div></td><td><center>".$okundumu."<span class='style1'><a target='I1' href='http://localhost/petshop/admin/mesajsil.php?id=".$id."' target='_blank'>".$sil."</a></span>&nbsp;
				<span class='style1'><a target='I1' href='http://localhost/petshop/admin/mesajdetay.php?id=".$id."' target='I2'>".$gor."</a></span></center></td></tr>";
		}



	?>


</table></body>
</html>
