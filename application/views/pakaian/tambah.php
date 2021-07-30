<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Barang
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<div class="form-group">
							<label for="barang_id">ID Barang</label>
							<input type="text" name="barang_id" class="form-control" id="barang_id">
							<small class="form-text text-danger"><?= form_error('barang_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama_barang">Nama Barang</label>
							<input type="text" name="nama_barang" class="form-control" id="nama_barang">
							<small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga_barang">Harga Barang Satuan</label>
							<input type="text" name="harga_barang" class="form-control" id="harga_barang">
							<small class="form-text text-danger"><?= form_error('harga_barang'); ?></small>
						</div>
						<div class="form-group">
							<label for="stok">Stok Barang</label>
							<input type="number" name="stok" class="form-control" id="stok">
							<small class="form-text text-danger"><?= form_error('stok'); ?></small>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<select class="form-control" id="keterangan" name="keterangan">
								<option value="OK">OK</option>
								<option value="NO">NO</option>
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
