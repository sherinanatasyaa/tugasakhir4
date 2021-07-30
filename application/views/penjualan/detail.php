<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Data Penjualan
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $penjualan['penjualan_id']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Customer : <?= $penjualan['cust_id']; ?></h6>
					<p class="card-text">Tanggal Transaksi : <?= $penjualan['tgl_penjualan']; ?></p>
					<p class="card-text">Keterangan : <?= $penjualan['keterangan']; ?></p>
					<a href="<?= base_url();?>penjualan" class="btn btn-primary">Kembali</a>
				</div>
			</div>



		</div>
	</div>
</div>
