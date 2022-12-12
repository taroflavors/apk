<div style="margin-left:320px; margin-top:150px; margin-bottom:-300px;" class="card">
    <div class="card-body">
        <h5 class="card-title">tampilkan data</h5>

        <?= $this->session->flashdata('message'); ?>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">jam</th>
                    <th scope="col">lokasi</th>
                    <th scope="col">suhu badan</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($catatan as $cat) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?php echo $cat['tanggal']; ?> </td>
                        <td><?php echo $cat['jam']; ?></td>
                        <td><?php echo $cat['lokasi']; ?></td>
                        <td><?php echo $cat['suhu']; ?>° Celcius</td>
                        <td>
                            <!-- <?= anchor('tampil_catatan/delete/' . $cat['id'], '<div class="btn btn-danger"><i class="bx bxs-trash"></i></div>') ?>  -->

                            <a href="<?= base_url() ?>tampil_catatan/delete/<?= $cat['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Menghapus ?');"><i class="bx bxs-trash"></i></a>

                            <?= anchor('tampil_catatan/edit_catatan/' . $cat['id'], '<div class="btn btn-primary"><i class=" bx bx-edit-alt"></i></div>') ?></a>
                        </td>

                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
        <a href="<?= base_url('cetak'); ?>" target="_BLANK" class="btn btn-warning"><i class="bx bx-printer"></i> Cetak Data</a>
        <!-- End Table with stripped rows --> <i></i>

    </div>
</div>