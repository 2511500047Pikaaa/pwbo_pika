<div class="container mt-5">
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data['kembali']['Kd_Kembali047']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['kembali']['NmMhs047']; ?> (<?php echo $data['kembali']['NimMhs047']; ?>)</h6>
        <p class="card-text"><strong>Nama Buku:</strong> <?php echo $data['kembali']['NmBuku047']; ?></p>
        <p class="card-text"><strong>Jumlah Buku:</strong> <?php echo $data['kembali']['JumBuku047']; ?></p>
        <p class="card-text"><strong>Tanggal Kembali:</strong> <?php echo $data['kembali']['TglKembali047']; ?></p>
        <p class="card-text"><strong>Denda:</strong> Rp. <?php echo number_format($data['kembali']['Denda047']); ?></p>
        <a href="<?php echo BASEURL; ?>/pengembalian" class="card-link">Kembali</a>
      </div>
    </div>
</div>