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
		    			<a href="<?php echo base_url();?>"><button type="button" class="btn btn-primary">Voucher</button></a>
		    			<a href="<?php echo base_url();?>jasa"><button type="button" class="btn btn-primary">Order</button></a>
		    			<a href="<?php echo base_url();?>game"><button type="button" class="btn btn-primary">Game</button></a>
		    			<a href="<?php echo base_url();?>inquiry"><button type="button" class="btn btn-primary">Inquiry</button></a>
		  			</div>
					</div>
			</div>
		</div>

		<br>
		
		<?=form_open('inquiry', ['class'=>'form-horizontal'])?>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Nama Game</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="nama" placeholder="Nama">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Deskripsi Game</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
			  <button type="submit" class="btn btn-success">Submit</button>
			</div>
		  </div>
		</form>
	</body>
</html>
