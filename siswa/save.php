<?php
if (isset($_POST['simpan'])) {
    require_once('config.php');
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'] == '' ? 0 : $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'] == '' ? 0 : $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];

    $sql = "INSERT INTO siswa SET nis='$nis', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kelas_id='$kelas_id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=siswa&s=view');
    } else {
        include "index.php?m=siswa&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}