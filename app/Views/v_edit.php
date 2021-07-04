<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-6">
        <form action="/mahasiswa/update/<?= $edit['nim']; ?>" method="post" role="form" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" value="<?= $edit['nim']; ?>" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nim'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" value="<?= $edit['nama']; ?>" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <div class="form-check <?= ($validation->hasError('jk')) ? 'is-invalid' : ''; ?>">
                    <input class=" form-check-input" type="radio" name="jk" id="jk1" value="Laki-laki" <?php if ($edit['jk'] == 'Laki-laki') {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                    <label class="form-check-label" for="jk1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check <?= ($validation->hasError('jk')) ? 'is-invalid' : ''; ?>">
                    <input class=" form-check-input" type="radio" name="jk" id="jk2" value="Perempuan" <?php if ($edit['jk'] == 'Perempuan') {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                    <label class="form-check-label" for="jk2">
                        Perempuan
                    </label>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('jk'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" aria-label="Default select example">
                    <option value="" selected>Pilih...</option>
                    <?php foreach ($editjurusan as $j) : ?>
                        <option <?php if ($j->kd_jurusan == $edit['kd_jurusan']) {
                                    echo 'selected';
                                } ?> value="<?= $j->kd_jurusan; ?>"><?= $j->nama_jurusan; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('jurusan'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>