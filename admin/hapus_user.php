<?php
include "../config/koneksi.php";
mysql_query("DELETE FROM user WHERE id_user='$_GET[id]'");
header('location:tampil_user.php');
?>