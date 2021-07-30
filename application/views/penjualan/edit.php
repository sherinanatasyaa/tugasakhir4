<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Penjualan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<input type="hidden" name="penjualan_id" value="<?= $penjualan['penjualan_id'];?>">
						<div class="form-group">
							<label for="penjualan_id">ID Penjualan</label>
							<input type="text" name="penjualan_id" class="form-control" id="penjualan_id"
								value="<?= $penjualan['penjualan_id']?>">
							<small class="form-text text-danger"><?= form_error('penjualan_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="tgl_penjualan">Tanggal Penjualan</label>
							<input type="date" name="tgl_penjualan" class="form-control" id="tgl_penjualan"
								value="<?= $penjualan['tgl_penjualan']?>">
							<small class="form-text text-danger"><?= form_error('tgl_penjualan'); ?></small>
						</div>
						<div class="form-group">
							<label for="cust_id">ID Customer</label>
							<input type="text" name="cust_id" class="form-control" id="cust_id"
								value="<?= $penjualan['cust_id']?>">
							<small class="form-text text-danger"><?= form_error('cust_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<select class="form-control" id="keterangan" name="keterangan">
								<?php foreach($keterangan as $kt) : ?>
								<?php if($kt == $penjualan['keterangan']) : ?>
								<option value="<?= $kt; ?>" selected><?= $kt; ?></option>
								<?php else : ?>
									<option value="<?= $kt; ?>"><?= $kt; ?></option>
								<?php endif;?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="edit" class="btn btn-primary" style="float:right">Edit
									Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
