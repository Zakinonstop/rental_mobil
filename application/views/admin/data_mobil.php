<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header ">
            <h1>Dashboard</h1>
        </div>

        <div>
            <a href="<?= base_url('admin/Data_mobil/tambahDataMobil'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
        </div>

        <div class="col-md-6">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
        <div>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Type</th>
                        <th>Merk</th>
                        <th>No Plat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mobil as $mb) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt=""></td>
                            <td><?= $mb->kode_type ?></td>
                            <td><?= $mb->merk ?></td>
                            <td><?= $mb->no_plat ?></td>
                            <td><?php
                                if ($mb->status == 0) {
                                    echo '<span class= "badge badge-danger">Tidak Tersedia</span>';
                                } else {
                                    echo '<span class= "badge badge-primary">Tersedia</span>';
                                } ?></td>
                            <td><a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </section>
</div>