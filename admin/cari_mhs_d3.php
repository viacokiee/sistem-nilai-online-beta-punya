<?php
session_start();
include "../config/koneksi.php";
include "../config/menu.php";
// Apabila variabel session masih kosong (user belum login)
if (empty($_SESSION[namauser]) AND
empty($_SESSION[passuser])){
echo "<center>Anda harus login <br>";
echo "<a href=form_login.php><b>LOGIN</b></a></center>";
}
// Apabila user sudah login dengan benar terbentuklah session
else{
echo "<h2 align=center><strong>Cari Nilai pada Tabel nilai_d3</strong></h2>
<h3 align=center>Teknik Komputer </h3>
<body>
<div align='center'>Field
<select name='select'>
 <option select>select</option>
  <option value='nama'>nama</option>
  <option value='npm'>npm</option>
 
</select> 
Masukakan Kata Yang Anda Cari  
<input type='text' name='kata' >
 <input name='Submit' type='submit'  value='Cari' >
 </body>";
}
 ?>