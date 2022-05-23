<?= $this->extend('admin/layout/template_admin') ; ?>
<?= $this->section('content') ; ?>

<?= view('admin/layout/sidebar') ; ?>

<div class="container">
    <div class="row">
        <div class="col-5 m-auto">
            <h3 style="margin-top:18%; margin-bottom:3%">Form Tambah Data Aduan</h3>
            <form action="/admin/save" method="post" >
                <?= csrf_field(); ?> 
                <!-- data hanya bisa dikirimkan melalui halaman ini. Ini salah satu fitur agar tidak mudah dibajak -->

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> " id="nama" autofocus value="<?= old('nama'); ?> ">
                    <div class="invalid-feedback" id="validationServer05Feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_aduan" class="col-sm-2 col-form-label">Jenis aduan</label>
                    <div class="col-sm-10">
                    <input type="text" name="jenis_aduan" class="form-control <?= ($validation->hasError('jenis_aduan')) ? 'is-invalid' : ''; ?>" id="jenis_aduan" autofocus value="<?= old('jenis_aduan'); ?> ">
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        <?= $validation->getError('jenis_aduan'); ?>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="aduan" class="col-sm-2 col-form-label">Aduan</label>
                    <div class="col-sm-10">
                    <input type="text" name="aduan" class="form-control <?= ($validation->hasError('aduan')) ? 'is-invalid' : ''; ?>" id="aduan" autofocus value="<?= old('aduan'); ?> ">
                    <div id="validationServer05Feedback" class="invalid-feedback">
                         <?= $validation->getError('aduan'); ?>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bukti" class="col-sm-2 col-form-label">Bukti</label>
                    <div class="col-sm-10">
                    <input type="text" name="bukti" class="form-control <?= ($validation->hasError('bukti')) ? 'is-invalid' : ''; ?>" id="bukti" autofocus value="<?= old('bukti'); ?> ">
                    <div id="validationServer05Feedback" class="invalid-feedback">
                         <?= $validation->getError('bukti'); ?>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom:5%;">Tambah</button>
            </form>
        </div>
    </div>
</div>

<?= $this->Endsection('content') ; ?>