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


<table id="datatable-buttons" border="1" width="76%" class="table table-striped table-bordered">
  
  <thead>
    <tr>
      <th>No</th>
      <th>Siswa</th>
      <th>Jumlah</th>
      <th>Denda</th>
      <th>Keterangan</th>
      <th>Status</th>
      <th>Tanggal</th>
      <th>Deadline</th>
    </tr>
  </thead>


  <tbody>
  <?php
$no = 1;
$totalNilai = 0;
$totalDenda = 0; 
foreach ($duar as $gas) {
?>
  <tr>
    <th><?php echo $no++ ?></th>
    <td><?php echo $gas->nama_siswa ?></td>
    <td><?php echo $gas->jumlah ?></td>
    <td><?php echo $gas->denda ?></td>
    <td><?php echo $gas->keterangan ?></td>
    <td><?php echo $gas->status ?></td>
    <td><?php echo $gas->tanggal ?></td>
    <td><?php echo $gas->deadline ?></td>
  </tr>
<?php
  $totalNilai += $gas->jumlah;
  $totalDenda += $gas->denda;
} ?>
<tr>
  <th colspan="2" style="text-align: right;">Total</th>
  <td><?php echo $totalNilai; ?></td>
  <td><?php echo $totalDenda; ?></td>
</tr>

  </tbody>
</table>
</div>

<script>
  window.print();
</script>