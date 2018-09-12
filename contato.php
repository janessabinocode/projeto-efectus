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
			.main-content{
				width: 80%;
				margin: 0 auto 150px auto;
				background-image: url(imagens/background/celular-background.png);
				background-size: 50%;
				background-repeat: no-repeat;
				background-position: left;
			}
			.box-title-contato{
				text-align: center;
				margin: 0 0 50px 0;
			}
			.box-title-contato .title-contato{
				font-size: 100px;
				margin: 0;
				padding: 0;
				font-family: overpassheavyitalic;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;	
			}
			.box-title-contato .bar{
				width: 200px;
				height: 1px;
				background-color: #015095;
				margin: -20px auto 20px auto;
			}
			.box-title-contato span{
				font-size: 20px;
				color: #015095;
			}
			form{
				width: 50%;
				margin: 10px auto;
			}
			form .box-input{
				display: flex;
			}
			form .box-input .input{
				display: flex;
				flex-direction: column;
				width: 100%;
			}
			form .box-input .input input{
				margin: 10px 5px;
				height: 30px;
				outline: none;
				padding: 0 5px;
				border: 1px solid #015095;
			}
			form .box-input .input .title-input{
				padding: 0 5px;
				color: #015095;
			}
			form .box-input textarea{
				margin: 5px;
				height: 130px;
				resize: none;
				outline: none;
				padding: 5px;
				border: 1px solid #015095;
			}
			form .btn-contato{
				display: flex;
				justify-content: flex-end;
			}
			form .btn-contato input{
				margin: 5px;
				border: none;
				color: #fff;
				background-color: #015095;
				padding: 6px 25px;
				font-size: 20px;
			}
			@media screen and (max-width: 1366px){
				form{
					width: 60%;
				}
			}
			@media screen and (max-width: 1024px){
				form{
					width: 70%;
				}
				.box-title-contato .title-contato{
					font-size: 80px;
				}
				.box-title-contato span{
					font-size: 15px;
				}
			}
			@media screen and (max-width: 800px){
				.box-title-contato .title-contato{
					font-size: 70px;
				}
				form .box-input{
					flex-direction: column;
				}
			}
			@media screen and (max-width: 480px){
				form{
					width: 80%;
				}
				.box-title-contato .title-contato{
					font-size: 60px;
				}
				form .btn-contato input{
					padding: 2px 10px;
					font-size: 18px;
				}
			}
			@media screen and (max-width: 320px){
				form{
					width: 90%;
				}
			}
		</style>
		<script>
			$(document).ready(function(){
				console.log("Página Carregada");
				
				phone_mask(".telefone-contato");
				
				var objFormulario = $(".formulario-contato");
				var objNome = $("#contatoNome");
				var objTelefone = $("#contatoTelefone");
				var objEmail = $("#contatoEmail");
				var objMensagem = $("#contatoMensagem");
				var objBtn = $("#contatoBtn");
				var enviandoContato = false;
				
				function validar_dados(){
					var nome = objNome.val();
					var telefone = objTelefone.val();
					var email = objEmail.val();
					var mensagem = objMensagem.val();
					
					if(nome.length < 3){
						mensagemAlerta("O campo NOME deve conter no mínimo 3 caracteres", objNome);
						return false;
					}
					if(telefone.length < 14){
						mensagemAlerta("O campo TELEFONE deve conter no mínimo 14 números", objTelefone);
						return false;
					}
					if(validarEmail(email) == false){
						mensagemAlerta("O campo E-MAIL deve ser preenchido corretamente", objEmail);
						return false;
					}
					if(mensagem.length < 10){
						mensagemAlerta("O campo MENSAGEM deve conter no mínimo 10 caracteres", objMensagem);
						return false;
					}
				}
				
				objFormulario.off().on("submit", function(){
					event.preventDefault();
					
					objFormulario.unbind("submit");
					
					if(!enviandoContato){
						enviandoContato = true;
						
						if(validar_dados()){
							objFormulario.bind("submit");
						}else{
							enviandoContato = false;
						}
					}
				});
			});
		</script>
	</head>
	<body>
		<?php
		require_once "@pew/pew-system-config.php";
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		require_once "@include-interatividade.php";
		?>
		<div class="main-content">
			<div class="box-title-contato">
				<h1 class="title-contato">CONTATO</h1>
				<div class="bar"></div>
				<span>Dúvidas? Entre em contato com a Efectus Digital</span>
			</div>
			<form class="formulario-contato" method="post" action="@grava-contato.php">
				<div class="box-input">
					<div class="input">
						<span class="title-input">Nome</span>
						<input type="text" name="nome" id="contatoNome">
					</div>
					<div class="input">
						<span class="title-input">Telefone</span>
						<input type="text" name="telefone" class="telefone-contato" id="contatoTelefone">
					</div>
				</div>
				<div class="box-input">
					<div class="input">
						<span class="title-input">E-mail</span>
						<input type="text" name="email" id="contatoEmail">
					</div>
				</div>
				<div class="box-input">
					<div class="input">
						<span class="title-input">Mensagem</span>
						<textarea name="mensagem" id="contatoMensagem"></textarea>
					</div>
				</div>
				<div class="btn-contato">
					<input type="submit" value="Enviar" id="contatoBtn">
				</div>
			</form>
		</div>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>