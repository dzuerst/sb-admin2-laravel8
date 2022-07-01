<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="mt-4 bg-white card-header py-3">
            <div class="row">
                <div class="col"><a href="<?php echo base_url() . 'petugas/datapengunjung' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>


                <div class="col">
                    <h4 style="color: black;" class="text-center">Tambah Pengunjung Baru</h4>
                </div>



                <div class="col"></div>
            </div>
        </div>

        <div class="card-body">
            <?php
            if (isset($_GET['alert'])) {
                if ($_GET['alert'] == "berhasil") {
                    echo "<div class='alert alert-success font-weight-bold text-center'>Terima kasih telah mengisi data pengunjung!</div>";
                } else {
                    echo "<div class='alert alert-danger font-weight-bold text-center'>Harap mengisi data dengan benar!</div>";
                }
            }
            ?>

            <!-- validasi error -->
            <?php echo validation_errors(); ?>

            <form method="post" action="<?php echo base_url() . 'petugas/pengunjung_tambah_aksi'; ?>">
                <div class="mt-3 form-group">
                    <label for="username">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama lengkap">
                </div>
                <div class="mt-3 form-group">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" class="form-control" placeholder="Kelas">
                </div>
                <div class="mt-3 form-group">
                    <label for="kelas">Kegiatan</label>
                    <input name="kegiatan" type="text" class="form-control" placeholder="Kegiatan">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="mt-3 btn btn-primary btn-block">Kirim</button>
                </div>


            </form>

        </div>


    </div>


</div>