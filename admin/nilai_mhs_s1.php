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
echo "<h2 align=center><strong>Input Data Mahasiswa S1</strong></h2>
<h3 align=center>Sistem Komputer </h3>
<form method=POST action='input_mhs_d3'>
          <table border=1 align=center>
          <tr><td>NPM</td><td>: 
		  <input type=text name='id_npm'></td></tr>
          <tr><td>Nama</td><td>: 
		  <input type=text name='nama'></td></tr>
          <tr><td>Nilai Elektronika Dasar</td><td>:
		  <input type=text name='nilai_eldas'></td></tr>
		  <tr><td>Mutu</td><td>:
		  <select name=mutu_eldas>
			<option>Pilih Mutu</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			<option value='E'>E</option>
          </select></td></tr>
		    <tr><td>Ket</td><td>:
			<select name=ket_eldas>
			<option>Pilih Ket</option>
			<option value='Lulus'>Lulus</option>
			<option value='Gagal Ujian'>Gagal Ujian</option>
			<option value='Gagal Proyek'>Gagal Proyek</option>
			<option value='Gagal Presentasi'>Gagal Presentasi</option>
			<option value='Gagal Praktikum'>Gagal Praktikum</option>
          </select></td></tr>
		    <tr><td>Nilai Sistem digital</td><td>:
		  <input type=text name='nilai_sd'></td></tr>
		  <tr><td>Mutu</td><td>:
		  <select name=mutu_sd>
			<option>Pilih Mutu</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			<option value='E'>E</option>
          </select></td></tr>
		    <tr><td>Ket</td><td>:
			<select name=ket_sd>
			<option>Pilih Ket</option>
			<option value='Lulus'>Lulus</option>
			<option value='Gagal Ujian'>Gagal Ujian</option>
			<option value='Gagal Proyek'>Gagal Proyek</option>
			<option value='Gagal Presentasi'>Gagal Presentasi</option>
			<option value='Gagal Praktikum'>Gagal Praktikum</option>
          </select></td></tr>
		      <tr><td>Nilai Mikroprocesor</td><td>:
		  <input type=text name='nilai_mp'></td></tr>
		  <tr><td>Mutu</td><td>:
		  <select name=mutu_mp>
			<option>Pilih Mutu</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			<option value='E'>E</option>
          </select></td></tr>
		    <tr><td>Ket</td><td>:
			<select name=ket_mp>
			<option>Pilih Ket</option>
			<option value='Lulus'>Lulus</option>
			<option value='Gagal Ujian'>Gagal Ujian</option>
			<option value='Gagal Proyek'>Gagal Proyek</option>
			<option value='Gagal Presentasi'>Gagal Presentasi</option>
			<option value='Gagal Praktikum'>Gagal Praktikum</option>
          </select></td></tr>
		  <tr><td>Nilai Interfacing</td><td>:
		  <input type=text name='nilai_interface'></td></tr>
		  <tr><td>Mutu</td><td>:
		  <select name=mutu_interface>
			<option>Pilih Mutu</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			<option value='E'>E</option>
          </select></td></tr>
		    <tr><td>Ket</td><td>:
			<select name=ket_interface>
			<option>Pilih Ket</option>
			<option value='Lulus'>Lulus</option>
			<option value='Gagal Ujian'>Gagal Ujian</option>
			<option value='Gagal Proyek'>Gagal Proyek</option>
			<option value='Gagal Presentasi'>Gagal Presentasi</option>
			<option value='Gagal Praktikum'>Gagal Praktikum</option>
          </select></td></tr>
		  <tr><td>Nilai Sistem Tertanam</td><td>:
		  <input type=text name='nilai_sister'></td></tr>
		  <tr><td>Mutu</td><td>:
		  <select name=mutu_sister>
			<option>Pilih Mutu</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			<option value='E'>E</option>
          </select></td></tr>
		    <tr><td>Ket</td><td>:
			<select name=ket_sister>
			<option>Pilih Ket</option>
			<option value='Lulus'>Lulus</option>
			<option value='Gagal Ujian'>Gagal Ujian</option>
			<option value='Gagal Proyek'>Gagal Proyek</option>
			<option value='Gagal Presentasi'>Gagal Presentasi</option>
			<option value='Gagal Praktikum'>Gagal Praktikum</option>
          </select></td></tr>
          <tr><td></td><td><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
</table>
</form>";
}
?>
