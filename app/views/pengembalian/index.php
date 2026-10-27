<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Pengembalian
            </button>
            <br><br>
            <h3>Daftar Pengembalian Buku</h3>
            <ul class="list-group">
                <?php foreach($data['kembali'] as $kmb): ?>
                    <li class="list-group-item">
                        <?php echo $kmb['Kd_Kembali047']; ?> - <?php echo $kmb['NmMhs047']; ?> (<?php echo $kmb['NmBuku047']; ?>)
                        <a href="<?php echo BASEURL; ?>/pengembalian/hapus/<?php echo $kmb['Kd_Kembali047']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/detail/<?php echo $kmb['Kd_Kembali047']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Form Tambah Data -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Pengembalian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/pengembalian/tambah" method="post">
            <div class="form-group">
                <label for="Kd_Kembali047">Kode Kembali</label>
                <input type="text" class="form-control" id="Kd_Kembali047" name="Kd_Kembali047" required>
            </div>
            <div class="form-group">
                <label for="NimMhs047">NIM Mahasiswa</label>
                <input type="text" class="form-control" id="NimMhs047" name="NimMhs047" required>
            </div>
            <div class="form-group">
                <label for="NmMhs047">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="NmMhs047" name="NmMhs047" required>
            </div>
            <div class="form-group">
                <label for="NmBuku047">Nama Buku</label>
                <input type="text" class="form-control" id="NmBuku047" name="NmBuku047" required>
            </div>
            <div class="form-group">
                <label for="JumBuku047">Jumlah Buku</label>
                <input type="number" class="form-control" id="JumBuku047" name="JumBuku047" required>
            </div>
            <div class="form-group">
                <label for="TglKembali047">Tanggal Kembali</label>
                <input type="date" class="form-control" id="TglKembali047" name="TglKembali047" required>
            </div>
            <div class="form-group">
                <label for="Denda047">Denda (Rp)</label>
                <input type="number" class="form-control" id="Denda047" name="Denda047" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>