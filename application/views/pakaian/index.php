<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data pakaian <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>pakaian/tambah" class="btn btn-primary">Tambah Data Barang</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Pakaian</h3>
			<?php if( empty($pakaian) ) :?>
			<div class="alert alert-danger" role="alert">
				Data barang tidak ditemukan!
			</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $pakaian as $pk ) : ?>
				<li class="list-group-item"><?= $pk['nama_barang'];?>
					<a href="<?= base_url(); ?>pakaian/hapus/<?= $pk['barang_id']; ?>" class="badge bg-danger"
						style="float:right" onclick="return confirm('Yakin?');">Hapus</a>
					<a href="<?= base_url(); ?>pakaian/edit/<?= $pk['barang_id']; ?>" class="badge bg-warning"
						style="float:right">Edit</a>
					<a href="<?= base_url(); ?>pakaian/detail/<?= $pk['barang_id']; ?>" class="badge bg-primary"
						style="float:right">Detail</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
