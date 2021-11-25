<div class="container mt-4">
    <h3>PROFIL</h3>
    <hr>
    <?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM pendaftar p JOIN berkas b ON b.id_berkas=p.id_berkas");
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="row">
        <div class="col-3">
            <img src="../../berkas/<?= $data['foto'] ?>" alt="" width="200">
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td><?= $data['kelamin'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><?= $data['tgl_lhr'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $data['agama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
            </table>
            <?php 
                if ($data['status'] == '0') {
                    echo "<div class='alert alert-warning' role='alert'>Proses</div>";
                } else {
                    echo "<div class='alert alert-warning' role='alert'>Terdaftar</div>";
                }
            ?>
        </div>
    </div>
</div>