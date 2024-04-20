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
                <h3>Uang Kas</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Uang Kas</div>
              <a href="<?=base_url('/uangkas/Transaksi/tambah_uang/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Uang Kas</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Uang Kas</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b->uang_kas?> </td>
                                        <td>
                                        <a href="<?=base_url('/uangkas/Transaksi/edit_uang/'.$b->id_uang)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/uangkas/Transaksi/delete_uang/'.$b->id_uang)?>"><button class="btn btn-danger">Delete</button></a>    
                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>