<div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Siswa</h3>
              </div>
              
            </div>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('User/aksi_tambah_siswa')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="first-name-column">Foto</label>
                              <input type="file" class="form-control" placeholder="Foto" name="foto" id="foto" onchange="previewImage()">
                            <img id="preview" src="" alt="" style="max-width: 100px; margin-top: 10px;">
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="city-column">Nama</label>
                              <input
                                type="text"
                                id="username"
                                class="form-control"
                                placeholder="Nama"
                                name="nama"
                              />
                            </div>
                          </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="city-column">Username</label>
                              <input
                                type="text"
                                id="username"
                                class="form-control"
                                placeholder="Username"
                                name="username"
                              />
                            </div>
                          </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column">Password</label>
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="Password"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="last-name-column">NIS</label>
                              <input
                                type="text"
                                id="nik"
                                class="form-control"
                                placeholder="NIS"
                                name="nis"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="city-column">Nama Siswa</label>
                              <input
                                type="text"
                                id="username"
                                class="form-control"
                                placeholder="Nama"
                                name="nama"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="country-floating">Kelas</label>
                              <select class="form-select" id="basicSelect" name="kelas" >
                                            <option>-PILIH-</option>
                                            <?php
                                             foreach ($a as $b) {
                                                 ?>
                                                 <option value ="<?= $b->id_kelas?>"><?php echo $b->nama_kelas?>
                                                </option>
                                                <?php } ?>
                                            </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column">Jurusan</label>
                              <select class="form-select" id="basicSelect" name="jurusan" >
                                            <option>-PILIH-</option>
                                            <?php
                                             foreach ($c as $d) {
                                                 ?>
                                                 <option value ="<?= $d->id_jurusan?>"><?php echo $d->nama_jurusan?>
                                                </option>
                                                <?php } ?>
                                            </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="email-id-column">Rombel</label>
                              <select class="form-select" id="basicSelect" name="rombel" >
                                            <option>-PILIH-</option>
                                            <?php
                                             foreach ($e as $f) {
                                                 ?>
                                                 <option value ="<?= $f->id_rombel?>"><?php echo $f->nama_rombel?>
                                                </option>
                                                <?php } ?>
                                            </select>
                            </div>
                          </div>
                     
                          
                          <div class="col-12 d-flex justify-content-end">
                            <button
                              type="submit"
                              class="btn btn-primary me-1 mb-1"
                            >
                              Submit
                            </button>
                            <button
                              type="reset"
                              class="btn btn-light-secondary me-1 mb-1"
                            >
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div>
          <script>
function previewImage() {
  var preview = document.querySelector('#preview');
  var file = document.querySelector('#foto').files[0];
  var reader = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
</script>