 <?php
 @$id=$_GET['id'];
 include('../baglan.php');
  $querychange=mysql_query("
		DELETE from kullanici WHERE id='$id'
		");		
?>
<html><head>
<script>
function sildi()
{
Location href="kullanici.php";
}
</script></head>
<body onLoad="setTimeout('sildi()', 5000)">
<center><img src="images/info.png" /><br><h1>Kullanici Basari Ile Silindi!</h1><br><a target='I1' href='kullanici.php'>Geri</a></center>
</body>
</html>
		