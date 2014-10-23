<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT HOME - Imoveis em Indaituba</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container-fluid">
		<header>
			<nav class="navbar">
				<ul class="flex">
					<li class="brand order-3"><a href="">IT HOME</a></li>
					<li class="order-1"><a href="">Comprar</a></li>
					<li class="order-2"><a href="">Alugar</a></li>
					<li class="order-4"><a href="">Anunciar</a></li>
					<li class="order-5"><a href="">Contato</a></li>
				</ul>
			</nav>
		</header>
		<article class="content">
			<section class="highlight">
				<!-- <img src="casa.jpg" alt="casa"> -->
				<div class="caption">
					<h1>Vila Nova, 320 - Indaiatuba</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellendus, eligendi, saepe quisquam vero assumenda ratione alias nesciunt est blanditiis laborum ad possimus. Totam, numquam corporis ratione illum reiciendis eligendi.</p>
					<button class="btn btn-default">Leia Mais</button>
				</div>
			</section>

		    <section class="search">
		      <form action="" class="form-inline" role="form">
		    	<div class="form-group"><label for=""></label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for=""></label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for=""></label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for=""></label><input type="text" class="form-control"></div>
		    	<button class="btn btn-default" type="submit">Pesquisar</button>
		      </form>
		    </section>

		    <section class="featured">
		    	<h3>Nossos Destaques</h3>
		    	<div class="row clearfix">
		    		<div class="col-md-3">
		    			<img src="<?php echo  get_stylesheet_directory_uri() . '/img/ap1.jpg'; ?>" alt="" class="img-responsive">
		    		</div>
			    	<div class="col-md-3">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/casa1.jpg'; ?>" alt="" class="img-responsive">
			    	</div>
			    	<div class="col-md-3">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/ap2.jpg'; ?>" alt="" class="img-responsive">
			    	</div>
			    	<div class="col-md-3">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/casa2.jpg'; ?>" alt="" class="img-responsive">
			    	</div>
		    	</div>
		    </section>
		</article>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>