<?php
ob_start();
session_start();
include('baglan.php');
@$id=$_GET['id'];
 $querychange=mysql_query("
   DELETE from siparis WHERE id='$id'
   ");
?>
<html><head>
</head>
<body>
<center><br><h1>Sepet Basari Ile Silindi!</h1><br><a target='I1' href='sepetdetay.php'>Geri</a></center>
</body>
</html>
