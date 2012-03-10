<?php
  session_start();
  session_destroy();
  header('location:form_login.php');
   echo "
  <center>Anda telah sukses keluar sistem <b>[LOGOUT]<b>";

// Apabila setelah logout langsung menuju halaman utama website, aktifkan baris di bawah ini:


?>
