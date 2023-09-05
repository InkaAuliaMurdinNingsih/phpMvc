<div class="container mt-5">
    <div class="card" style="width: 18rem;">

        <div class="card">
        <h5 class="card-header">Data Guru</h5>
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['kode_guru']; ?></h5>
            <h6 class=" card-subtitle mb-2 text-muted"><?= $data['guru']['nama_guru']; ?></h6>
            <p class="card-text"><? $data['guru']['matpel']; ?></p>
            <h5 class="card-title"><?= $data['guru']['prod_noprod']; ?></h5>
            <a href=" <?=Base_URL; ?>/blog" class="card-link">Kembali</a>
    </div>
</div>
<!-- 
        <div class=" card-body">
            <h5 class="card-title"><?= $data['guru']['kode_guru']; ?></h5>
            <h6 class=" card-subtitle mb-2 text-muted"><?= $data['guru']['nama_guru']; ?></h6>
            <p class="card-text"><? $data['guru']['matpel']; ?></p>
            <h5 class="card-title"><?= $data['guru']['prod_noprod']; ?></h5>
            <a href=" <?=Base_URL; ?>/blog" class="card-link">Kembali</a>
        </div>
    </div>
</div> -->