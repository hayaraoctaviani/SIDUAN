<?= $this->extend('user/layout_user/template') ; ?>
<?= $this->section('content') ; ?>

  <!-- Home -->
     <div class="container-fluid" style="background-image: url('https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80'); height:500px; width:auto; background-size: cover;  background-repeat:no-repeat; background-position:center;">
       <div class="row">
         <div class="col-lg-12">
           <nav class="navbar fixed-top">
             <a href="#" class="navbar-brand fw-bold btn" style="margin-left:12%; color: #363062;">SIDUAN</a>
             <ul class="nav me-5 pe-5">
               <li class="nav-item pe-4 fw-bold">
                 <a href="#" class="nav-link" id="" style="color: #363062;">Home</a>
               </li>
               <li class="nav-item pe-4 fw-bold">
                 <a href="#pengaduan" class="nav-link" id="" style="color: #363062;">Pengaduan</a>
               </li>
               <li class="nav-item pe-4 fw-bold">
                 <a href="#tracking" class="nav-link" style="color: #363062;" id="">Tracking</a>
               </li>
             </ul>
           </nav>           
        </div>

   <!-- Home  -->
        <div class="container">
          <div class="row m-auto">
            <div class="col-md-3" style="margin-top: 15%; margin-left:40%;">
              <div class="div">
            <p style="text-align: center;">Sistem informasi pengaduan adalah sistem untuk melakukan aduan kepada aparat desa terkait kejahatan yang terjadi.</p>
          </div>
            </div>
          </div>          
        </div>
      </div>
     </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#363062" fill-opacity="1" d="M0,128L60,144C120,160,240,192,360,181.3C480,171,600,117,720,112C840,107,960,149,1080,165.3C1200,181,1320,171,1380,165.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>

<!-- End Home -->


<!-- Pengaduan -->
<div class="container">
    <div class="row">
        <div class="col-md-5 m-auto" style="padding-top:15%;">
            <h3 class="py-3 pb-3" style="text-align:center; margin-top:-5%;  color:#363062;" id="pengaduan">Pengaduan</h3>
            <?php if(session()->getFlashdata('pesan')) { ?>
              <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('pesan'); } ?>
              </div>
            <form action="/user/save" method="post">  
              <div class="form-group my-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">                
              </div>
              <div class="input-group my-3">
                <select class="form-select" name="jenis_aduan" id="nama" aria-label="Example select with button addon">
                  <option selected>Pilih...</option>
                  <option value="1">Perkelahian</option>
                  <option value="2">Pencurian</option>
                  <option value="3">Pembunuhan</option>
                  <option value="3">Lain-lain</option>
                </select>
              </div>     
              <div class="mb-3">
                <label for="aduan">Penjelasan secara ringkas</label>
                <textarea class="form-control" name="aduan" id="aduan" rows="3"></textarea>
              </div>   
              <div class="mb-3">
                <label for="bukti" >Bukti</label>
                <textarea class="form-control" name="bukti" id="bukti" rows="3"></textarea>
              </div>   
              <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary my-2 px-4 ">Kirim</button>

              </div>     
            </form>
          </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#363062" fill-opacity="1" d="M0,96L30,112C60,128,120,160,180,170.7C240,181,300,171,360,144C420,117,480,75,540,85.3C600,96,660,160,720,176C780,192,840,160,900,149.3C960,139,1020,149,1080,160C1140,171,1200,181,1260,160C1320,139,1380,85,1410,58.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>


<!-- End Pengaduan -->


<!-- Tracking -->
<div class="container" style="margin-top: 10%;">
    <div class="row">
        <div class="col-xl-4 m-auto">
            <h3 class="py-3" style="text-align:center; margin-top:-10% ;color:#363062;" id="tracking" >Tracking</h3>
            Masukkan kode tracking
            <form class="d-flex"  style="margin-bottom: 25%;">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary  " type="submit">Cari</button>
            </form>
        </div>
    </div>
</div>

<?= $this->Endsection('content') ; ?>