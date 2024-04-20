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
                <h3>Tambah Pengeluaran</h3>
              </div>
              
            </div>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('uangkas/Transaksi/aksi_tambah_pengeluaran')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                         
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="last-name-column">Siswa</label>
                              <select class="form-select" id="basicSelect" name="siswa" >
                                            <option>-PILIH-</option>
                                            <?php
                                             foreach ($a as $b) {
                                                 ?>
                                                 <option value ="<?= $b->id_siswa?>"><?php echo $b->nama_siswa?>
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
                                name="jumlah"
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
                                placeholder="Denda"
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
                                placeholder="Keterangan"
                              />
                            </div>
                          </div>
                           <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="email-id-column">Status</label>
                               <select class="form-select" id="basicSelect"  name="status" >
                                <option>-PILIH-</option>
                                  <option value="Uang-Masuk">Uang Masuk</option>
                                     <option value="Uang-Denda">Uang Denda</option>
                                     <option value="Uang-Kas">Uang Kas</option>
                                     <option value="Uang-Keluar">Uang Keluar</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="email-id-column">Status</label>
                               <select class="form-select" id="basicSelect"  name="status2" >
                                <option>-PILIH-</option>
                                  <option value="Lunas">Lunas</option>
                                     <option value="Belum-Lunas">Belum-Lunas</option>
                                </select>
                            </div>
                          </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group">
                                <label for="company-column">Tanggal</label>
                                <input
                        type="date"
                        class="form-control mb-3 flatpickr-no-config"
                        placeholder="Pilih Tanggal" name="tanggal"/>
                              </div>
                            </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column">Deadline</label>
                              <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Deadline." name="deadline"/>
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