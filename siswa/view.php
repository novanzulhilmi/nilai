<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Absen</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT siswa.id as sid, siswa.*, kelas.* FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id ORDER BY kelas ASC";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0 ) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nis'].'</td>
                                    <td>'.$r['nama'].'</td>
                                    <td>'.$r['jk'].'</td>
                                    <td>'.$r['tempat_lahir'].'</td>
                                    <td>'.$r['tanggal_lahir'].'</td>
                                    <td>'.$r['kelas'].'</td>
                                    <td>
                                        <a href="?m=siswa&s=edit&id='.$r['sid'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=siswa&s=delete&id='.$r['sid'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin kelas akan dihapus?, yakin kah???\')">Hapus</a>
                                    </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                <td colspan='5' align='center'>Data Kosong</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>