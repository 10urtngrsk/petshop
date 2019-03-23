<?php
session_start();
@$kullaniciadi = $_SESSION['kullaniciadi'];
include('baglan.php');
session_destroy();
		echo "<script>
function kullaniciok()
{
location.href = 'index.php';
}
</script><body onLoad=\"setTimeout('kullaniciok()', 100)\">";?>