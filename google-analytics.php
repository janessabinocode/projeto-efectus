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
				padding: 10px;
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
		require_once "@include-interatividade.php";
		?>
		<section class="main-content">
			<div class="content">
				<div class="display-content">
					<div class="box-content">
						<img class="sms-marketing" src="imagens/departamentos/marketing/analytics-efectus-digital.png">
					</div>
					<div class="box-content">
						<div class="title-marketing">
							<h1 class="title-top">GOOGLE</h1>
							<span class="title-bottom">Analytics</span>
						</div>
						<p class="text-marketing">O Google Analytics é uma ferramenta de monitoramento de tráfego de um site que funciona como uma poderosa ferramenta na ajuda de tomada de decisões em negócios na Internet. É capaz de identificar a taxa de exibição e hit de uma página, a localização geográfica do visitante, a forma com a qual esse visitante chegou na página, o sistema operacional, o navegador, a resolução de tela, o Java, o reprodutor de flash instalado e muitas outras funções, em períodos diários, semanais, mensais e anuais.</p>
					</div>
				</div>
				<div class="display-info">
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/analytics-1.jpg">
						<p class="text">Metas e resultados alcançados</p>
					</div>
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/analytics-2.jpg">
						<p class="text">Estratégias de impulsionamento</p>
					</div>
					<div class="box-info">
						<img class="img-info" src="imagens/departamentos/marketing/analytics-3.jpg">
						<p class="text">Estatísticas detalhadas</p>
					</div>
				</div>
			</div>
		</section>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>