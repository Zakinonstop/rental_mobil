<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header ">
            <h1>Dashboard</h1>
        </div>

        <a href="" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>No Plat</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $mb) : ?>

                    <td><?= $no++; ?></td>
                    <td>kosong</td>
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
                <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</div>