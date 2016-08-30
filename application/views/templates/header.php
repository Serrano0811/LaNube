<header>

	<nav class="navbar navbar-inverse navbar-static-top"> <!-- INICIO DE NAVBAR -->
		<div class="container-fluid">	<!-- DIV ./container-fluid -->

			<!-- HEADER DEL NAVBAR SIN EL, NO SE MUESTRAN LOS ELEMENTOS-->
			<div class="navbar-header">
				<!-- BOTON PARA COLAPSAR EL NAVBAR -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barrita-top" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
			</div>
    	

			<div class="collapse navbar-collapse" id="barrita-top">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#">Tel: .$tel. | Mail: .$email</a></LI>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><strong class="primary">Libero</strong></a></li>
			    	<li role="separator" class="divider"><a href="#">|</a></li>
			    	<li><a href="#"><strong class="primary">Maecenas</strong></a></li>
			    	<li role="separator" class="divider"><a href="#">|</a></li>
			    	<li><a href="#"><strong class="primary">Mauris</strong></a></li>
			    	<li role="separator" class="divider"><a href="#">|</a></li>
			    	<li><a href="#"><strong class="primary">Suspendisse</strong></a></li>
				</ul>
			</div>

		</div>
	</nav>

	<!-- TITULO NEWS MAGAZINE -->
	<div class = "container">
		<h1>
			<strong class="text-primary">N</strong><span class="text-muted">ews </span>
			<strong class="text-primary">M</strong><span class="text-muted">agazine</span>
		</h1>
		<p>
			<?php echo $subtitulo;?>
		</p>
	</div>
</header>

