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
                <h3>Filter</h3>
              </div>
              
            </div>
          </div>
          <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Windows Print</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='masuk') {
                        echo base_url('uangkas/laporan_keluar/cari_msk'); 
                        }else if ($kunci=='keluar') {
                        echo base_url('uangkas/laporan_keluar/cari_klr');
                       }else if ($kunci=='denda') {
                        echo base_url('uangkas/laporan_keluar/cari_denda');
                      }else if ($kunci=='kas') {
                        echo base_url('uangkas/laporan_keluar/cari_kas');
                      }else if ($kunci=='lunas') {
                        echo base_url('uangkas/laporan_keluar/cari_lunas');
                        }else{
                        echo base_url('uangkas/laporan_keluar/cari_blunas');
                        }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
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
              <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PDF</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='masuk') {
                        echo base_url('uangkas/laporan_keluar/pdf_msk'); 
                        }else if ($kunci=='keluar') {
                        echo base_url('uangkas/laporan_keluar/pdf_klr');
                       }else if ($kunci=='denda') {
                        echo base_url('uangkas/laporan_keluar/pdf_denda');
                      }else if ($kunci=='kas') {
                        echo base_url('uangkas/laporan_keluar/pdf_kas');
                      }else if ($kunci=='lunas') {
                        echo base_url('uangkas/laporan_keluar/pdf_lunas');
                        }else{
                        echo base_url('uangkas/laporan_keluar/pdf_blunas');
                        }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
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
              <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Excel</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='masuk') {
                        echo base_url('uangkas/laporan_keluar/excel_msk'); 
                        }else if ($kunci=='keluar') {
                        echo base_url('uangkas/laporan_keluar/excel_klr');
                       }else if ($kunci=='denda') {
                        echo base_url('uangkas/laporan_keluar/excel_denda');
                      }else if ($kunci=='kas') {
                        echo base_url('uangkas/laporan_keluar/excel_kas');
                      }else if ($kunci=='lunas') {
                        echo base_url('uangkas/laporan_keluar/excel_lunas');
                        }else{
                        echo base_url('uangkas/laporan_keluar/excel_blunas');
                        }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
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
      