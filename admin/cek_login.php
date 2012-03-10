<?php
include "../config/koneksi.php";
$pass=md5($_POST[password]);
$login=mysql_query("SELECT * FROM user
WHERE id_user='$_POST[id_user]' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
// Apabila username dan password ditemukan (valid)
if ($ketemu > 0){
session_start(); // Untuk memulai session
// Daftarkan session ke server
session_register("namauser");
session_register("passuser");
// isi dari variabel session
$_SESSION[namauser]=$r[id_user];
$_SESSION[passuser]=$r[password];
header('location:hal_input.php'); // Buka hal input berita
}
else{
echo "<center><strong>LOGIN GAGAL! <br>
 Username atau Password Anda Tidak Benar<br>";
echo"<A HREF=form_login.php>Ulangi Lagi</A></strong></center>";
}
?>