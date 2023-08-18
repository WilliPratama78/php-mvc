<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL?>css/bootstrap.css">
    <title>Halaman <?= $data["judul"]?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
   
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto mb-2 mb-lg-0">
        <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
        <a class="nav-link" href="<?=BASEURL?>mahasiswa">Mahasiswa</a>
        <a class="nav-link" href="<?=BASEURL?>about">About</a>
      </div>
      <a class="navbar-text text-decoration-none" href="<?=BASEURL?>logout">
        Keluar
      </a>
    </div>
  </div>
</nav>