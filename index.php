<?php 
	//conteúdo da tela de inicio onde é explicado a site
	include("includes/header-home.php"); 
	include("includes/navbar.php")
?>
<!--banner-->
<div class="banner-main">
	<div class="mascara"></div>
	<div class="container"> 
		<h2> Encontre e avalie e divulgue jogadores amadores da sua região!! </h2>
		<a href="#saiba-mais" target="saiba-mais"> Saiba Mais </a>
	</div>
</div>

<section class="about-project background-videos" id="saiba-mais"> 
	
	<div class="container">
		<h2> Vídeos em Destaque</h2>

		<div class="block-videos">
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
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
				<button class="" data-toggle="modal" data-target="#exampleModal2">CADASTRAR</button>
			</div>
			<div class="col-6">
				<div class="map">
					<img src="images/br-map.jpg">
				</div>
			</div>
		</div>
	</div>

</section>


<?php include_once('./includes/modal.php');?>




<?php include("includes/footer.php") ?>

