<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header ">
            <h1>Tambah Data Mobil</h1>
        </div>


        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/data_mobil/tambahMobilAksi') ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="type">Type</label>
                                <select name="kode_type" id="kode_type" class="form-control">
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?= $tp->kode_type ?>"><?= $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="no_plat">No_plat</label>
                                <input type="text" name="no_plat" id="no_plat" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" name="warna" id="warna" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" id="tahun" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">-Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>

                        </div>
                    </div>
                </form>
    </section>
</div>