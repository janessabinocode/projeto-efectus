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
			.background{
				width: 100%;
				height: 100%;
				background-image: url(imagens/background/sobre-background.png);
				position: absolute;
				z-index: -1;
				background-size: cover;
			}
			.main-content{
				width: 80%;
				margin: 0 auto;
			}
			.box-title{
				width: 100%;
				display: flex;
				justify-content: center;
			}
			.box-title .title-sobre{
				font-size: 100px;
				margin: 0;
				padding: 0;
				font-family: overpassheavyitalic;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			.text-sobre{
				width: 50%;
				margin: 0 auto;
			}
			.text-sobre p{
				font-size: 25px;
				text-align: justify;
				color: #015095;
			}
			.box-frase{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 100%;
			}
			.box-frase .simbolo{
				font-size: 100px;
				font-family: overpassheavyitalic;
				color: #015095;
				padding: 10px;
			}
			.box-frase .frase{
				display: flex;
				flex-direction: column;
				line-height: 45px;
			}
			.box-frase .frase .title{
				font-family: overpassheavyitalic;
				font-size: 45px;
				color: #00FFFF;
			}
			.box-frase .frase .subtitle{
				font-size: 45px;
				font-family: bebasneue light_0;
				font-style: italic;
				color: #205198;
			}
			@media screen and (max-width: 1280px){
				.text-sobre{
					width: 60%;
				}
			}
			@media screen and (max-width: 1024px){
				.text-sobre{
					width: 70%;
				}
				.box-title .title-sobre{
					font-size: 80px;
				}
				.text-sobre p{
					font-size: 20px;
				}
			}
			@media screen and (max-width: 480px){
				.text-sobre{
					width: 80%;
				}
				.box-title .title-sobre{
					font-size: 70px;
				}
				.text-sobre p{
					font-size: 18px;
				}
				.box-frase .frase{
					line-height: 25px;
				}
				.box-frase .simbolo{
					font-size: 70px;
				}
				.box-frase .frase .title{
					font-size: 30px;
				}
				.box-frase .frase .subtitle{
					font-size: 30px;
				}
			}
			@media screen and (max-width: 320px){
				.text-sobre{
					width: 90%;
				}
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<div class="background"></div>
		<div class="main-content">
			<div class="box-title">
				<h1 class="title-sobre">SOBRE</h1>
			</div>
			<div class="text-sobre">
				<p>A Efectus Digital é uma empresa com foco em resultado real e financeiro para sua empresa. Usamos as estratégias digitais aliadas a profundos conhecimentos comerciais e gestão de pessoas, para levar à sua empresa o que existe de melhor em comunicação digital e conversaõ de vendas.</p>
			</div>
			<div class="box-frase">
				<span class="simbolo">#</span>
				<div class="frase">
					<span class="title">FAZEMOS</span>
					<span class="subtitle">Acontecer</span>
				</div>
			</div>
		</div>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>