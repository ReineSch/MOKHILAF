<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mokhilaf</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>

		<div style="text-align:center;">
			<div class="row">
					<div class="col-md-12">
						<div class="btn-group align-items-center">
							<button type="button" class="btn btn-primary">Order</button>
							<button type="button" class="btn btn-primary">Voucher</button>
							<button type="button" class="btn btn-primary">Game</button>
							<button type="button" class="btn btn-primary">Inquiry</button>
						</div>
					</div>
			</div>
		</div>

<br>

		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Jumlah</th>
					<th>Price</th>
					<th>Subtotal</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i=0;
					foreach ($this->cart->contents() as $items) :
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['qty'] ?></td>
					<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="4">Total </td>
					<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>

	</body>
</html>
