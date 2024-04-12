<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <ul class="nav navbar-right panel_toolbox">
        </li>
          </ul>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_fine_b')?>" method="post">
        <input type="hidden" name="id" value="<?= $duar->id_denda ?>">

        <div class="item form-group">
          <label class="control-label col-12" >Student Name<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="nama_denda" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="nama_denda" required="required" placeholder="Student Name" value="<?= $duar->nama_denda?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12">Class Name <span class="required"></span>
          </label>
          <div class="col-12">
            <select disabled name="id_kelas" class="form-control text-uppercase" id="id_kelas" required>
              <option class="text-uppercase" value="<?= $duar->id_kelas?>"><?= $duar->nama_kelas?></option>

              <?php 
              foreach ($ok as $kelas) {
              ?>

              <option class="text-uppercase" value="<?php echo $kelas->id_kelas ?>"><?php echo $kelas->nama_kelas ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nominal Fine<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="denda" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="denda" required="required" placeholder="Nominal Fine" value="<?= $duar->denda?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Transaction Type <span class="required"></span>
          </label>
          <div class="col-12">
            <select  id="jenis_transaksi" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="jenis_transaksi" required="required">
              <option value="<?= $duar->jenis_transaksi?>"><?= $duar->jenis_transaksi; ?></option>
             <option value="Cash">Cash</option>
              <option value="Debit">Debit</option>
              <option value="Transfer">Transfer</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Currency<span class="required"></span>
          </label>
          <div class="col-12">
            <select  id="mata_uang" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="mata_uang" required="required">
              <option value="<?= $duar->mata_uang?>"><?= $duar->mata_uang; ?></option>
             <option value="Singapore Dollar (SGD)">SGD</option>
              <option value="Brunei Dolar (BND)">BND</option>
              <option value="Malaysian Ringgits (MYR)">MYR</option>
              <option value="Baht Thailand (Baht)">Baht</option>
              <option value="Philippine Peso (PHP)">PHP</option>
              <option value="Myanmar Kyat (MMK)">MMK</option>
              <option value="Cambodian Riel (KHR)">KHR</option>
              <option value="Laotian Kip (KIP)">KIP</option>
              <option value="Rupiah (RP)">RP</option>
              <option value="Vietnamese Dong (VND)">VND</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nominal<span class="required"></span>
          </label>
          <div class="col-12">
            <input  type="text" id="nominal" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="nominal" required="required" placeholder="Enter the nominal according to the nominal fine!!" value="<?= $duar->nominal?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Remark<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="remark_denda" class="form-control col-12 text-capitalize" data-validate-length-range="6" data-validate-words="2" name="remark_denda" required="required" placeholder="Remark" value="<?= $duar->remark_denda?>">
          </div>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-12 col-md-offset-12">
          <a href="<?= base_url('/home/fine')?>" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
