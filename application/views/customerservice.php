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

		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<?=form_open('login', ['class'=>'form-horizontal'])?>
		  <div class="form-group">
			<label for="inputKeluhan3" class="col-sm-2 control-label">Subyek Keluhan</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="keluhanSubyek">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputDetail3" class="col-sm-2 control-label">Detail Keluhan</label>
			<div class="col-sm-6">
			  <input type="text" class="form-control" name="keluhanDetail">
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary">Kirim</button>
			</div>
		  </div>
		</form>

	</body>
</html>
