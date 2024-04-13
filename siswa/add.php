<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=siswa&s=save" method="post">
                    <div class="mb-3">
                        <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="jk" id="option5" value="L" autocomplete="off">
                        <label class="btn" for="option5">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="jk" id="option6" value="P" autocomplete="off">
                        <label class="btn" for="option6">Perempuan</label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Tanggal Lahir" name="tanggal_lahir" class="form-control" onblur="(this.type='text')" onfocus="(this.type='date')" required>
                    </div>
                    <div class="mb-3">
                        <select name="kelas_id" class="form-control" required>
                            <option>Kelas</option>
                            <?php
                            require_once ('config.php');
                            $sql = "SELECT * FROM kelas";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='$row[id]'>$row[kelas]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];

    $sql = "INSERT INTO siswa (nis, nama, jk, tempat_lahir, tanggal_lahir, kelas_id) VALUES ('$nis', '$nama', '$jk', '$tempat_lahir', '$tanggal_lahir', '$kelas_id')";

    if (mysqli_query($config, $sql)) {
        header('Location: ?m=siswa&s=view');
    } else {
        echo 'Error: ' . mysqli_error($config);
    }
}
?>