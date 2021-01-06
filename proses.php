<html><head><title>proses data dari form</title></head>
<body>
<h1>proses simpan buku tamu</h1>
<?
///membuat koneksi ke database
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="uts_promnet"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST[nama];
$username=$_POST[username];
$password=$_POST[password];
$telepon=$_POST[no_telepon];

///input ke tabel pengunjung
$input=mysql_query("INSERT INTO user (nama, username, password, no_telepon) VALUES ('$nama', '$username','$password', '$telepon')");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo "Buku tamu berhasil disimpan";
}
else ///jika gagal
{
echo "Buku tamu gagal disimpan";
}
?>
| <a href="daftar.html">OK</a>
</body></html>