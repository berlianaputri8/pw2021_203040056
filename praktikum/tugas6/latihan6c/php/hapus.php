<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
$id = $_GET['id'];

if(hapus($id) > 0) {
	echo "<script>
	        alert('data berhasil dihapus!');
	        document.location.href = 'admin.php';
	    </script>";
}else{
	echo "<script>
	        alert('data gagal dihapus');
	        document.location.href='admin.php';
	    </script>";
}
?>