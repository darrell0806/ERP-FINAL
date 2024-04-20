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
                <h3>Tambah Guru</h3>
              </div>
              
            </div>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('User/aksi_tambah_guru')?>" method="post" enctype="multipart/form-data">
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
                              <label for="last-name-column">NIK</label>
                              <input
                                type="text"
                                id="nik"
                                class="form-control"
                                placeholder="NIK"
                                name="nik"
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
                              <label for="country-floating">Nama Guru</label>
                              <input
                                type="text"
                                id="nama_guru"
                                class="form-control"
                                name="nama_guru"
                                placeholder="Nama Guru"
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
                              <label for="email-id-column">No Hp</label>
                              <input
                                type="text"
                                id="nohp"
                                class="form-control"
                                name="nohp"
                                placeholder="No Hp"
                              />
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