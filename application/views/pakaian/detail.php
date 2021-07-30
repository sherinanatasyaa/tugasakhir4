<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Data Barang
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $pakaian['nama_barang']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Barang : <?= $pakaian['barang_id']; ?></h6>
					<p class="card-text">Harga Barang : <?= $pakaian['harga_barang']; ?></p>
					<p class="card-text"> Stok : <?= $pakaian['stok']; ?></p>
					<p class="card-text">Keterangan : <?= $pakaian['keterangan']; ?></p>
					<a href="<?= base_url();?>pakaian" class="btn btn-primary">Kembali</a>
				</div>
			</div>



		</div>
	</div>
</div>
