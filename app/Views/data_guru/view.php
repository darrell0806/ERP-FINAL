<div id="main-content">
	<div class="page-heading">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3><?=$title?></h3>
					<p class="text-subtitle text-muted">Anda dapat melihat <?=$title?> di bawah</p>
				</div>
				<div class="col-12 col-md-6 order-md-2 order-first">
					<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<?php if (session()->getFlashdata('error')) : ?>
		<div class="alert alert-danger alert-dismissible show fade">
			<?= session()->getFlashdata('error') ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<!-- Tampilkan pesan sukses jika ada -->
	<?php if (session()->getFlashdata('success')) : ?>
	<div class="alert alert-success alert-dismissible show fade">
		<?= session()->getFlashdata('success') ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>

<section class="section">
	<div class="card">
		<div class="card-header">
			<a href="<?php echo base_url('data_guru/tambah_guru/')?>"><button class="btn btn-primary mt-2"><i class="fa-solid fa-plus"></i>
			Tambah</button></a>
			
	</div>

	<!-- Modal Import -->

	<div class="modal fade text-left" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel1">
						Import Data
					</h5>
					<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>

				<form action="<?=base_url('data_guru/import_excel')?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<label class="mb-2">File Excel</label>
						<input type="file" name="file_excel" class="form-control" required>
					</div>
					<div class="modal-footer">
						<?php if (session()->get('level')==1) { ?>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
								<i class="bx bx-x d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Cancel</span>
							</button>
							<button type="submit" class="btn btn-primary ms-1">
								<i class="bx bx-check d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Upload</span>
							</button>
						<?php } ?>
					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- =================================================================================== -->

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped" id="table2">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Rombel</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
				$no=1;
				foreach ($a as $b) {
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $b->nik?> </td>
						<td><?php echo $b->nama?> </td>
						<td><?php echo $b->nama_kelas . '.' . $b->nama_r . ' - ' . $b->nama_jurusan ?></td>
						<td>
							<a href="<?php echo base_url('data_guru/edit_guru/'. $b->user)?>" class="btn btn-warning my-1"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>

							<a href="<?php echo base_url('data_guru/delete_guru/'. $b->user)?>" class="btn btn-danger my-1"><i class="fa-solid fa-trash"></i></a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#table2').DataTable({
		});
	});
</script>