<style type="text/css">
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
	.main-container{
		width: 100%;
		background-image: url(imagens/background/background-desen.png);
		background-repeat: no-repeat;
		background-size: 100% 800px;
		height: 1000px;
	}
	.main-container .container{
		display: flex;
		flex-direction: column;
		align-items: center;
		width: 80%;
		margin: 0 auto;
	}
	.main-container .container .bar{
		width: 100%;
		height: 30px;
		background-color: #fff;
		margin: 0 0 50px 0;
	}
	.main-container .container .box-title{
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		margin: 0 0 50px 0;
	}
	.main-container .container .box-title .title{
		font-size: 100px;
		font-family: overpassheavyitalic;
		line-height: 90px;
		margin: 0;
		padding: 0;
		color: #fff;
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
		top: -150px;
		height: 750px;
		left: -180px;
	}
	.main-container .container .display-content .box-text{
		text-align: center;
		width: 50%;
		height: 500px;
	}
	.main-container .container .display-content .box-text a{
		padding: 4px 20px;
		text-decoration: none;
		color: #fff;
		background-color: #205198;
		border-radius: 15px;
	}
	.main-container .container .display-content .box-text .text{
		color: #fff;
		text-align: justify;
	}
	.main-content .container{
		display: flex;
		flex-direction: column;
		align-items: center;
		width: 80%;
		margin: 0 auto;
	}
	.main-content .container .bar{
		width: 100%;
		height: 30px;
		background-color: #fff;
		margin: 0 0 50px 0;
	}
	.main-content .container .box-title{
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		height: 250px;
		line-height: 130px;
	}
	.main-content .container .box-title .title{
		background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-size: 130px;
		font-family: overpassheavyitalic;
		margin: 0;
		padding: 0;
		color: #fff;
	}
	.main-content .container .box-title .sub-title{
		color: #205198;
		font-size: 100px;
		font-family:  bebasneue light_0;
		font-style: italic;
		line-height: 1px;
	}
	.main-content .container .display-equipe{
		width: 70%;
	}
	.main-content .container .display-equipe .box-equipe{
		display: flex;
		justify-content: space-between;
	}
	.main-content .container .display-equipe .box-equipe-center{
		display: flex;
		justify-content: center;
	}
	.main-content .container .display-equipe .box-equipe-bottom{
		display: flex;
		justify-content: space-between;
		margin: 0 100px 0;
	}
	@media screen and (max-width: 1280px){
		.maincontainer {
			width: 90%;
		}
		.main-container .container{
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
		.main-container .container .display-content .box-img img{
			left: -130px;
			top: -80px;
			height: 600px;
		}
	}
	@media screen and (max-width: 960px){
		.maincontainer .display-info{
			margin: 400px 0 50px 0;
		}
		.main-content .container{
			width: 100%;
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
			margin: 50px 0 0 0;
		}
		.maincontainer .display-content .box-imagem img{
			width: 100%;
		}
		.main-container .container .box-title .title{
			font-size: 90px;
			line-height: 75px;
		}
		.main-container .container .box-title .sub-title{
			font-size: 90px;
		}
		.main-container .container .display-content .box-img img{
			top: 0px;
			height: 500px;
		}
		.main-content .container .box-title{
			line-height: 110px;
		}
		.main-content .container .box-title .title{
			font-size: 110px;
		}
		.main-content .container .box-title .sub-title{
			font-size: 90px;
		}
		.main-content .container .display-equipe .box-equipe-bottom{
			margin: 0 40px 0;
		}
	}
	@media screen and (max-width: 768px){
		.box-iframe iframe{
			height: 500px;
		}
	}
	@media screen and (max-width: 720px){
		.main-container{
			background-size: 100% 650px;
			height: 650px;
		}
		.main-container .container .display-content .box-img{
			display: none;
		}
		.main-container .container .display-content .box-text{
			width: 80%;
		}
		.main-container .container .display-content{
			justify-content: center;
		}
	}
	@media screen and (max-width: 640px){
		.main-content .container .display-equipe{
			width: 85%;
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
		.main-container .container .box-title .sub-title{
			font-size: 70px;
		}
		.main-content .container .box-title{
			line-height: 95px;
		}
		.main-content .container .box-title .title{
			font-size: 95px;
		}
		.main-content .container .box-title .sub-title{
			font-size: 80px;
		}
		.main-content .container .display-equipe .box-equipe{
			flex-direction: column;
			align-items: center;
		}
		.main-content .container .display-equipe .box-equipe-bottom{
			flex-direction: column;
			align-items: center;
		}
		.main-container .container .box-title .title{
			font-size: 75px;
			line-height: 65px;
		}
		.main-container{
			background-size: 100% 700px;
			height: 700px;
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
		.main-container .container .box-title .title{
			font-size: 50px;
			line-height: 45px;
		}
		.main-container .container .box-title .sub-title{
			font-size: 50px;
		}
		.main-container .container .display-content .box-text{
			width: 100%;
		}
		.main-content .container .box-title{
			font-size: 75px;
			height: 170px;
		}
		.main-content .container .box-title .title{
			font-size: 70px;
		}
		.main-content .container .box-title .sub-title{
			font-size: 70px;
		}
	}
</style>
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
<section class="main-container">
	<div class="container">
		<div class="bar"></div>
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
				<p class="text">O site é um dos instrumentos de publicidade  mais eficiente que existem, pois servem de apoio a campanhas de publicidade como o rádio, televisão, jornal, placas etc. Podem construir um empreendimento de prestação de serviços, venda de produtos ou informação, com custos muito reduzidos se comparados a outros negócios. Precisam estar referenciados em buscadores globais ou guias de busca local para obterem os acessos desejados e serem encontrados por novos clientes.</p>
				<a href="#">Saiba mais</a>
			</div>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="container">
		<div class="box-title">
			<h1 class="title">EQUIPE</h1>
			<span class="sub-title">EFECTUS</span>
		</div>
		<div class="display-equipe">
			<div class="box-equipe">
				<div class="img-equipe">
					<img src="imagens/homenzinho.png">
				</div>
				<div class="img-equipe">
					<img src="imagens/homenzinho.png">
				</div>
			</div>
			<div class="box-equipe-center">
				<img src="imagens/homenzinho.png">
			</div>
			<div class="box-equipe">
				<div class="img-equipe">
					<img src="imagens/homenzinho.png">
				</div>
				<div class="img-equipe">
					<img src="imagens/homenzinho.png">
				</div>
			</div>
			<div class="box-equipe-bottom">
				<img src="imagens/homenzinho.png">
				<img src="imagens/homenzinho.png">
			</div>
		</div>
	</div>
</section>