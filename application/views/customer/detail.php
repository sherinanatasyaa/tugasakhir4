<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Data Customer
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $customer['nama_cust']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Cust : <?= $customer['cust_id']; ?></h6>
					<p class="card-text">Nomor Telp : <?= $customer['no_telp']; ?></p>
					<p class="card-text"> Alamat : <?= $customer['alamat']; ?></p>
					<p class="card-text">Keterangan : <?= $customer['keterangan']; ?></p>
					<a href="<?= base_url();?>customer" class="btn btn-primary">Kembali</a>
				</div>
			</div>



		</div>
	</div>
</div>
