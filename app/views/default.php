<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/ayamjago.style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" />
	
</head>

<body>
	
	<div class="container ayamjago">
		<div class="AyamJago Framework">
			<span class="A and J"><text title="AyamJago">A<small>yam</small>J<small>ago</small></text>
			<p class="B o c a h S M K">Frameworknya bocah SMK</p>
			</span>
		</div>
		
		<div class="container">
			<h3>AyamJago Berhasil diinstall</h3>
			<hr/>
			
			<h4>View File dapat dicari dimari:</h4>
			<ayamjago-code><?php echo APP; ?>views/default.php</ayamjago-code>
			
			<h4>Controller File dapat dilihat dan diubah:</h4>
			<ayamjago-code><?php echo APP; ?>controllers/home.php</ayamjago-code>
			
			<h4>Base URL Lokasi Aplikasi:</h4>
			<ayamjago-code><?php echo base_url(); ?></ayamjago-code>
			
			<h4>Index file untuk Aplikasi:</h4>
			<ayamjago-code><?php echo index_site(); ?></ayamjago-code>
			
			<hr/>
			<created-by>Powered by AyamJago <span class="fa fa-chevron-right"></span> version <?php echo  AJ_VERSION; ?></created-by>
			
		</div>
	</div>
</body>
</html>