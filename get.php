<?php

mysql_connect("localhost","root","12345678") or die(mysql_error());
mysql_select_db("petshop") or die(mysql_error());

$id=addslashes($_REQUEST['id']);

$image=mysql_query("SELECT * FROM urun WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image=$image['image'];

header("Content-type: image/jpeg");

echo $image;
?>
