<div align="center">


<style>
  #datatable-buttons {
    width: 76%;
    margin: auto;
    border-collapse: collapse;
    border: 1px solid black; 
  }

  #datatable-buttons th,
  #datatable-buttons td {
    padding: 8px;
    border: 1px solid black; 
  }

  #datatable-buttons th {
    background-color: white;
    color: black;
    text-align: center;
  }

  #datatable-buttons tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
  }

  #datatable-buttons tbody tr:hover {
    background-color: #ddd;
  }
</style>
<!-- View laporan pembayaran Excel -->
<div align="center">
  <h1>Laporan Pembayaran</h1>
  <table id="datatable-buttons" border="1" width="80%" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Pembayaran</th>
        <th>Tanggal</th>
        <th>Uang Masuk (In)</th>
        <th>Uang Keluar (Out)</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $totalIn = 0;
        $totalOut = 0;
        $totalKeseluruhan = 0; // Inisialisasi variabel total keseluruhan

        foreach ($duar as $gas) {
          // Menambahkan jumlah ke total sesuai dengan transaksi
          if ($gas->status === 'Uang-Masuk') {
            $totalIn += $gas->jumlah;
          } else if ($gas->status === 'Uang-Keluar') {
            $totalOut += $gas->jumlah;
          }

          // Menghitung total kumulatif berdasarkan transaksi terakhir
          $total = $totalIn - $totalOut;

          // Menambahkan nilai total dari setiap baris ke total keseluruhan
          $totalKeseluruhan += $total;
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $gas->keterangan ?></td>
        <td><?php echo $gas->tanggal ?></td>
        <td><?php echo ($gas->status === 'Uang-Masuk') ? $gas->jumlah : 0 ?></td>
        <td><?php echo ($gas->status === 'Uang-Keluar') ? $gas->jumlah : 0 ?></td>
        <td><?php echo $total; ?></td>
      </tr>
      <?php } ?>

      <!-- Menambahkan total keseluruhan setelah loop -->
      <tr>
        <th colspan="5" style="text-align: right;">Total Keseluruhan</th>
        <td><?php echo $totalKeseluruhan; ?></td>
      </tr>
    </tbody>
  </table>
</div>


<script>
  window.print();
</script>