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
				<iframe width="560" height="315" src="https://www.youtube.com/embed/rdlRO_lHykk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/xSdR7-8hBEU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/TL0n7GBaASs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="item">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/_dBz4dTZocg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
				<p>A plataforma facilita a localização de atletas por meio de uma busca por meio de sua cidade ou região, contando também com avaliações que ajudam no sistema de ranqueamento de atletas.
				   Se tiverem boas notas terá um destaque maior, se tiverem notas ruins, terão um destaque menor, com isso esperamos que muitos jogadores possam ter uma oportunidade para entrar em clubes, e então faça com que os mesmos melhorem suas habilidades, e consequentemente melhorem assim o nível atual do futebol.</p>
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

