<body>
<div class ="container mt-3">
        <div class="row">
            <div class="col-6">
                <?php Flasher::flashh();?>
                <h3 class="mt-4">Data Guru</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data Guru
                </button>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $no = 1;
                        ?>
                        <?php foreach ($data['blog'] as $blog) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $blog['nama_guru']; ?></td>
                                <td>
                                    <span><a href="<?= Base_URL; ?>/blog/hapus/<?= $blog['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');">hapus</a></span>
                                    <span><a href="<?= Base_URL; ?>/blog/ubah/<?= $blog['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $blog['id']; ?>">ubah</a></span>
                                    <span><a href="<?= Base_URL; ?>/blog/detail/<?= $blog['id']; ?>" class="badge badge-primary ">detail</a></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= Base_URL; ?>/blog/tambah" method="POST">
                <input type="hidden" name="id" id="id">

            <div class="form-group">
                <label for="nama">Kode Guru</label>
                <input type="text" class="form-control" id="kode_guru" name="kode_guru">
            </div>

            <div class="form-group">
                <label for="nama">Nama guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru">
            </div>
            <div class="form-group">
                <label for="matpel">Matpel</label>
                <select class="form-control" id="matpel" name="matpel">
                <option value="Matematika">Matematika</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Bahasa Jepang">Bahasa Jepang</option>
                <option value="Bahasa Inggris">Bahasa Inggris</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                <option value="Pemrograman Web dan Perangkat Bergerak">Pemrograman Web dan Perangkat Bergerak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Golongan Guru">Golongan guru</label>
                <select class="form-control" id="prod_noprod" name="prod_noprod">
                <option value="Produktif">Produktif</option>
                <option value="Non Produktif">Non Produktif</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>


    <!-- <div class ="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Data Guru</h3>
                <?php foreach ($data['blog'] as $blog) : ?>
                    <ul>
                        <li><?= $blog['kode_guru']; ?></li>
                        <li><?= $blog['nama_guru']; ?></li>
                        <li><?= $blog['matpel']; ?></li>
                        <li><?= $blog['prod_noprod']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div> -->
</body>