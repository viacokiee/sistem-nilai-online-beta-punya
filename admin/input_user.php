<?php
include "../config/koneksi.php";
// Enkripsi password sebelum disimpan di database
$pass=md5($_POST[password]);
mysql_query("INSERT INTO user	(id_user,
								password,
								nama,
								id_level,
								id_publish)
VALUES('$_POST[id_user]',
'$pass',
'$_POST[nama]',
'$_POST[level]',
'$_POST[publish]')");
header('location:tampil_user.php');
?>