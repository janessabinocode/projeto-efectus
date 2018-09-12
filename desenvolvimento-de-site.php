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
		?>
		<style>
			.center{
				display: flex;
				align-items: center;
			}
			.flex-direction{
				align-items: center;
				flex-direction: column;
			}
			.main-container{
				width: 100%;
				background-image: url(imagens/background/background-desen.png);
				background-repeat: no-repeat;
				background-size: 100% 800px;
				overflow: hidden;
			}
			.main-container .container{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 80%;
				margin: 0 auto;
			}
			.main-container .container .box-title{
				display: flex;
				flex-direction: column;
				align-items: flex-end;
				height: 250px;
				margin-top: 70px;
			}
			.main-container .container .box-title .title{
				font-size: 100px;
				font-family: overpassheavyitalic;
				line-height: 90px;
				margin: 0;
				padding: 0;
				color: #fff;
			}
			.main-container .container .box-title .style-title{
				margin: 50px 0 0 200px;
			}
			.main-container .container .box-title .sub-title{
				color: #205198;
				font-size: 100px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
			}
			.main-container .container .display-content{
				width: 100%;
				display: flex;
				position: relative;
			}
			.main-container .container .display-content .box-img{
				width: 50%;
				height: 500px;
			}
			.main-container .container .display-content .box-img img{
				position: absolute;
				top: -100px;
				height: 750px;
				left: -250px;
			}
			.main-container .container .display-content .box-text{
				width: 50%;
			}
			.main-container .container .display-content .box-text .text{
				color: #fff;
				text-align: justify;
			}
			.main-container .container .box-text{
				position: relative;
				display: flex;
				width: 50%;
			}
			.main-container .container .box-text .img-macbooke{
				position: absolute;
				top: -542px;
				right: -765px;
				width: 200%;
			}
			.main-container .container .box-text p{
				text-align: justify;
				color: #205198;
			}
			.content-linguagens{
				display: flex;
				align-items: center;
				flex-direction: column;
				background-image: url(imagens/background/background-desen-bottom.png);
				background-size: 100% 100%;
				height: 850px;
				background-repeat: no-repeat;
				width: 100%;
			}
			.content-linguagens .img-cell{
				position: absolute;
				width: 32%;
				z-index: -1;
				transform: rotate(-10deg);
				left: 50px;
				margin-top: -150px;
			}
			.content-linguagens .display-content{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 80%;
				margin: 0 auto;
			}
			.content-linguagens .display-content .box-title{
				display: flex;
				flex-direction: column;
				align-items: flex-end;
				justify-content: flex-end;
				height: 350px;
			}
			.content-linguagens .display-content .box-title .title{
				font-size: 100px;
				font-family: overpassheavyitalic;
				line-height: 100px;
				margin: 0;
				padding: 0;
				color: #fff;
			}
			.content-linguagens .display-content .box-title .sub-title{
				color: #205198;
				font-size: 100px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
			}
			.content-linguagens .display-content .box-text{
				margin: 50px 0 0 0;
				width: 70%;
			}
			.content-linguagens .display-content .box-text .text{
				color: #fff;
				text-align: justify;
			}
			.content-linguagens .display-content .box-img-linguagen{
				width: 30%;
				margin: 40px 0 0 0;
			}
			.content-linguagens .display-content .box-img-linguagens{
				display: flex;
				justify-content: center;
				width: 100%;
			}
			.content-linguagens .display-content .box-img-linguagens .img-linguagens{
				height: 59px;
				padding: 20px;
			}
			.content-linguagens .display-content .box-img-linguagen img{
				width: 100%;
			}
			.content-padroes{
				position: relative;
				width: 80%;
				margin: 0 auto;
			}
			.content-padroes .display-content{
				display: flex;
				margin: 70px 0 0 0;
			}
			.content-padroes .display-content .box-title{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 50%;
				height: 100px;
			}
			.content-padroes .display-content .box-title-seo .title{
				font-size: 105px;
				line-height: 150px;
				font-family: overpassheavyitalic;
				margin: 0;
				padding: 0;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				line-height: 120px;
				padding-top: 10px;
			}
			.content-padroes .display-content .box-title-seo .sub-title{
				color: #205198;
				font-size: 100px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
				margin-left: 50px;	
			}
			.content-padroes .display-content .box-title .title{
				font-size: 105px;
				line-height: 150px;
				font-family: overpassheavyitalic;
				margin: 0;
				padding: 0;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				line-height: 120px;
				padding-top: 10px;
			}
			.content-padroes .display-content .box-title .sub-title{
				color: #205198;
				font-size: 100px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
				margin-left: 50px;
			}
			.content-padroes .display-content .box-text{
				width: 50%;
				height: 200px;
			}
			.content-padroes .display-content .box-text .text{
				color: #205198;
				text-align: justify;
			}
			.content-padroes .display-info{
				display: flex;
				justify-content: space-between;
				margin: 50px 0 100px 0;
			}
			.content-padroes .display-info .box-info{
				display: flex;
				align-items: center;
				justify-content: center;
				width: 300px;
				text-align: center;
				border: 1px solid transparent;
				border-image: linear-gradient(to right, #0064AA, #00BBFA);
				border-image-slice: 1;
				color: #205198;
			}
			.bk-left{
				position: absolute;
				left: -247px;
    			top: -311px;
			}
			.bk-right{
				position: absolute;
				right: -197px;
				transform: rotate(-9deg);
			}
			@media screen and (max-width: 1440px){
				.main-container .container .box-text .img-macbooke{
					right: -685px;
					top: -466px;
					width: 200%;
				}
			}
			@media screen and (max-width: 1366px){
				.main-container{
					background-size: 100% 870px;
				}
				.main-container .container .display-content .box-img img{
					height: 700px;
				}
				.main-container .container .box-text .img-macbooke{
					right: -650px;
				}
			}
			@media screen and (max-width: 1280px){
				.main-container{
					background-size: 100% 900px;
				}
				.main-container .container .box-title{
					margin-right: 50px;
				}
				.main-container .container .box-text .img-macbooke{
					right: -600px;
					top: -390px;
				}
			}
			@media screen and (max-width: 1024px){
				.main-container{
					background-size: 100% 880px;
				}
				.main-container .container{
					width: 90%;
				}
				.main-container .container .display-content .box-text{
					width: 80%;
				}
				.main-container .container .display-content .box-img img{
					height: 550px;
					top: -82px;
				}
				.main-container .container .box-text .img-macbooke{
					right: -525px;
    				top: -300px;
				}
				.content-linguagens .img-cell{
					width: 45%;
					left: -60px;
					margin-top: -90px;
				}
				.content-padroes{
					width: 95%;
				}
				.bk-left{
					display: none;
				}
				.bk-right{
					display: none;
				}
			}
			@media screen and (max-width: 960px){
				.main-container {
    				background-size: 100% 850px;
				}
				.main-container .container .box-title{
					margin: 50px 0 20px 0;
				}
				.main-container .container .display-content .box-img img{
					height: 550px;
				}
				.main-container .container .box-text .img-macbooke{
					
				}
				.main-container .container .box-title{
					height: 200px;
				}
				.main-container .container .display-content .box-text{
					width: 65%;
				}
				.content-linguagens .img-cell{
					width: 45%;
					left: -60px;
					margin-top: -90px;
				}
				.content-padroes .display-info .box-info{
					width: 250px;
				}
				.main-container .container .box-title .title{
					font-size: 90px;
					line-height: 70px;
				}
				.main-container .container .box-title .sub-title{
					font-size: 90px;
				}
				.main-container .container .box-title .title{
					font-size: 90px;
					line-height: 70px;
				}
				.main-container .container .box-title .sub-title{
					font-size: 90px;
				}
				.content-linguagens .display-content .box-title .title{
					font-size: 90px;
					line-height: 80px;
				}
				.content-linguagens .display-content .box-title .sub-title{
					font-size: 90px;
				}
				.content-padroes .display-content .box-title .title{
					font-size: 90px;
					line-height: 80px;
				}
				.content-padroes .display-content .box-title .sub-title{
					font-size: 90px;
				}
				.content-padroes .display-content .box-title .title{
					font-size: 90px;
					line-height: 80px;
				}
				.content-padroes .display-content .box-title .sub-title{
					font-size: 90px;
				}
			}
			@media screen and (max-width: 840px){
				.main-container .container .box-text .img-macbooke{
				    right: -415px;
    				top: -200px;
				}
			}
			@media screen and (max-width: 800px){
				.main-container{
					background-size: 100% 700px;
				}
				.main-container .container .display-content .box-img{
					display: none;
				}
				.main-container .container .display-content .box-text{
					width: 100%;
					margin-bottom: 50px;
				}
				.content-linguagens .img-cell{
					width: 55%;
					left: -80px;
				}
				.content-padroes .display-content{
					flex-direction: column;
					align-items: center;
				}
				.content-padroes .display-content .box-title{
					margin-bottom: 20px;
				}
				.content-padroes .display-content .box-text{
					width: 80%;
				}
				.content-padroes .display-info .box-info{
					width: 230px;
				}
			}
			@media screen and (max-width: 720px){
				.main-container{
					background-size: 100% 670px;
				}
				.main-container .container .box-text .img-macbooke{
					top: -150px;
					width: 220%;
					right: -380px;
				}
				.content-linguagens .img-cell{
					margin-top: -50px;
				}
				.content-padroes .display-info .box-info{
					width: 200px;
				}
			}
			@media screen and (max-width: 640px){
				.main-container{
					background-size: 100% 720px;
				}
				.main-container .container .box-text{
					width: 100%;
				}
				.content-linguagens .img-cell{
					margin-top: -20px;
				}
				.main-container .container .box-text .img-macbooke{
					display: none;
				}
				.content-padroes .display-info .box-info{
					width: 190px;
				}
			}
			@media screen and (max-width: 480px){
				.main-container{
					background-size: 100% 800px;
				}
				.main-container .container .box-title{
					height: 110px;
				}
				.main-container .container .box-title .title{
					font-size: 70px;
					line-height: 65px;
				}
				.content-padroes .display-content .box-title-seo .title{
					font-size: 100px;
					line-height: 90px;
				}
				.main-container .container .box-title .style-title{
					margin: 100px 0 0 0;
				}
				.content-linguagens .img-cell{
					width: 65%;
					left: -30px;
				}
				.content-linguagens .display-content .box-title .title{
					font-size: 70px;
					line-height: 60px;
				}
				.content-linguagens .display-content .box-title .sub-title{
					font-size: 70px;
				}
				.content-padroes .display-content .box-title .title{
					font-size: 70px;
					line-height: 60px;
				}
				.content-padroes .display-content .box-title .sub-title{
					font-size: 70px;
				}
				.content-padroes .display-info{
					flex-direction: column;
					align-items: center;
				}
				.content-padroes .display-info .box-info{
					width: 250px;
				}
			}
			@media screen and (max-width: 425px){
				.main-container{
					background-size: 100% 900px;
				}
				.content-linguagens .display-content .box-text{
					width: 100%;
				}
				.content-linguagens .display-content .box-title .title{
					font-size: 55px;
				}
				.content-linguagens .display-content .box-title .sub-title{
					font-size: 55px;
				}
				.content-linguagens .display-content{
					width: 90%;
				}
				.content-padroes .display-content .box-text{
					width: 100%;
				}
				.content-padroes .display-info .box-info{
					margin: 20px 0 0 0;
				}
				.main-container .container .display-content{
					margin-top: 50px;
				}
				.content-linguagens .display-content .box-img-linguagen{
					width: 65%;
				}
				.content-linguagens .display-content .box-img-linguagens .img-linguagens{
					width: 32%;
					height: 47px;
					padding: 20px 5px 40px 5px;
				}
			}
			@media screen and (max-width: 375px){
				.main-container{
					background-size: 100% 1000px;
				}
			}
			@media screen and (max-width: 320px){
				.main-container{
					background-size: 100% 1050px;
				}
				.main-container .container .box-title .title{
					font-size: 50px;
					line-height: 40px;
				}
				.main-container .container .box-title .sub-title{
					font-size: 50px;
				}
				.content-linguagens .display-content .box-title .title{
					font-size: 50px;
				}
				.content-linguagens .img-cell{
					width: 80%;
				}
				.main-container .container .display-content{
					margin: 0;
				}
				.content-padroes .display-content .box-title-seo .title{
					line-height: 70px;
					font-size: 80px;
				}
				.content-padroes .display-content .box-title-seo .sub-title{
					font-size: 70px;
				}
				.content-linguagens .display-content .box-img-linguagens{
					flex-direction: column;
					align-items: center;
					padding: 50px;
				}
				.content-linguagens .display-content .box-img-linguagens .img-linguagens{
					width: auto;
					padding: 0;
					padding-bottom: 5px;
				}
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		require_once "@include-interatividade.php";
		?>
		<section class="main-container">
			<div class="container">
				<div class="box-title">
					<h1 class="title">DESENVOL</h1>
					<h1 class="title">VIMENTO</h1>
					<span class="sub-title">DE SITES</span>
				</div>
				<div class="display-content">
					<div class="box-img">
						<img src="imagens/background/pag-desenvolvimento/pc-apple.png">
					</div>
					<div class="box-text">
						<p class="text">Atualmente, quem não está na internet praticamente não existe. Se você possui algum empreendimento, um dos primeiros passos é ter um bom site funcionando e sendo alimentado com constância. Muitas intituições financeiras utilizam seus sites como ponto de contato entre a intituição, seus clientes e fornecedores. Outras utilizam o comércio eletrônico (e-commerce) para o aumento de lucro significativo de sua empresa. Alguns sites funcionam como banco de dados, que catalogam registros e permitem efetuar buscar, como por exemplo, os catálogos na Internet, os Wikis e os sites de busca. Outros sites ainda servem para a comunicação do usuário com outro usuários da rede, como os chats, fóruns e sites de relacionamento. Já os Portais, são sites que congregam conteúdos de varios tipos e concentram a grande maioria dos serviços da internet num mesmo local. Não importa qual o tipo de site que melhor atenda sua empresa, ele deve ser constituído de acordo com as regras de SEO para manter um bom posicionamento nos mecanismos de busca como o Google.</p>
					</div>
				</div>
				<div class="box-title" style="height: 200px;">
					<h1 class="title style-title" style="background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">LAYOUTS</h1>
					<span class="sub-title">RESPONSIVOS</span>
				</div>
				<div class="box-text">
					<img class="img-macbooke" src="imagens/background/pag-desenvolvimento/macbooke-background.png">
					<p class="text">Os acessos via dispositívos móveis equivalem a 75% de todos os acessos do mundo. Por conta disto, uma das mais importantes diretrizes do Google, é a compatibilidade do site com todos os dispositivos. Isto mostrará ao Google que o site é importante e poderá ser exibido em qualquer dispositivo</p>
				</div>
			</div>
			<div class="content-linguagens">
				<img class="img-cell" src="imagens/background/pag-desenvolvimento/cell-phone.png">
				<div class="display-content">
					<div class="box-title">
						<h1 class="title">LINGUAGENS</h1>
						<span class="sub-title">ATUALIZADAS</span>
					</div>
					<div class="box-text">
						<p class="text">No desenvolvimento de sites, são usadas diversas linguagens. Entre elas: HTML5, CSS3, JavaScript, JQuery, PHP7 e SQL. Todas em suas versões mais atualizadas, pois na hora de procurar um resultado em algum buscador, por exemplo o Google, se o site não estiver com linguagens atualizadas e bem estruturadas, este site será deixado de lado. Por isso a Efectus se certifica que seu site seja bem visto pelo Google.</p>
					</div>
					<div class="box-img-linguagen">
						<img src="imagens/departamentos/desenvolvimento/html_css_js.png">
					</div>
					<div class="box-img-linguagens">
						<img src="imagens/departamentos/desenvolvimento/php.png" class="img-linguagens">
						<img src="imagens/departamentos/desenvolvimento/jquery.png" class="img-linguagens">
						<img src="imagens/departamentos/desenvolvimento/mysql.png" class="img-linguagens">
					</div>
				</div>
			</div>
			<div class="content-padroes">
				<img src="imagens/departamentos/desenvolvimento/bk-left.png" class="bk-left">
				<img src="imagens/departamentos/desenvolvimento/bk-right.png" class="bk-right">
				<div class="display-content">
					<div class="box-title">
						<h1 class="title">PADRÕES</h1>
						<span class="sub-title">GOOGLE</span>
					</div>
					<div class="box-text">
						<p class="text">O Google é o maior buscador usado no mundo, e para que um site seja bem posicionado e indexado no site deste buscador é necessario seguir certos padrões e diretrizes de qualidade recomendadas. Assim seu site terá mais chance de aparecer na primeira página de busca do Google, lhe trazendo mais acessos e resultados.</p>
					</div>
				</div>
				<div class="display-info">
					<div class="box-info">
						<p class="text">diretrizes de qualidade</p>
					</div>
					<div class="box-info">
						<p class="text">Monitoramento <br>contra SPAM e conteúdo malicioso</p>
					</div>
					<div class="box-info">
						<p class="text">Mobile Friendly sites <br>para todos os dispositivos</p>
					</div>
				</div>
				<div class="display-content flex-direction">
					<div class="box-title-seo">
						<h1 class="title">SEO</h1>
						<span class="sub-title style-subtitle">APLICADO</span>
					</div>
					<div class="box-text">
						<p class="text" style="margin: 70px 0 0 0;">Todas as técnicas de SEO utilizadas no desenvolvimento de um site pela Efectus Digital, são tecnicas White Hat. Estas técnicas recomendadas pelo Google, que visam impulsionar seu site nos resultados de busca, gerar tráfego e resultados, respeitando todas as regras e diretrizes de qualidade.</p>
					</div>
				</div>
				<div class="display-info">
					<div class="box-info">
						<p class="text">Esquema de <br>páginas elaborado</p>
					</div>
					<div class="box-info">
						<p class="text">Análise de palavras <br>chave e tendências</p>
					</div>
					<div class="box-info">
						<p class="text">Recursos em HTML5 <br>para impulsionar seu <br>site nas buscas</p>
					</div>
				</div>
			</div>
		</section>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>