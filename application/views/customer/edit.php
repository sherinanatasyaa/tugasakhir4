<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Customer
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<input type="hidden" name="cust_id" value="<?= $customer['cust_id'];?>">
						<div class="form-group">
							<label for="cust_id">ID Customer</label>
							<input type="number" name="cust_id" class="form-control" id="cust_id"
								value="<?= $customer['cust_id']?>">
							<small class="form-text text-danger"><?= form_error('cust_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama_cust">Nama Customer</label>
							<input type="text" name="nama_cust" class="form-control" id="nama_cust"
								value="<?= $customer['nama_cust']?>">
							<small class="form-text text-danger"><?= form_error('nama_cust'); ?></small>
						</div>
						<div class="form-group">
							<label for="no_telp">Nomor Telp</label>
							<input type="number" name="no_telp" class="form-control" id="no_telp"
								value="<?= $customer['no_telp']?>">
							<small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat Customer</label>
							<input type="text" name="alamat" class="form-control" id="alamat"
								value="<?= $customer['alamat']?>">
							<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<select class="form-control" id="keterangan" name="keterangan">
								<?php foreach($keterangan as $kt) : ?>
								<?php if($kt == $customer['keterangan']) : ?>
								<option value="<?= $kt; ?>" selected><?= $kt; ?></option>
								<?php else : ?>
									<option value="<?= $kt; ?>"><?= $kt; ?></option>
								<?php endif;?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="edit" class="btn btn-primary" style="float:right">Edit Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
