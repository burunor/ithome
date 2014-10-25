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
				<div class="caption pull-right col-xs-10 col-sm-4 col-lg-4">
					<h1>Vila Nova, 320 - Indaiatuba</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellendus, eligendi, saepe quisquam vero assumenda ratione alias nesciunt est blanditiis laborum ad possimus. Totam, numquam corporis ratione illum reiciendis eligendi.</p>
					<button class="btn btn-default btn-block">Leia Mais</button>
				</div>
			</section>

		    <section class="col-lg-9 col-md-9 col-sm-9 col-xs-12 featured">
		    	<h3>Lançamentos</h3>
		    	<div class="clearfix">
		    		<div class="col-sm-4 col-xs-12">
		    			<img src="<?php echo  get_stylesheet_directory_uri() . '/img/ap1.jpg'; ?>" alt="" class="img-responsive">
		    			<h4>Avenida Kennedy, 500</h4>
		    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellendus, eligendi, saepe quisquam vero assumenda.</p>
		    			<span>R$300.000</span>
		    		</div>
			    	<div class="col-sm-4 col-xs-12">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/casa1.jpg'; ?>" alt="" class="img-responsive">
			    		<h4>Rua Chile, 7000</h4>
			    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellendus, eligendi, saepe quisquam vero assumenda.</p>
			    		<span>R$500.000</span>
			    	</div>
			    	<div class="col-sm-4 col-xs-12">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/ap2.jpg'; ?>" alt="" class="img-responsive">
			    		<h4>Rua douglas Adams, 42</h4>
			    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellendus, eligendi, saepe quisquam vero assumenda.</p>
			    		<span>R$270.000</span>
			    	</div>
			    	<!-- <div class="col-md-3">
			    		<img src="<?php echo  get_stylesheet_directory_uri() . '/img/casa2.jpg'; ?>" alt="" class="img-responsive">
			    	</div> -->
		    	</div>
		    </section>

		    <section class="search col-lg-3 col-sm-3 col-xs-12 pull-right">
		      <form action="" class="form" role="form">
		      	<h3>Encontre um Propriedade</h3>
		    	<div class="form-group"><label for="">Lorem:</label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for="">Ipsum:</label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for="">Sit amet:</label><input type="text" class="form-control"></div>
		    	<div class="form-group"><label for="">Consectur:</label><input type="text" class="form-control"></div>
		    	<button class="btn btn-default" type="submit">Pesquisar</button>
		      </form>
		    </section>

		</article>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>