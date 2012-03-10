<?php
include "../config/koneksi.php";
// Apabila password tidak diubah
if (empty($_POST[password])) {
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
							 nama='$_POST[nama]',
							 id_level='$_POST[level]',
							 id_publish='$_POST[publish]'
					   WHERE id_user='$_POST[id]'");
}
// Apabila password diubah
else{
$pass=md5($_POST[password]);
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
							 password='$pass',
							 nama='$_POST[nama]',
						     id_level='$_POST[level]',
							 id_publish='$_POST[publish]'
				       WHERE id_user='$_POST[id]'");
}
header('location:tampil_user.php');
?>