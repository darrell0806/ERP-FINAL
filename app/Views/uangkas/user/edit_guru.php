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
                <h3>Edit Guru</h3>
              </div>
              
            </div>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('/User/aksi_edit_guru/?')?>"method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $rizkan->id_user ?>">
          <input type="hidden" name="id2" value="<?php echo $jojo->user ?>">

                        <div class="row">
                        <?php if (!empty($rizkan->foto)): ?>
                            <div class="mt-3">
                                <label>Foto Lama</label>
                                <br>
                                <img src="<?= base_url('images/' . $rizkan->foto) ?>" class="img-fluid rounded" width="100">
                            </div>
                        <?php endif; ?>
                        <br>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="first-name-column">Foto  Baru</label>
                              <input type="file" class="form-control" placeholder="Foto" name="foto" id="foto" onchange="previewImage()">
                            <img id="preview" src="" alt="" style="max-width: 100px; margin-top: 10px;">
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
                                name="nik"  value="<?php echo $jojo->nik?>"
                              />
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
                                name="nama"  value="<?php echo $rizkan->nama?>"
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
                                name="username"  value="<?php echo $rizkan->username?>"
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
                                placeholder="Nama Guru" value="<?php echo $jojo->nama_guru?>"
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
                                placeholder="No Hp" value="<?php echo $jojo->nohp?>"
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