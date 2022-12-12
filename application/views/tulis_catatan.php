<section style="margin-left:350px; margin-top:150px; margin-bottom:-500px;" class="section">
    <div class="row">
        <div class="lg-10">

            <div class="card">


                <div class="card-body">
                    <h1 class="card-title">tulis catatan</h1>




                    <!-- General Form Element -->
                    <form method="POST" action="<?= base_url('aplikasinya/tambah_catatan'); ?>">
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Pilih tanggal </label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= set_value('tanggal'); ?>">
                                <?= form_error('tanggal', '<div class="text-small text-danger"></div>') ?>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Pilih jam </label>
                            <div class="col-sm-10">
                                <input type="time" name="jam" id="jam" class="form-control" value="<?= set_value('jam'); ?>">
                                <?= form_error('jam', '<div class="text-small text-danger"></div>') ?>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pilih lokasi </label>
                            <div class="col-sm-10">
                                <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukan Lokasi" value="<?= set_value('lokasi'); ?>">
                                <?= form_error('lokasi', '<div class="text-small text-danger"></div>') ?>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">suhu tubuh</label>
                            <div class="col-sm-10">
                                <input type="number" name="suhu" id="suhu" class="form-control" placeholder="Masukan Suhu Tubuh" value="<?= set_value('suhu'); ?>">
                                <?= form_error('suhu', '<div class="text-small text-danger"></div>') ?>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <!-- <button type="submit" class="btn btn-primary"> Submit </button> -->
                                <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i></i> SIMPAN</button>
                                <a href="dashboard" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="bi bi-box-arrow-right"></i>
                                    </span>
                                    <span class="text">KEMBALI</span>
                                </a>
                            </div>


                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>

    </div>

</section>