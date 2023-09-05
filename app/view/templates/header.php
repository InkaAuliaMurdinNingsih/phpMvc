<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= Base_URL; ?>/css/bootstrap.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= Base_URL; ?>">
            <img src="<?= Base_URL; ?>/img/logo smk.png" alt="logo smk" width="50">
        </a>
        <a class="navbar-brand" href="<?=Base_URL; ?>">SMKN2<span>Tenggalek</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?=Base_URL; ?>">Home <span class="sr-only">(current)</span></a>  
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kompetensi Keahlian
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a></li>
                    <li><a class="dropdown-item" href="#">Desaign Pemodelan dan Perencanaa pembangunan</a></li>
                    <li><a class="dropdown-item" href="#">Teknik Konstruksi dan Perumahan</a></li>
                    <li><a class="dropdown-item" href="#">Kuliner</a></li>
                    <li><a class="dropdown-item" href="#">Akuntansi</a></li>
                    <li><a class="dropdown-item" href="#">Teknik Pengelasan</a></li>
                    <li><a class="dropdown-item" href="#">Teknik Pemanasan dan Tata udara pendinginan</a></li>
                </ul>
            </div>
                <a class="nav-item nav-link" href="<?= Base_URL; ?>/blog">Data Guru</a>
                <a class="nav-item nav-link" href="<?= Base_URL; ?>/siswa">Data siswa</a>
                <a class="nav-item nav-link" href="<?= Base_URL; ?>/user/profile">About</a>
            </div>
        </div>
    </div>
 </nav>