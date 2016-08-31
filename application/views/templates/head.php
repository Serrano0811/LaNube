<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title><?php echo $titulo;?></title>
			<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bootstrap/css/bootstrap-theme.min.css">
			<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bootstrap/css/estilo_personal.css">
		</head>
		<body>

		<!--script type="text/javascript">
		$(document).ready(function(){
		    $('li.dropdown a.dropdown-toggle').hover(function() {
		      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
		    }, function() {
		      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
		    });  
		});
		</script-->

		<script type="text/javascript">
			$('prueba').one("mouseenter", function() {
				$('JQdropdown').fadeIn(1000);
			});
		</script>