<?php
        if(session()->get('level')== 6){
          ?>

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
                <h3>Pengeluaran</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Pengeluaran</div>
              <a href="<?=base_url('/uangkas/Transaksi/tambah_pengeluaran/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Pengeluaran</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Siswa</th>
                        <th>Jumlah</th>
                        <th>Denda</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Deadline</th>
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
                                        <td><?php echo $b->nama_siswa?> </td>
                                        <td><?php echo $b->jumlah?> </td>
                                        <td><?php echo $b->denda?> </td>
                                        <td><?php echo $b->keterangan?> </td>
                                        <td><?php echo $b->status?> </td> 
                                        <td><?php echo $b->status2?> </td>       
                                        <td><?php echo $b->tanggal?> </td>
                                        <td><?php echo $b->deadline?> </td>                                      
                                        <td>
                                       
                                        <a href="<?=base_url('/uangkas/Transaksi/delete_pengeluaran/'.$b->id_pengeluaran)?>"><button class="btn btn-danger">Delete</button></a>    
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
        <?php
        }else if(session()->get('level')== 4 ||  session()->get('level')==5){
          ?>
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
        <h3>Pengeluaran</h3>
      </div>
      
    </div>
  </div>

  <!-- Basic Tables start -->
  <section class="section">
    <div class="card">
      <div class="card-header">Data Pengeluaran</div>
    
      <div class="card-body">
        <div class="table-responsive">
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Siswa</th>
                <th>Jumlah</th>
                <th>Denda</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Deadline</th>
               
              </tr>
            </thead>
            <tbody>
            <?php 
                        $no=1;
                        foreach ($a as $b) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $b->nama_siswa?> </td>
                                <td><?php echo $b->jumlah?> </td>
                                <td><?php echo $b->denda?> </td>
                                <td><?php echo $b->keterangan?> </td>
                                <td><?php echo $b->status?> </td> 
                                <td><?php echo $b->status2?> </td>       
                                <td><?php echo $b->tanggal?> </td>
                                <td><?php echo $b->deadline?> </td>                                      
                               
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
<?php
        }else if(session()->get('level')== 1 ||  session()->get('level')==2 ||  session()->get('level')==3){
          ?>
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
                <h3>Pengeluaran</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Pengeluaran</div>
              <a href="<?=base_url('/uangkas/Transaksi/tambah_pengeluaran/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Pengeluaran</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Siswa</th>
                        <th>Jumlah</th>
                        <th>Denda</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Deadline</th>
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
                                        <td><?php echo $b->nama_siswa?> </td>
                                        <td><?php echo $b->jumlah?> </td>
                                        <td><?php echo $b->denda?> </td>
                                        <td><?php echo $b->keterangan?> </td>
                                        <td><?php echo $b->status?> </td> 
                                        <td><?php echo $b->status2?> </td>       
                                        <td><?php echo $b->tanggal?> </td>
                                        <td><?php echo $b->deadline?> </td>                                      
                                        <td>
                                        <a href="<?=base_url('/uangkas/Transaksi/edit_pengeluaran/'.$b->id_pengeluaran)?>"><button class="btn btn-primary">Edit</button></a>    
                                        <a href="<?=base_url('/uangkas/Transaksi/delete_pengeluaran/'.$b->id_pengeluaran)?>"><button class="btn btn-danger">Delete</button></a>    
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
        <?php } ?>