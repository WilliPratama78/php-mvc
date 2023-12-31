<div class="container">

    <div class="row mt-3">
        <div class="col-lg-6">
            <?=Flasher::flashCrud() ?>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3 mb-3">
        <div class="col-lg-6">


            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs["nama"]; ?>
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"] ?>" class="badge text-bg-warning text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id=<?= $mhs["id"] ?>>Edit</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"] ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>


        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="number" class="form-control" id="nrp" name="nrp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option>- Select Option -</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>