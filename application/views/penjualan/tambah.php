<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Penjualan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<div class="form-group">
							<label for="penjualan_id">ID Penjualan</label>
							<input type="text" name="penjualan_id" class="form-control" id="penjualan_id">
							<small class="form-text text-danger"><?= form_error('penjualan_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="tgl_penjualan">Tanggal Penjualan</label>
							<input type="date" name="tgl_penjualan" class="form-control" id="tgl_penjualan"  value="<?= date('Y-m-d') ?>">
							<small class="form-text text-danger"><?= form_error('tgl_penjualan'); ?></small>
						</div>
						<div class="form-group">
							<label for="cust_id">ID Customer</label>
							<input type="text" name="cust_id" class="form-control" id="cust_id">
							<small class="form-text text-danger"><?= form_error('cust_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<select class="form-control" id="keterangan" name="keterangan">
								<option value="CASHLESS">CASHLESS</option>
								<option value="E-MONEY">E-MONEY</option>
							</select>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
