<?= $this->extend('admin/layout/template_admin'); ?>
<?= $this->section('content'); ?>

<?= view('admin/layout/sidebar') ; ?>
  <main id="main" class="main">

    <div class="pagetitle pb-3">
      <h1>Data Aduan Masuk</h1>
      <?php if(session()->getFlashdata('pesan')) { ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
       <?php }; ?>
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
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Aduan</th>                    
                    <th scope="col">Bukti</th>                    
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  <?php foreach($aduan as $ad) { ?>
                  <tr>
                    <th scope="row"> <?= $i++; ?> </th>
                    <td> <?= $ad['nama']; ?> </td>
                    <td> <?= $ad['jenis_aduan']; ?> </td>
                    <td> <?= $ad['aduan']; ?> </td>
                    <td> <?= $ad['bukti']; ?> </td>
                    <td>
                      <form action="/admin/<?= $ad['id'];?>" method="post">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                                              
                      </form>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="" class="btn btn-primary">Cetak</a>
              <a href="/admin/create" class="btn btn-success">Tambah</a>
              <!-- End Bordered Table -->

              

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?= $this->Endsection('content') ; ?>

  