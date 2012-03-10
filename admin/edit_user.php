<?php
include "../config/koneksi.php";
$edit=mysql_query("SELECT * FROM user WHERE id_user='$_GET[id]'");
$r=mysql_fetch_array($edit);
echo "<h2>Edit User</h2>
<form method=POST action=update_user.php>
<input type=hidden name=id value='$r[id_user]'>
<table>
<tr><td>Username</td><td> :
<input type=text name=id_user value='$r[id_user]'></td></tr>
<tr><td>Password</td><td> :
<input type=password name=password> *) </td></tr>
<tr><td>Nama </td>
<td> : <input type=text name=nama size=30
value='$r[nama]'></td></tr>
<tr><td>Level</td>
<td> : <select name=level>";
$tampil=mysql_query("SELECT * FROM level ORDER BY nama_level");
while($w=mysql_fetch_array($tampil))
{
if ($r[id_level]==$w[id_level]){
echo "<option value=$w[id_level] selected>
$w[nama_level]</option>";
}
else{
echo "<option value=$w[id_level]>
$w[nama_level]</option>";
}
}
echo "</select></td></tr>
<tr><td>Publish</td>
<td> : <select name=publish>";
$tampil1=mysql_query("SELECT * FROM publish ORDER BY nama_publish");
while($z=mysql_fetch_array($tampil1))
{
if ($r[id_publish]==$z[id_publish]){
echo "<option value=$z[id_publish] selected>
$z[nama_publish]</option>";
}
else{
echo "<option value=$z[id_publish]>
$z[nama_publish]</option>";
}
}
echo "</select></td></tr>
<tr><td colspan=2>*) Apabila password tidak diubah,
dikosongkan saja.</td></tr>
<tr><td colspan=2><input type=submit value=Update>
<input type=button value=Batal
onclick=self.history.back()></td></tr>
</table>
</form>";
?>