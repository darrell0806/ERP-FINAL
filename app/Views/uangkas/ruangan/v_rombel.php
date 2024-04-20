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
                <h3>Rombel</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Rombel</div>
              <a href="<?=base_url('/Ruangan/tambah_rombel/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Rombel</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Rombel</th>
                        <th>Guru</th>
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
                                        <td><?php echo $b->nama_rombel?> </td>
                                        <td><?php echo $b->nama_guru?> </td>
                                        <td>
                                        <a href="<?=base_url('/Ruangan/edit_rombel/'.$b->id_rombel)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/Ruangan/delete_rombel/'.$b->id_rombel)?>"><button class="btn btn-danger">Delete</button></a>    
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