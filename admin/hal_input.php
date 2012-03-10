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
echo "<h2 align=center><strong>Input Data Mahasiswa D3</strong></h2>
<h3 align=center>Teknik Komputer </h3>
<form method=POST action='input_mhs_d3'>
          <table border=1 align=center>
          <tr><td>NPM</td><td>: 
		  <input type=text name='id_npm'></td></tr>
          <tr><td>Nama</td><td>: 
		  <input type=text name='nama'></td></tr>
          <tr><td>Jenis Kelamin</td><td>: 
		  <input type=radio name='jk' value='L' checked>L
		  <input type=radio name='jk' value='P'>P</td></tr>
          <tr><td>Angkatan</td><td>: 
		  <input type=text name='angkatan'></td></tr>
          <tr><td>Jurusan</td><td> : 
		  <input type=radio name='jurusan_d3' value='Teknik Komputer'checked>Teknik Komputer
		  </td></tr>
          <tr><td></td><td><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
</table>
</form>";
}
?>
