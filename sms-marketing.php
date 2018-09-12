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
			.main-content{
				width: 100%;
				overflow: hidden;
			}
			.main-content .content{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 80%;
				margin: 0 auto;
			}
			.main-content .content .display-content{
				display: flex;	
			}
			.main-content .content .display-content .box-content{
				display: flex;
				flex-direction: column;
				justify-content: center;
				flex: 1;
				margin: 0 0 50px 0;
			}
			.main-content .content .display-content .box-content .title-marketing{
				margin: 50px 0 50px 0; 
			}
			.main-content .content .display-content .box-content .title-marketing .title-top{
				font-size: 100px;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				margin: 0;
				padding: 0;
				font-family: overpassheavyitalic;
				line-height: 90px;
			}
			.main-content .content .display-content .box-content .title-marketing .title-bottom{
				color: #205198;
				font-family:  bebasneue light_0;
				font-style: italic;
				font-size: 100px;
				line-height: 1px;
			}
			.main-content .content .display-content .box-content .sms-marketing{
				width: 100%;
			}
			.main-content .content .display-content .box-content .text-marketing{
				text-align: justify;
				color: #205198;
				font-size: 18px;
				line-height: 28px;
			}
			.main-content .content .display-info{
				display: flex;
				justify-content: space-between;
				width: 80%;
			}
			.main-content .content .display-info .box-info{
				position: relative;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				border: 1px solid transparent;
				border-image: linear-gradient(-45deg, #0064AA, #00BBFA);
				border-image-slice: 1;
				-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3);
				-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3);
				box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3);
				width: 200px;
				padding: 20px;
				background-color: #fff;
				margin-bottom: 50px;
			}
			.main-content .content .display-info .box-info .img-info{
				width: 100%;
			}
			.main-content .content .display-info .box-info .text{
				text-align: center;
				color: #333;
			}
			@media screen and (max-width: 1366px){
				.main-content .content .display-content .box-content .text-marketing{
					line-height: 25px;
				}
			}
			@media screen and (max-width: 1024px){
				.main-content .content{
					width: 90%;
				}
				.main-content .content .display-content .box-content .text-marketing{
					line-height: 22px;
				}
				.main-content .content .display-info{
					width: 100%;
				}
			}
			@media screen and (max-width: 960px){
				.main-content .content .display-content .box-content .text-marketing{
					font-size: 12px;
				}
				.main-content .content .display-info .box-info .text{
					font-size: 12px;
				}
				.main-content .content .display-content .box-content .text-marketing{
					line-height: 18px;
				}
				.main-content .content .display-content .box-content .title-marketing .title-top{
					font-size: 80px;
					line-height: 70px;
				}
				.main-content .content .display-content .box-content .title-marketing .title-bottom{
					font-size: 80px;
				}
			}
			@media screen and (max-width: 800px){
				.main-content .content .display-info .box-info{
					width: 150px;
				}
			}
			@media screen and (max-width: 640px){
				.main-content .content{
					width: 90%;
				}
				.main-content .content .display-content{
					flex-direction: column-reverse;
					align-items: center;
				}
				.main-content .content .display-info{
					flex-direction: column;
					align-items: center;
				}
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<section class="main-content">
			<div class="content">
				<div class="display-content">
					<div class="box-content">
						<img class="sms-marketing" src="imagens/departamentos/marketing/sms-marketing.png">
					</div>
					<div class="box-content">
						<div class="title-marketing">
							<h1 class="title-top">SMS</h1>
							<span class="title-bottom">Marketing</span>
						</div>
						<p class="text-marketing">O SMS é uma ferramenta de relacionamento com clientes que cresceu significativamente nos últimos anos, devido à descoberta dos seus benefícios e diferenciais pelos profissionais de marketing. Ele é um meio de comunicação com ligação direta, personalizada, instantânea, interativa e que, geralmente, está 24 horas por dia junto aos clientes. Estas características fazem do SMS uma ferramenta importante do Marketing de Relacionamento. O SMS Marketing é utilizado através de campanhas por empresas que pretendem realizar ações de marketing com baixo custo de investimento, ampliando seu leque de ferramentas de publicidade e aumentando a clientela. O SMS tornou-se a principal fonte de comunicação com os consumidores e, através do SMS Marketing, campanhas vêm se tornando cada vez mais eficazes, eficientes e estratégicas para as empresas diversifiquem seu portfólio de comunicação para atingir seu público-alvo, pois é possivel realizar uma propaganda direita sem os altos custos do marketing tradicional (rádio, TV, jornal, entre outros).</p>
					</div>
				</div>
				<div class="display-info">
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/design-responsivo.png">
						<p class="text">Acessível a todos os dispositivos</p>
					</div>
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/marketing.png">
						<p class="text">Marketing de baixo custo</p>
					</div>
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/publico-alvo.jpeg">
						<p class="text">Público alvo selecionado</p>
					</div>
				</div>
			</div>
		</section>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>