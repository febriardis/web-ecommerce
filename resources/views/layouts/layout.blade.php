<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shabby Organizer</title>

		<!-- Global stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/core.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/components.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/colors.css" rel="stylesheet" type="text/css">
		<!-- /global stylesheets -->
		<link rel="stylesheet" type="text/css" href="/css/styleme.css">

		<!-- Core JS files -->
		<script type="text/javascript" src="/assets/js/plugins/loaders/pace.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
		<!-- /core JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/plugins/ui/prism.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/app.js"></script>
		<!-- /theme JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/selects/select2.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/form_select2.js"></script>
		<!-- /theme JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/uploader_bootstrap.js"></script>
		<!-- /theme JS files -->

		<script>
			function btKurang() {
				n = 0;
				n1 = eval(document.getElementById('jumlah').value);
				if (n1>1) {
					n = n1-1;
					document.getElementById('jumlah').value = n;
				}
			}
			function btTambah() {
				n = 0;
				n1 = eval(document.getElementById('jumlah').value);
				n = n1+1;
				document.getElementById('jumlah').value = n;
			}
		</script>
	</head>

	<body>	
	<!-- Default navbar -->
	<div class="navbar navbar-default navbar-component" style="border:none; padding: 15px">
		<div class="navbar-header">
			<a class="navbar-brand" href="">
				<img src="assets/images/logo.jpg" class="logoSO" alt="">
				<img src="assets/images/logo_dark.png" alt="">
			</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-demo1"><i class="icon-grid3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-demo1">
			<ul class="nav navbar-nav">
				<li><a href="/" class="text-info">Beranda</a></li>
				<li><a href="/products" class="text-info">Belanja</a></li>
				<li><a href="" class="text-info">Panduan</a></li>
				<li> <a href="/belanjaanku" class="text-info">Belanjaanku</a></li>
				<li><a href="#" class="text-info">Kontak</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<form class="form-search">
						<input type="text" name="q" class="in-search" autocomplete="true" placeholder="Search here..">	
						<button type="submit" style="outline: none; " class="btn-search"><i class="glyphicon glyphicon-search"></i></button>
						<div class="clear"></div>
					</form>
				</li>
				@guest
				<li>
					<a href="/cart">
						<i class="icon-cart text-info"></i>
						<span class="visible-xs-inline-block position-right text-info">Keranjang</span>
						<span class="badge bg-warning-400">2</span>
					</a>
				</li>
				<li><a href="/login" class="text-info">Login</a></li>
				@else
				<li><a href="" class="text-info">username</a></li>
				<li><a href="/cart">
						<i class="icon-cart text-info"></i>
						<span class="visible-xs-inline-block position-right text-info">Keranjang</span>
						<span class="badge bg-warning-400">2</span>
					</a>
				</li>
				@endguest
			</ul>
		</div>
	</div>
	<!-- /default navbar -->

	<!-- content -->
	@yield('content')
	<!-- content -->

	<footer>
		<div class="center-footer">
			<div class="foot-element capitalize">
				<h6>shabby organizer</h6>
				<ul>
					<li><a href="">bantuan</a></li><br>
					<li><a href="">syarat & ketentuan</a></li><br>
					<li><a href="">tentang kami</a></li><br>
				</ul>
			</div>

			<div class="foot-element capitalize" >
				<h6>layanan pelanggan</h6>
				<ul>
					<li><a href="">panduan</a></li><br>
					<li><a href="">pembayaran</a></li><br>
					<li><a href="">Lacak Pesanan</a></li><br>
					<li><a href="">hubungi kami</a></li><br>
				</ul>
			</div>
			
			<div style="padding-top: 40px; float: right;">
				<div style="margin-left: 30px; float: left;">
					<img src="assets/images/logo_dark.png" alt="" style="float: left;width:220px; height:35px">
				</div>

				<div class="foot-element" style="margin-top: -10px; margin-left: 30px">
					<h6>Temukan kami di :</h6>
					<ul class="contact-us">
						<li><a href=""><img src="/assets/images/brands/facebook.png"></a></li>
						<li><a href=""><img src="/assets/images/brands/twitter.png"></a></li>
						<li><a href=""><img src="/assets/images/brands/insta.png"></a></li>
						<li><a href=""><img src="/assets/images/brands/whatsapp.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="copyright">
			<p class="text-muted">Copyright &copy; 2018 Granada projects.</p>
		</div>
	</footer>

	</body>
</html>