<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Penjualan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>penjualan/tambah" class="btn btn-primary">Tambah Data Penjualan</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Data Penjualan..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Penjualan</h3>
			<?php if( empty($penjualan) ) :?>
			<div class="alert alert-danger" role="alert">
				Data penjualan tidak ditemukan!
			</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $penjualan as $pj ) : ?>
				<li class="list-group-item"><?= $pj['tgl_penjualan'];?>
					<a href="<?= base_url(); ?>penjualan/hapus/<?= $pj['penjualan_id']; ?>" class="badge bg-danger"
						style="float:right" onclick="return confirm('Yakin?');">Hapus</a>
					<a href="<?= base_url(); ?>penjualan/edit/<?= $pj['penjualan_id']; ?>" class="badge bg-warning"
						style="float:right">Edit</a>
					<a href="<?= base_url(); ?>penjualan/detail/<?= $pj['penjualan_id']; ?>" class="badge bg-primary"
						style="float:right">Detail</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
