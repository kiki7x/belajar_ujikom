<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= base_url(); ?>">Belajar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
			</div>
		</nav>
		<h1>Ini Halaman Home</h1>
		<button type="button" class="btn btn-primary">Tambah</button>
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
						<td>aksi</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>

</html>