<?php
    if(isset($_POST['submit_data'])){
        $NAMA = $_POST['NAMA'];
        $KELAMIN = $_POST['KELAMIN'];
        $NIS = $_POST['NIS'];
        $NISN = $_POST['NISN'];
        $TEMPAT = $_POST['TEMPAT'];
        $ALAMAT = $_POST['ALAMAT'];
        $VISI = $_POST['VISI'];

        $file = fopen("proses.txt","a+");
        fputs ($file, "$NAMA|$KELAMIN|$NIS|$NISN|$TEMPAT|$ALAMAT|$VISI\n");
        fclose($file);

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ruwet</title>
</head>
<body>
    <table border="3" cellspacing="0" cellpadding="5">
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>NIS</td>
            <td>NISN</td>
            <td>Tempat Tgl Lahir</td>
            <td>Alamat</td>
            <td>Visi dan Misi</td>
        </tr>
        <tr>
            <td><?= $NAMA; ?></td>
            <td><?= $KELAMIN; ?></td>
            <td><?= $NIS; ?></td>
            <td><?= $NISN; ?></td>
            <td><?= $TEMPAT; ?></td>
            <td><?= $ALAMAT; ?></td>
            <td><?= $VISI; ?></td>
        </tr>
    </table>
</body>
</html>