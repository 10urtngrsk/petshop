 <?php
 @$id=$_GET['id'];
 include('../baglan.php');
  $querychange=mysql_query("
		DELETE from mesaj WHERE id='$id'
		");		
?>
<html><head>
</head>
<body >
<center><img src="images/info.png" /><br><h1>Mesaj Basari Ile Silindi!</h1><br><a target='I1' href='mesaj.php'>Geri</a></center>
</body>
</html>
		