<?php
include "../config/koneksi.php";
echo "<h2>Tambah User</h2>
<form method=POST action=input_user.php>
<table>
<tr><td>Username</td>
<td> : <input type=text name='id_user'></td></tr>
<tr><td>Password</td>
<td> : <input type=password name='password'></td></tr>
<tr><td>Nama</td>
<td> : <input type=text name='nama' size=30></td></tr>
<tr><td>Level</td> <td> :
<select name=level>
<option value=0 selected>- Pilih Level -</option>";
$tampil=mysql_query("SELECT * FROM level ORDER BY nama_level");
while($r=mysql_fetch_array($tampil)){
echo "<option value=$r[id_level]>$r[nama_level]</option>";
}
echo "</select></td></tr>
<tr><td>Publish</td><td> :
<select name=publish>
<option value=0 selected>- Pilih Publish -</option>";
$tampil1=mysql_query("SELECT * FROM publish ORDER BY nama_publish");
while($t=mysql_fetch_array($tampil1)){
echo "<option value=$t[id_publish]>$t[nama_publish]</option>";
}
echo "</select></td></tr>
<tr><td colspan=2><input type=submit value=Submit> <input type=Reset value=Reset>
</td></tr>
</table>
</form>";
?>