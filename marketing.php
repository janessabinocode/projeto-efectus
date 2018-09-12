<?php
	require_once "@classe-paginas.php";
	$cls_paginas = new Paginas();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Efectus Digital">
		<title><?php $cls_paginas->titulo; ?></title>
		<meta name="description" content="<?php $cls_paginas->descricao; ?>">
		<?php
		require_once "@link-standard-styles.php";
		require_once "@link-standard-scripts.php";
		require_once "@include-interatividade.php";
		?>
		<style>
			.flex-direction{
				flex-direction: row-reverse;
			}
			.maincontainer{
				width: 80%;
				margin: 0 auto;
				background-image: url(imagens/background/mkt_digital-background.png);
				background-size: cover;
				background-repeat: no-repeat;
			}
			.box-iframe{
				width: 100%;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}
			.maincontainer .display-info{
				display: flex;
				align-items: center;
				flex-direction: column;
				margin: 500px 0 50px 0;
			}
			.maincontainer .display-info .box-title{
				height: 300px;
			}
			.maincontainer .display-info .box-title .title{
				font-family: overpassheavyitalic;
				line-height: 110px;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			.maincontainer .display-info .box-title .sub-title{
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
				color: #205198;
			}
			.maincontainer .display-info .box-title .title, .sub-title{
				font-weight: normal;
				font-size: 130px;
				text-align: right;
				margin: 0;
				padding: 0;
				user-select: none;
			}
			.maincontainer .display-info .box-text{
				width: 50%;
				text-align: center;
			}
			.maincontainer .display-info .box-text .text{
				text-align: justify;
				color: #205198;
				margin-bottom: 40px;
			}
			.maincontainer .display-info .box-text .call-to-action{
				text-decoration: none;
				color: #fff;
				padding: 5px 20px;
				background-color: #205198;
				border-radius: 15px;
			}
			.maincontainer .display-info .box-text .call-to-action:hover{
				background-color: #4f7fc1;
				transition: .2s;
			}
			.maincontainer .display-content{
				display: flex;
				flex-wrap: wrap;
				width: 90%;
				margin: 0 auto;
			}
			.maincontainer .display-content .border-content{
				width: 20%;
				margin: 0 auto;
				height: 1px;
				background-color: #205198;
			}
			.maincontainer .display-content .box-imagem{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 50%;
			}
			.maincontainer .display-content .box-text{
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: flex-end;
				width: 50%;
			}
			.maincontainer .display-content .box-text .border-text{
				width: 30px;
				height: 1px;
				background-color: #205198;
			}
			.maincontainer .display-content .box-text .text{
				text-align: justify;
				color: #205198;
				border-right: 1px solid #205198;
				margin: 0;
				padding: 10px;
			}
			@media screen and (max-width: 1280px){
				.maincontainer {
					width: 90%;
				}
			}
			@media screen and (max-width: 1024px){
				.maincontainer .display-info .box-text{
					width: 60%;
				}
				.maincontainer .display-content{
					width: 100%;
				}
				.maincontainer .display-content .box-imagem img{
					width: 80%;
				}
			}
			@media screen and (max-width: 800px){
				.main-container{
					height: 850px;
				}
				.maincontainer .display-info .box-text{
					width: 70%;
				}
				.maincontainer .display-info .box-title{
					height: 250px;
				}
				.maincontainer .display-info .box-title .title, .sub-title{
					font-size: 110px;
				}
				.maincontainer .display-info .box-title .title{
					line-height: 90px;
				}
				.maincontainer .display-content{
					flex-direction: column;
					align-items: center;
				}
				.maincontainer .display-content .box-text{
					width: 80%;
					margin: 0 0 50px 0;
				}
				.maincontainer .display-content .box-imagem{
					margin: 50px 0 50px 0;
				}
				.maincontainer .display-content .box-imagem img{
					width: 100%;
				}
			}
			@media screen and (max-width: 480px){
				.maincontainer .display-info .box-title .title, .sub-title{
					font-size: 95px;
				}
				.maincontainer .display-info .box-title .title{
					line-height: 80px;
				}
				.maincontainer .display-content .box-imagem{
					width: 75%;
				}
				.maincontainer .display-content .box-text{
					width: 100%;
				}
				.maincontainer .display-info .box-text{
					width: 100%;
				}
			}
			@media screen and (max-width: 320px){
				.maincontainer .display-info .box-title .title, .sub-title{
					font-size: 70px;
					line-height: 60px;
				}
				.maincontainer .display-info .box-title{
					height: 180px;
				}
			}
	</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<section class="maincontainer">
			<div class="box-iframe">
				<iframe width="100%" height="600" src="https://www.youtube.com/embed/7VH3wJmMdPU?autoplay=1; rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="display-info">
				<div class="box-title">
					<h1 class="title">MARKE<br/>TING</h1>
					<h2 class="sub-title">DIGITAL</h2>
				</div>
				<div class="box-text">
					<p class="text">O marketing digital promove ações por meio da internet, telefone móvel e outros meios digitais, com o intuito de divulgar e comercializar produtos, serviços, obter novos cliente e melhorar a rede de relacionamentos de qualquer empresa ou empreendimento. São ações estratégicas, econômicas e operacionais adaptadas para os meios digitais, de forma a obter nestes canais, a mesma eficiência e eficácia do marketing tradicional e potencializar seus efeitos. Os nossos meios digitais mais utilizados são: Google Adwords, Facebook, Sites, E-commerce, Seo, entre outros.</p>
					<a class="call-to-action" href="#">Saiba mais</a>
				</div>
			</div>
			<div class="display-content">
				<div class="box-imagem">
					<img src="imagens/servicos/google-adwords.png">
				</div>
				<div class="box-text flex-direction">
					<div class="border-text"></div>
					<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
					<div class="border-text"></div>
				</div>
				<div class="border-content"></div>
			</div>
			<div class="display-content flex-direction">
				<div class="box-imagem">
					<img src="imagens/servicos/social-media-efectus.png">
				</div>
				<div class="box-text">
					<div class="border-text"></div>
					<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
					<div class="border-text"></div>
				</div>
				<div class="border-content"></div>
			</div>
			<div class="display-content">
				<div class="box-imagem">
					<img src="imagens/servicos/google-analytics-efectus.png">
				</div>
				<div class="box-text">
					<div class="border-text"></div>
					<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
					<div class="border-text"></div>
				</div>
				<div class="border-content"></div>
			</div>
			<div class="display-content flex-direction">
				<div class="box-imagem">
					<img src="imagens/servicos/seo-efectus.png">
				</div>
				<div class="box-text">
					<div class="border-text"></div>
					<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
					<div class="border-text"></div>
				</div>
			</div>
		</section>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>