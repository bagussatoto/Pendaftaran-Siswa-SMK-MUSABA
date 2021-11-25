        <div class="container text-center mt-3">
        
            <div id="countdown"></div><hr>
            
            <h4 class="mt-3">Ubah waktu</h4>
            <form action="../../controller/countdown.php" method="POST" class="col-4 mx-auto">
                <div class="form-group">
                    <input type="date" name="tgl" id="tanggal" class="form-control">
                </div>
                <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
            </form>

        </div>

    <?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">


    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h6 class='d-inline'>"+hari+" hari </h6><h6 class='d-inline'>"+jam+" jam </h6><h6 class='d-inline'>"+menit+" menit </h6><h6 class='d-inline mt-5'>"+detik+" detik</h6>";
    }, 1000);

</script>