<?php 
	//conteúdo da tela de inicio onde é explicado a site
	include("includes/header-home.php"); 
	include("includes/navbar.php")
?>
<!--banner-->
<div class="banner-main">
	<div class="mascara"></div>
	<div class="container"> 
		<h2> Encontre e divulgue jogadores!! </h2>
		<a href="#saiba-mais" target="saiba-mais"> Saiba Mais </a>
	</div>
</div>

<section class="about-project background-videos" id="saiba-mais"> 
	
	<div class="container">
		<h2> Vídeos em Destaque</h2>

		<div class="block-videos">
			<div class="item">
				<iframe width="100%" height="150" src="https://www.youtube.com/embed/p5ROBYUMQdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="100%" height="150" src="https://www.youtube.com/embed/p5ROBYUMQdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="100%" height="150px" src="https://www.youtube.com/embed/p5ROBYUMQdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="100%" height="150" src="https://www.youtube.com/embed/p5ROBYUMQdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>

</section>

<!--mapa-->
<section class="about-project" id="saiba-mais"> 

	<div class="container">
		<div class="row map-area">
			<div class="col-6">
				<h2> Sobre Nós</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				<a class="" href="./signup.php">CADASTRAR</a>
			</div>
			<div class="col-6">
				<div class="map">
					<img src="assets/images/br-map.jpg">
				</div>
			</div>
		</div>
	</div>

</section>

<?php include("includes/footer.php") ?>

