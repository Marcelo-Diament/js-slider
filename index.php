<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<title>JS Slider</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5, shrink-to-fit=no">
	<meta http-equiv="Cache-control" content="public">
	<meta name="title" content="JS | Slider">
	<meta name="description" content="JS | Slider em JS Puro">
	<meta name="revisit-after" content="30 days">
	<meta name="identifier-URL" content="https://djament.com.br/estudos/js-slider/index.php">
	<meta name="abstract" content="JS | Slider">
	<meta name="author" content="Marcelo Diament, Djament Comunicação">
	<meta name="robots" content="index,follow">
	<meta name="contact" content="contato@djament.com.br">
	<meta name="reply-to" content="contato@djament.com.br">
	<meta name="copyright" content="Djament">
	<meta name="rating" content="general">
	<meta name="web_author" content="Djament Comunicação">
	<meta name="theme-color" content="#000000">
	<meta property="og:site_name" content="Djament | JS | Slider">
	<meta property="og:title" content="JS | Slider">
	<meta property="og:description" content="JS | Slider em JS Puro">
	<meta property="og:url" content="https://djament.com.br/estudos/js-slider/index.php">
	<meta property="og:locale" content="pt-BR">
	<meta name="og:locality" content="São Paulo">
	<meta name="og:region" content="SP">
	<meta name="og:country-name" content="BR">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://djament.com.br/estudos/js-slider/assets/img/apple-icon-60x60.png">
	<meta property="og:image:alt" content="JS | Slider">
	<meta property="og:image:url" content="https://djament.com.br/estudos/js-slider/assets/img/apple-icon-60x60.png">
	<meta property="og:image:type" content="img/png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Biblioteca Teste">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" sizes="60x60" href="https://djament.com.br/estudos/js-slider/assets/img/apple-icon-60x60.png">
	<link rel="icon" type="image/png" sizes="60x60" href="https://djament.com.br/estudos/js-slider/assets/img/apple-icon-60x60.png">	
	<link rel="canonical" href="https://djament.com.br/estudos/js-slider">
	<meta name="keywords" content="php, poo, orientação à objetos, programação orientada à objetos, desenvolvimento web">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="container">
		<section class="row">
			<article class="col-12">
				<div id="logo3D" class="desktop-only col-12"><a id="cube" href="https://br.digitalhouse.com" title="Digital House Brasil" alt="Digital House Brasil" rel="external" target="_blank">
					<img src="https://djament.com.br/estudos/js-slider/assets/img/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House"></a>
				</div>
			</article>
			<article class="col-12">
				<h1>JS Slider <a href="https://github.com/Marcelo-Diament/js-slider" target="_blank" title="Acesse o repositório para ver os códigos em PHP" rel="noreferrer"><i class="fab fa-github"></i></a></h1>
			</article>
		</section>
	</header>
	<main class="container-fluid">
		<section id="sldSection" class="row">
			<article id="sldArticle" class="col-12">
				<ul id="sldUl" class="">
					<li id="sld-1" class="sld visivel"><img src="assets/img/img-1.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-2" class="sld"><img src="assets/img/img-2.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-3" class="sld"><img src="assets/img/img-3.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-4" class="sld"><img src="assets/img/img-4.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-5" class="sld"><img src="assets/img/img-5.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-6" class="sld"><img src="assets/img/img-6.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-7" class="sld"><img src="assets/img/img-7.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
					<li id="sld-8" class="sld"><img src="assets/img/img-8.png" width="640px" height="320px" alt="Imagem de Teste para Slider puro em JS" title="Imagem de Teste para Slider puro em JS"></li>
				</ul>
			</article>
		</section>
	</main>
	<footer></footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>