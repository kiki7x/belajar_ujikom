<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<a href="<?= base_url(); ?>/mahasiswa/tambah" class="btn btn-primary">Tambah</a>
<?php
if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </div>
<?php } ?>
<?php if (!empty(session()->getFlashdata('info'))) { ?>
    <div class="alert alert-info">
        <?php echo session()->getFlashdata('info'); ?>
    </div>
<?php } ?>
<?php if (!empty(session()->getFlashdata('warning'))) { ?>
    <div class="alert alert-warning">
        <?php echo session()->getFlashdata('warning'); ?>
    </div>
<?php } ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 0;
        foreach ($tampilmhs as $row) :
            $nomor++;
        ?>
            <tr>
                <th><?= $nomor; ?></th>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['jk']; ?></td>
                <td><?= $row['nama_jurusan']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/mahasiswa/detail/<?= $row['nim'] ?>" type="button" class="btn btn-success btn-sm" role="button" aria-disabled="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="far fa-eye"></i></a>
                        <a href="/mahasiswa/edit/<?= $row['nim']; ?>" type="button" class="btn btn-primary btn-sm" role="button" aria-disabled="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                        <a href="/mahasiswa/hapus/<?= $row['nim']; ?>" type="button" class="btn btn-danger btn-sm" role="button" aria-disabled="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('apakah anda yakin?');"><i class="far fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script type="text/javascript">
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<?= $this->endSection(); ?>