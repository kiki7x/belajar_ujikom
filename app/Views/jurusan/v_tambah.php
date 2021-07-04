<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-6">
        <form action="/jurusan/simpan" method="post" role="form" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="kd_jurusan" class="form-label">Kode Jurusan</label>
                <input type="text" id="kd_jurusan" name="kd_jurusan" class="form-control <?= ($validation->hasError('kd_jurusan')) ? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('kd_jurusan'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control <?= ($validation->hasError('nama_jurusan')) ? 'is-invalid' : ''; ?>" id="nama_jurusan">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_jurusan'); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>