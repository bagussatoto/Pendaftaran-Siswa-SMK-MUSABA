    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>FORMULIR PENDAFTARAN</h4>
            <hr>
            <form action="../../controller/daftar.php" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <h5>BIODATA</h5>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                        </div>
                        <label class="d-block m-0">Jenis kelamin</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="kelamin" id="lakilaki" value="L" required>
                            <label class="form-check-label" for="lakilaki">Laki-laki</label>
                            <input class="form-check-input ml-2" type="radio" name="kelamin" id="perempuan" value="P" required>
                            <label class="form-check-label ml-4" for="perempuan">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <label for="tgllahir">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katholik">katholik</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <h5>NILAI</h5>
                        <div class="form-group">
                            <label for="nilai">nilai rata-rata(rapor per-semester)</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" placeholder="masukkan nilai" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="indo">Bahasa indonesia</label>
                            <input type="number" class="form-control" id="indo" name="indo" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="mtk">Matematika</label>
                            <input type="number" class="form-control" id="mtk" name="mtk" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="inggris">Bahasa inggris</label>
                            <input type="number" class="form-control" id="inggris" name="inggris" placeholder="masukkan nilai" required>
                        </div>
                        <div class="form-group">
                            <label for="ipa">IPA</label>
                            <input type="number" class="form-control" id="ipa" name="ipa" placeholder="masukkan nilai" required>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>BERKAS</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="foto">Foto(JPG)</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                            <small id="fileHelp" class="form-text text-muted">foto tidak boleh lebih dari 1mb</small>
                            <small id="fileHelp" class="form-text text-muted">foto tidak boleh kosong</small>
                        </div>
                        <div class="form-group">
                            <label for="kk">Kartu keluarga(PDF)</label>
                            <input type="file" class="form-control-file" id="kk" name="kk" required>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh lebih dari 2mb</small>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="akta">Akta Kelahiran(PDF)</label>
                            <input type="file" class="form-control-file" name="akta" id="akta" required>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh lebih dari 2mb</small>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh kosong</small>
                        </div>
                        <div class="form-group">
                            <label for="ijazah">Ijazah(PDF)</label>
                            <input type="file" class="form-control-file" name="ijazah" id="ijazah" required>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh lebih dari 2mb</small>
                            <small id="fileHelp" class="form-text text-muted">berkas tidak boleh kosong</small>
                        </div>
                    </div>
                </div> 
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div>
                <hr>
                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="daftar"><i class="fa fa-paper-plane"></i> Daftar</button>    
            </form>
        </div>
    </main>
    <!-- END CONTENT -->