<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$Fakultas = $_POST['Fakultas'];
$Pekerjaan = $_POST['Pekerjaan'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$nim|$kelas|$Fakultas|$Pekerjaan\n");
fclose($fp);

header("Location: setelahProses.php");

?>



