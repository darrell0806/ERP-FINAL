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
                <h3>Set Bendahara</h3>
              </div>
              
            </div>
          </div>
          <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                        
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('uangkas/User/aksi_bendahara')?>" method="post" enctype="multipart/form-data">
                  
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Bendahara</label
                              >
                            </div>
                                <div class="col-md-8 form-group">
                                <select class="form-select" id="basicSelect" name="bendahara" >
                                                <option>-PILIH-</option>
                                                <?php
                                                foreach ($a as $b) {
                                                    ?>
                                                    <option value ="<?= $b->id_siswa?>"><?php echo $b->nama_siswa?>
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
      