<style>
	.background-modal{
		position: fixed;
		top: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.7);
		visibility: hidden;
		opacity: 0;
		transition: .3s;
	}
	.display-projeto{
		position: fixed;
		left: 0;
		top: 0;
		bottom: 0;
		right: 0;
		height: 600px;
		width: 90%;
		margin: auto auto;
		display: flex;
		justify-content: center;
		align-items: center;
		visibility: hidden;
		opacity: 0;
		transition: .3s;
	}
	.display-projeto .box-formulario{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 50%;
		height: 600px;
		background-color: #fff;
	}
	.display-projeto .box-formulario .title-form{
		width: 80%;
		margin-bottom: 20px;
		line-height: 35px;
	}
	.display-projeto .box-formulario .title-form h1, h3{
		margin: 0;
		padding: 0;
		font-weight: normal;
	}
	.display-projeto .box-formulario .title-form h1{
		font-size: 60px;
		color: #205198;
		font-weight: 800;
	}
	.display-projeto .box-formulario .title-form h3{
		font-size: 20px;
		color: #3292BF;	
	}
	.display-projeto .box-formulario .formulario-projeto{
		width: 80%;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input{
		display: flex;
		justify-content: space-between;
		width: 100%;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input .input input{
		width: 230px;
		height: 25px;
		border: none;
		border-bottom: 2px solid #B8B8B8;
		margin-bottom: 30px;
		outline: none;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input .input input::placeholder{
		color: #B8B8B8;
		font-size: 18px;
		font-family: montserratlight;
	}
	.display-projeto .box-formulario .formulario-projeto .form-checkbox{
		color: #B8B8B8;
		display: flex;
	}
	.display-projeto .box-formulario .formulario-projeto .form-checkbox input{
		margin: 0 10px 30px 10px;	
	}
	.display-projeto .box-formulario .formulario-projeto .form-text textarea{
		width: 100%;
		margin: 0 0 20px 0;
		resize: none;
		border: none;
		border-bottom: 2px solid #B8B8B8;
		outline: none;
	}
	.display-projeto .box-formulario .formulario-projeto .form-text textarea::placeholder{
		color: #B8B8B8;
		font-size: 18px;
		font-family: montserratlight;	
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn{
		text-align: center;
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn input{
		border: none;
		padding: 5px 25px;
		font-size: 20px;
		color: #00FFFF;
		cursor: pointer;
		background: rgba(12,83,186,1);
		background: -moz-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(12,83,186,1)), color-stop(46%, rgba(40,116,208,1)), color-stop(100%, rgba(73,155,234,1)));
		background: -webkit-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -o-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -ms-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: linear-gradient(to right, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0c53ba', endColorstr='#499bea', GradientType=1 );
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn input:hover{
		color: #fff;	
	}
	.display-projeto .box-formulario .contatos{
		display: flex;
		justify-content: space-between;
		width: 65%;
		margin-top: 50px;
	}
	.display-projeto .box-formulario .contatos .email{
		color: #3292BF;	
	}
	.display-projeto .box-formulario .contatos .telefone{
		color: #205198;	
	}
	.display-projeto .box-title{
		position: relative;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 50%;
		height: 600px;
		background: rgba(12,83,186,1);
		background: -moz-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(12,83,186,1)), color-stop(46%, rgba(40,116,208,1)), color-stop(100%, rgba(73,155,234,1)));
		background: -webkit-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -o-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -ms-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: linear-gradient(to right, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0c53ba', endColorstr='#499bea', GradientType=1 );
	}
	.display-projeto .box-title .exit{
		padding: 20px;
		position: absolute;
		top: 0;
		right: 0;
	}
	.display-projeto .box-title .exit .fa-times{
		font-size: 35px;
		color: #fff;
		cursor: pointer;
		transition: .2s;
	}
	.display-projeto .box-title .exit .fa-times:hover{
		color: #205198;	
	}
	.display-projeto .box-title .title{
		text-align: center;
		line-height: 80px;
	}
	.display-projeto .box-title .title h1, h2{
		margin: 0;
		padding: 0;
	}
	.display-projeto .box-title .title h1{
		font-family: overpassheavyitalic;
		color: #00FFFF;
		font-size: 100px;
	}
	.display-projeto .box-title .title h2{
		color: #fff;
		font-family: bebasneue light_0;
		font-weight: normal;
		font-style: italic;
		font-size: 100px;
		line-height: 10px;
	}
	@media screen and (max-width: 1280px){
		.display-projeto .box-formulario{
			width: 50%;
		}
		.display-projeto .box-title .title h1{
			font-size: 90px;
		}
		.display-projeto .box-title .title h2{
			font-size: 90px;
		}
	}
	@media screen and (max-width: 1024px){
		.display-projeto .box-formulario{
			height: 500px;
			padding: 10px;
		}
		.display-projeto .box-formulario .title-form{
			width: 95%;
		}
		.display-projeto .box-formulario .title-form h1{
			font-size: 50px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 95%;
		}
		.display-projeto .box-formulario .contatos{
			width: 80%;
		}
		.display-projeto .box-title{
			height: 500px;
			padding: 10px;
		}
		.display-projeto .box-title .title{
			line-height: 55px;
		}
		.display-projeto .box-title .title h1{
			font-size: 60px;	
		}
		.display-projeto .box-title .title h2{
			font-size: 60px;	
		}
	}
	@media screen and (max-width: 960px){
		.display-projeto{
			flex-direction: column-reverse;
		}
		.display-projeto .box-title{
			height: 200px;
			width: 80%;
		}
		.display-projeto .box-formulario{
			height: 330px;
		}
		.display-projeto .box-formulario .title-form{
			display: none;
		}
		.display-projeto .box-formulario{
			width: 80%;
		}
		.display-projeto .box-formulario .contatos{
			margin-top: 20px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 70%;
		}
		.display-projeto .box-formulario .contatos{
			width: 55%;
		}
	}
	@media screen and (max-width: 800px){
		.display-projeto .box-title .title{
			line-height: 35px;
		}
		.display-projeto .box-title .title h1{
			font-size: 40px;	
		}
		.display-projeto .box-title .title h2{
			font-size: 40px;	
		}
		.display-projeto .box-title{
			height: 120px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 80%;
		}
		.display-projeto .box-formulario .formulario-projeto .form-btn input{
			font-size: 15px;
		}
		.display-projeto .box-formulario .contatos{
			width: 80%;
		}
	}
	@media screen and (max-width: 720px){
		.display-projeto .box-formulario .formulario-projeto{
			width: 90%;
		}
	}
	@media scree and (max-width: 640px){
		.display-projeto .box-formulario .formulario-projeto{
			width: 100%;
		}
		.display-projeto .box-formulario .contatos{
			width: 80%;
		}
	}
	@media screen and (max-width: 480px){
		.display-projeto .box-formulario .formulario-projeto .form-input{
			flex-direction: column;
			align-items: center;
		}
		.display-projeto .box-formulario .formulario-projeto .form-input .input{
			width: 100%;
		}
		.display-projeto .box-formulario .formulario-projeto .form-input .input input{
			width: 100%;
		}
		.display-projeto .box-formulario{
			padding: 20px;
			height: 450px;
		}
		.display-projeto .box-title{
			padding: 30px 20px;
		}
		.display-projeto .box-formulario .contatos{
			flex-direction: column;
			align-items: center;
		}
		.display-projeto .box-formulario .formulario-projeto .form-checkbox{
			flex-direction: column;
		}
	}
	@media screen and (max-width: 425px){
		.display-projeto .box-formulario .formulario-projeto .form-input .input input::placeholder{
			font-size: 16px;
		}
		.display-projeto .box-formulario .formulario-projeto .form-text textarea::placeholder{
			font-size: 16px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 100%;
		}
		.display-projeto .box-formulario{
			padding: 10px 20px;
		}
		.display-projeto .box-formulario .formulario-projeto .form-input .input input{
			height: auto;
			margin: 10px 0 10px 0;
		}
		.display-projeto .box-formulario .formulario-projeto .form-checkbox input{
			margin: 10px 5px 10px 0px;
		}
		.display-projeto .box-formulario .formulario-projeto .form-text textarea{
			margin: 0 0 10px 0;
			height: 20px;
		}
		.display-projeto .box-formulario .formulario-projeto .form-checkbox{
			margin: 10px 0 10px 0;
		}
	}
</style>
<script>
	$(document).ready(function(){
		var background = $(".background-modal");
		var displayProjeto = $(".display-projeto");
		var btnAction = $(".js-display-action");
		var btnExit = $(".js-btn-exit");
		
		function toggle_background(){
			if(background.css("visibility") == "hidden"){
				background.css({
					visibility: "visible",
					opacity: ".9"
				});
			}else{
				background.css({
					visibility: "hidden",
					opacity: "0"
				});
			}
		}
		
		function toggle_modal(){
			toggle_background();
			if(displayProjeto.css("visibility") == "hidden"){
				displayProjeto.css({
					visibility: "visible",
					opacity: "1"
				});
			}else{
				displayProjeto.css({
					visibility: "hidden",
					opacity: "0"
				});
			}
		}
		
		
		btnAction.off().on("click", function(){
			toggle_modal();
		});
		
		background.off().on("click", function(){
			toggle_modal();
		});
		
		btnExit.off().on("click", function(){
			toggle_modal();
		});
		
		var objFormulario = $("#newsletterFomularios");
		var objNome = $("#newsletterNome");
		var objEmail = $("#newsletterEmail");
		var objProjeto = $("#newsletterProjeto");
		var objMensagem = $("#newsletterMensagem");
		var objBtn = $("#newsletterBtn");
		var objRadioSelect = $(".js-radio-select");
		var enviandoContato = false;
		
		function validar_dados(){
			var nome = objNome.val();
			var email = objEmail.val();
			var projeto = objProjeto.val();
			var mensagem = objMensagem.val();

			if(nome.length < 3){
				mensagemAlerta("O campo NOME deve conter no mínimo 3 caracteres", objNome);
				return false;
			}
			if(validarEmail(email) == false){
				mensagemAlerta("O campo E-MAIL deve ser preenchido corretamente", objEmail);
				return false;
			}
			
			var selectedRadio = false;
			objRadioSelect.each(function(){
				var radio = $(this);
				var select = radio.prop("checked");
				if(select){
					selectedRadio = true;
				}
			});
			
			if(selectedRadio == false){
				mensagemAlerta("Selecione uma opção para seu projeto");
				return false;
			}
			
			if(projeto.length < 14){
				mensagemAlerta("O campo FALE UM POUCO DO SEU PROJETO deve conter no mínimo 14 números", objProjeto);
				return false;
			}
			if(mensagem.length < 10){
				mensagemAlerta("O campo COMO VOCÊ CONHECEU A EFECTUS? deve conter no mínimo 10 caracteres", objMensagem);
				return false;
			}
		}
		
		
		objBtn.off().on("click", function(event){
			event.preventDefault();

			if(!enviandoContato){
				enviandoContato = true;

				if(validar_dados()){
					objFormulario.submit();
				}else{
					enviandoContato = false;
				}
			}
		});
	});
</script>
<div class="background-modal"></div>
<div class="display-projeto">
	<div class="box-formulario">
		<div class="title-form">
			<h1>VAMOS LÁ</h1>
			<h3>construa uma história de sucesso</h3>
		</div>
		<form id="newsletterFomularios" class="formulario-projeto" method="post" action="@grava-newsletter.php">
			<div class="form-input">
				<div class="input">
					<input id="newsletterNome" type="text" name="nome" placeholder="Qual é o seu nome">
				</div>
				<div class="input">
					<input id="newsletterEmail" type="text" name="email" placeholder="Qual é o seu email">
				</div>
			</div>
			<div class="form-checkbox">
				<div class="box-check">
					<input type="radio" name="assunto" value="Google Adwords" class='js-radio-select'>Google Adwords
				</div>
				<div class="box-check">
					<input type="radio" name="assunto" value="Google Analytics" class='js-radio-select'>Google Analytics
				</div>
				<div class="box-check">
					<input type="radio" name="assunto" value="Social Media" class='js-radio-select'>Social Media
				</div>
			</div>
			<div class="form-text">
				<textarea id="newsletterProjeto" placeholder="Fale um pouco do seu projeto" name="projeto"></textarea>
				<textarea id="newsletterMensagem" placeholder="Como você conheceu a efectus?" name="mensagem"></textarea>
			</div>
			<div class="form-btn">
				<input id="newsletterBtn" type="submit" value="ENVIAR">
			</div>
		</form>
		<div class="contatos">
			<span class="email">contato@efectusdigital.com.br</span>
			<span class="telefone">+55 41 3501-6360</span>
		</div>
	</div>
	<div class="box-title">
		<div class="exit">
			<i class="fas fa-times js-btn-exit"></i>
		</div>
		<div class="title">
			<h1>COMECE<br>UM PROJETO</h1>
			<h2>COM A EFECTUS</h2>
		</div>
	</div>
</div>