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
                <h3>Edit Rombel</h3>
              </div>
              
            </div>
          </div>
          <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('Ruangan/aksi_edit_rombel')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $jojo->id_rombel?>">    
                    <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Nama Rombel</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                              <input
                                type="text"
                                id="first-name-horizontal"
                                class="form-control"
                                name="nama_rombel"
                                placeholder="Nama Rombel" value="<?php echo $jojo->nama_rombel?>"
                              />
                            </div>
                            <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal">
                                Guru</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <select class="form-select" id="basicSelect" name="guru" >
                              <?php
                                foreach ($g as $h) {
                                    $selected = ($jojo->guru == $h->id_guru) ? "selected" : "";
                                    ?>
                                    <option value="<?= $h->id_guru ?>" <?= $selected ?>>
                                        <?php echo $h->nama_guru ?>
                                    </option>
                                <?php } ?>
                                            </select>
                            </div>
                          
                            <div class="col-sm-12 d-flex justify-content-end">
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
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
      