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
                <h3>Siswa</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Siswa</div>
              <a href="<?=base_url('/User/tambah_Siswa/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Siswa</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Rombel</th>
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
                                        <td><?php echo $b->nis?> </td>
                                        <td><?php echo $b->nama?> </td>
                                        <td><?php echo $b->nama_kelas?> </td>
                                        <td><?php echo $b->nama_jurusan?> </td>
                                        <td><?php echo $b->nama_rombel?> </td>
                                        <td>
                                        <a href="<?=base_url('/User/edit_siswa/'.$b->user)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/User/delete_siswa/'.$b->user)?>"><button class="btn btn-danger">Delete</button></a>    
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