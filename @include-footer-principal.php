<style>
	.be{
        color: #015095;
		font-weight: bold;
    }
    .bc{
        color: #57A9D4;
    }
	.align{
		text-align: center;
	}
	.center{
		display: flex;
		flex-direction: column;
		justify-content: center;
		line-height: 10px;
		align-items: baseline;
	}
	.main-footer{
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
		background-color: #ccc;
		margin: 100px 0 0 0;
	}
	.main-footer .display-action{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 70%;
		height: 130px;
		line-height: 30px;
		margin: -50px 0 0 0;
		border-radius: 65px;
		background: linear-gradient(to right, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		cursor: pointer;
	}
	.main-footer .display-action:hover{
		transition: 1s;
		background: linear-gradient(to left, rgba(16,105,201, 1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);	
	}
	.main-footer .display-action h2,
	.main-footer .display-action h3{
		margin: 0;
		padding: 0;
		color: #fff;
	}
	.main-footer .display-action h2{
		font-size: 65px;
		font-family: overpassheavyitalic;
	}
	.main-footer .display-action h3{
		font-size: 65px;
		font-style: italic;
		font-weight: normal;
		font-family: bebasneue light_0;
	}
	.main-footer .display-action h2{
		color: #00FFFF;
	}
	.main-footer .content-footer{
		width: 80%;
	}
	.main-footer .content-footer .display-footer{
		display: flex;
		justify-content: space-between;
		padding: 20px 0 20px 0;
		flex-wrap: wrap;
	}
	.main-footer .content-footer .display-footer .box-footer{
		flex: 1;
	}
	.main-footer .content-footer .display-footer .box-footer ul{
		margin: 0;
		padding: 0;
		list-style-type: none;
		white-space: nowrap;
	}
	.main-footer .content-footer .display-footer .box-footer ul li a{
		text-decoration: none;
		color: #7DC2D5;
	}
	.main-footer .content-footer .display-footer .box-footer ul li a:hover{
		text-decoration: underline;
		text-decoration-color: #015095;
	}
	.main-footer .content-footer .display-footer .box-footer .cf .fa-map-marker-alt{
		padding: 0 10px;
		font-size: 23px;
	}
	.main-footer .content-footer .display-footer .box-footer .input-newsletter{
		height: 25px;
		padding: 0 6px;
		margin: 0;
		width: 75%;
		background: #ccc;
		border: 1px solid #015095;
	}
	.main-footer .content-footer .display-footer .box-footer .btn-news{
		border: none;
		margin: 0 -5px;
		padding: 6px 10px;
		background-color: #54ABD5;
		color: #fff;
		cursor: pointer;
		transition: .2s;
	}
	.main-footer .content-footer .display-footer .box-footer .btn-news:hover{
		background-color: #015095;	
	}
	@media screen and (max-width: 1280px){
		.main-footer .content-footer{
			width: 85%;
		}
	}
	@media screen and (max-width: 1024px){
		.main-footer .content-footer .display-footer .box-footer{
			width: 50%;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px 0px;
			flex: auto;
		}
		.main-footer .content-footer .display-footer .box-footer ul{
			text-align: center;
		}
		.main-footer .content-footer .display-footer .box-footer .btn-news{
			margin: 10px;
			padding: 5px 30px;
		}
	}
	@media screen and (max-width: 800px){
		.main-footer .display-action{
			height: 100px;
		}
		.main-footer .display-action h2{
			font-size: 50px;
		}
		.main-footer .display-action h3{
			font-size: 50px;
		}
	}
	@media screen and (max-width: 720px){
		.main-footer .display-action{
			width: 75%;
		}
	}
	@media screen and (max-width: 640px){
		.main-footer .display-action{
			width: 85%;
		}
	}
	@media screen and (max-width: 480px){
		.main-footer .content-footer .display-footer{
			flex-direction: column;
			align-items: center;
		}
		.main-footer .content-footer .display-footer .box-footer .input-newsletter{
			width: 80%;
		}
		.main-footer .content-footer .display-footer .box-footer{
			width: 100%;
		}
		.main-footer .display-action{
			height: 90px;
			line-height: 20px;
			margin: -40px 0 0 0;
		}
		.main-footer .display-action h2{
			font-size: 35px;
		}
		.main-footer .display-action h3{
			font-size: 35px;
		}
		.main-footer .content-footer .display-footer .box-footer{
			padding: 10px 0;
		}
	}
	@media screen and (max-width: 375px){
		.main-footer .display-action h2{
			font-size: 30px;
		}
		.main-footer .display-action h3{
			font-size: 30px;
		}
		.main-footer .display-action{
			width: 90%;
			line-height: 15px;
		}
	}
	@media screen and (max-width: 320px){
		.main-footer .display-action{
			width: 95%;
			height: 70px;
			margin: -35px 0 0 0;
		}
		.main-footer .display-action h2{
			font-size: 25px;
		}
		.main-footer .display-action h3{
			font-size: 25px;
		}
	}
</style>
<?php
	require_once "@include-newsletter.php";
?>
<footer class="main-footer">
	<div class="display-action js-display-action">
		<h2>COMECE UM PROJETO</h2>
		<h3>COM A EFECTUS</h3>
	</div>
	<div class="content-footer">
		<div class="display-footer">
			<div class="box-footer center">
				<img src="imagens/identidadeVisual/logo-efectus-footer.png">
			</div>
			<div class="box-footer center">
				<span class="be">+55 41 3501-6360</span><br/>
                <span class="bc">contato@efectusdigital.com.br</span>
			</div>
			<div class="box-footer">
				<h4 class="be">SERVIÇOS</h4>
                <ul>
                    <li><a href="#">Marketing Digital</a></li>
                    <li><a href="#">Desenvolvimento de Sites</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
			</div>
			<div class="box-footer">
				<h4 class="be">DÚVIDAS FREQUENTES</h4>
                <ul>
                    <li><a href="#">Qual o custo de um site</a></li>
                    <li><a href="#">Porque ter um site responsivo</a></li>
                    <li><a href="#">Como aumentar minhas vendas</a></li>
                    <li><a href="#">Quanto tempo para produzir um site</a></li>
                </ul>
			</div>
		</div>
		<div class="display-footer">
			<div class="box-footer">
				<div class="cf">
                	<i class="fas fa-map-marker-alt be"></i><span class="be">CURITBA</span>
                </div>
                <span class="bc align">Alameda Dr. Carlos de Carvalho, 1027 - Sala 14</span>
			</div>
			<div class="box-footer">
				<div class="cf">
                	<i class="fas fa-map-marker-alt be"></i><span class="be">FLORIANÓPOLIS</span>
               	</div>
			</div>
			<div class="box-footer">
				<span class="bc align">Fique por dentro<br/> das novidades da efectus</h4>
			</div>
			<div class="box-footer">
				<input class="input-newsletter" type="text" placeholder="Seu e-mail..." name="email">
                <input class="btn-news" type="submit" value="Enviar" name="btn-newsletter">
			</div>
		</div>
	</div>
</footer>