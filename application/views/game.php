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
		    			<a href="<?php echo base_url();?>"><button type="button" class="btn btn-primary" >Voucher</button></a>
		    			<a href="<?php echo base_url();?>jasa"><button type="button" class="btn btn-primary">Order</button></a>
		    			<a href="<?php echo base_url();?>game"><button type="button" class="btn btn-primary">Game</button></a>
		    			<a href="<?php echo base_url();?>inquiry"><button type="button" class="btn btn-primary">Inquiry</button></a>
		  			</div>
					</div>
			</div>
		</div>

<br>

		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		<div class="col-md-9 col-sm-offset-1">
		  <?php foreach($games as $game) : ?>
			<div class="col-md-3">
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'uploads/' . $game->image,
				'style'		=> 'max-width: 100%; max-height:100%; height:100px'
			  ])?>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$game->name?></h3>
				<p><?=$game->description?></p>
			  </div>
			</div>
		  </div>
		  <?php endforeach; ?>
		</div>
		<!-- end looping -->
		</div>
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>