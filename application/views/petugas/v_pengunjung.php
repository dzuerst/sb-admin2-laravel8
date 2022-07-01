<div class="container">
  <div class="card">
    <div class="bg-white card-header py-3">
      <div class="mt-4 row">
        <div class="col"></div>
        <div class="col">
          <h1 class="h3 mb-2 text-gray-800 text-center">Data Pengunjung</h1>
        </div>
        <div class="col"></div>
      </div>
    </div>

    <div class="card-body">

      <?php
      if (isset($_GET['alert'])) {
        if ($_GET['alert'] == "berhasil") {
          echo "<div class='alert alert-success font-weight-bold text-center'>Berhasil menambahkan data pengunjung</div>";
        }
      }
      ?>

      <form method="get" action="">
        <div class="form-group">
          <div class="row">
            <div class="col"><label class="font-weight-bold" for="tgl_pinjam">Berdasarkan Bulan dan Tahun</label>
              <input type="month" class="form-control" name="tgl" placeholder="Masukkan tanggal peminjaman">
            </div>

            <div class="col align-self-end"><input type="submit" class="btn btn-primary mt-4" value="Cari"></div>

            <div class="col"></div>
            <div class="col"></div>
          </div>


        </div>
      </form>

      <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover table-datatable" id="dataTable">
          <thead>
            <tr>
              <th width="1%">No</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Tanggal</th>
              <th>Kegiatan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($pengunjung as $p) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $p->nama; ?></td>
                <td><?php echo $p->kelas; ?></td>
                <td><?php echo  date('d-m-Y', strtotime($p->tanggal_berkunjung)); ?></td>
                <td><?php echo $p->kegiatan; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>