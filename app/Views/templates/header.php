<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
    <!-- fontawesome -->
    <link href="<?= base_url(); ?>/fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>">UJIKOM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/jurusan">Kelola Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/home/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?= view_cell('\App\Libraries\Widget::breadcrumb') ?>