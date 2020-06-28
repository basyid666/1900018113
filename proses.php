<html>
<head>
</head>
<body>
	<center>
	<h1 width="180" align="cols">Data Sudah Tersimpan</h1>
	<br>
	<td><a href="biodata.text">lihat validasi data anda</a><td><br>
	<td><a href="form.html">Halaman Awal</a></td>
    </center>
<div>
	
<?php
echo "<head><title><>";
$fp=fopen("biodata.text", "a+");
$nama =$_POST['nama'];
$kelamin =$_POST['kelamin'];
$nis =$_POST['nis'];
$nisn =$_POST['nisn'];
$tempat =$_POST['tempat'];
$alamat =$_POST['alamat'];
$visimisi =$_POST['visi'];
fputs($fp,"$nama|$kelamin|$nis|$nisn|$tempat|$alamat|$visi|\n");
fclose($fp);
?>

</div>	
</body>
</html>