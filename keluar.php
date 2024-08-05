<?php
session_start();
session_destroy(); // menghapus semua variabel session dan session ID
header("location:index.php");
?>