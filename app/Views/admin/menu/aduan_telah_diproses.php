<?= $this->extend('admin/layout/template_admin'); ?>
<?= $this->section('content'); ?>

<?= view('admin/layout/sidebar') ; ?>
  <main id="main" class="main">

    <div class="pagetitle pb-3">
      <h1>Data Aduan Masuk</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg">     
        </div>     
    

          <div class="card justify-content-center pt-2">
            <div class="card-body pt-4">
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Kadaluarsa</th>
                    <th scope="col">Jumlah (pcs)</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>2016-05-25</td>
                    <td>2016-05-25</td>
                    <td>2016-05-25</td>
                    <td>
                        <a href="edit_obat_masuk.php" title="edit"
                              ><i class="bi bi-pencil-fill text-primary"></i
                            ></a>
                        <a href="" title="delete"
                              ><i class="bi bi-trash-fill text-danger"></i
                            ></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-success">Tambah</button>
              <button type="button" class="btn btn-primary">Cetak</button>
              <!-- End Bordered Table -->

              

            </div>
          </div>

         

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?= $this->Endsection('content') ; ?>

  