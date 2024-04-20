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
                <h3>Edit Pembayaran</h3>
              </div>
              
            </div>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('uangkas/Transaksi/aksi_edit_pembayaran')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $jojo->id_pembayaran?>">    
                    <div class="row">
                         
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="last-name-column">Siswa</label>
                              <select class="form-select" id="basicSelect" name="siswa" >
                              <?php
                                    foreach ($a as $b) {
                                        
                                        $selected = ($jojo->siswa == $b->id_siswa) ? "selected" : "";
                                        ?>
                                        <option value="<?= $b->id_siswa ?>" <?= $selected ?>>
                                            <?php echo $b->nama_siswa?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="city-column">Jumlah</label>
                              <input
                                type="number"
                                id="username"
                                class="form-control"
                                placeholder="Jumlah"
                                name="jumlah"  value="<?php echo $jojo->jumlah?>"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="country-floating">Denda</label>
                              <input
                                type="text"
                                id="nama_guru"
                                class="form-control"
                                name="denda" 
                                placeholder="Denda" value="<?php echo $jojo->denda?>"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column">Keterangan</label>
                              <input
                                type="text"
                                id="password"
                                class="form-control"
                                name="keterangan"
                                placeholder="Keterangan" value="<?php echo $jojo->keterangan?>"
                              />
                            </div>
                          </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Status</label>
                                 <select class="form-select" id="basicSelect"  name="status">
                                    <option value="Uang-Masuk" <?php echo ($jojo->status === 'Uang-Masuk') ? 'selected' : ''; ?>>Uang Masuk</option>
                                    <option value="Uang-Denda" <?php echo ($jojo->status === 'Uang-Denda') ? 'selected' : ''; ?>>Uang Denda</option>
                                    <option value="Uang-Kas" <?php echo ($jojo->status === 'Uang-Kas') ? 'selected' : ''; ?>>Uang Kas</option>
                                    <option value="Uang-Keluar" <?php echo ($jojo->status === 'Uang-Keluar') ? 'selected' : ''; ?>>Uang Keluar</option>
                                    <option value="Lunas" <?php echo ($jojo->status === 'Lunas') ? 'selected' : ''; ?>>Lunas</option>
                                    <option value="Belum-Lunas" <?php echo ($jojo->status === 'Belum-Lunas') ? 'selected' : ''; ?>>Belum Lunas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Status</label>
                                <select class="form-select" id="basicSelect"  name="status2">
                                    <option value="Lunas" <?php echo ($jojo->status2 === 'Lunas') ? 'selected' : ''; ?>>Lunas</option>
                                    <option value="Belum-Lunas" <?php echo ($jojo->status2 === 'Belum-Lunas') ? 'selected' : ''; ?>>Belum Lunas</option>
                                </select>
                            </div>
                        </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column">Tanggal</label>
                              <input
                                type="datetime-local"
                                class="form-control mb-3 flatpickr-no-config"
                                placeholder="Pilih Tanggal"
                                name="tanggal"
                                value="<?php echo date('Y-m-d\TH:i:s', strtotime($jojo->tanggal)); ?>"
                                />

                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Deadline</label>
                                <input
                                    type="datetime-local"
                                    class="form-control mb-3 flatpickr-no-config"
                                    placeholder="Pilih Deadline."
                                    name="deadline"
                                    value="<?php echo date('Y-m-d\TH:i:s', strtotime($jojo->deadline)); ?>"
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