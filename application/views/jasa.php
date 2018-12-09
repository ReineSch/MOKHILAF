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
		
		<?=form_open('jasa', ['class'=>'form-horizontal'])?>
		  <div class="form-group">
		  	<label class="col-sm-2 control-label">Jenis Jasa</label>
		  	<div class="col-sm-4">
			  <select name="jenis">
                <option>--Pilih--
                <option value="1">[FGO] $19.99
				<option value="2">[FGO] $9.99
				<option value="3">[AL] $19.99
				<option value="4">[AL] $9.99
              </select>
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Harga Jasa</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="harga" placeholder="Harga" value="Rp 250.000" readonly="true">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Username Game</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="bindcode" placeholder="Bindcode">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Password Game</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="pass" placeholder="Pass">
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
