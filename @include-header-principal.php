<style>
	header{
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0 100px;
		height: 150px;
	}
	header .main-nav .menu-mobile{
		padding: 20px;
		color: #015095;
		display: none;
		font-size: 24px;
	}
	header .main-nav .links-principais{
		margin: 0;
		padding: 0;
		list-style-type: none;
	}
	header .main-nav .links-principais li{
		display: inline-block;
		position: relative;
	}
	header .main-nav .links-principais li .fa-caret-down{
		padding: 0 0 0 10px;	
	}
	header .main-nav .links-principais li .link-principal{
		padding: 20px;
		text-decoration: none;
		color: #015095;
		position: relative;
		display: block;
	}
	header .main-nav .links-principais li:hover .link-principal{
		background: linear-gradient(to right, #015095 , #57A9D4);
		color: #fff;
	}
	header .main-nav .links-principais li .sub-links{
		position: absolute;
		width: 250px;
		background: linear-gradient(to right, rgb(1, 80, 149, 0.8) , rgb(87, 169, 212, 0.8));
		margin: 0;
		padding: 0;
		display: none; 
	}
	header .main-nav .links-principais li:hover .sub-links{
		display: block;
	}
	header .main-nav .links-principais li .sub-links li{
		display: block;
	}
	header .main-nav .links-principais li .sub-links li a{
		display: block;
		padding: 20px;
		text-decoration: none;
		color: #fff;
		border-bottom: 1px solid #547ea3;
	}
	header .main-nav .links-principais li .sub-links li a:hover{
		background: #57A9D4;	
	}
	@media screen and (max-width: 1024px){
		header{
			padding: 0 45px;
		}
		header .box-logo img{
			width: 250px;
		}
	}
	@media screen and (max-width: 960px){
		header .main-nav .links-principais li .link-principal{
			padding: 20px 10px;
		}
	}
	@media screen and (max-width: 800px){
		header{
			padding: 0 20px;
		}
		header .box-logo img{
			width: 200px;
		}
		header .main-nav .links-principais li .link-principal{
			padding: 10px 5px;
		}
	}
	@media screen and (max-width: 768px){
		header .main-nav .menu-mobile{
			display: block;
		}
		header .main-nav .links-principais{
			position: absolute;
			width: 100%;
			left: 0;
			top: 110px;
			background: linear-gradient(to right, #015095 , #57A9D4);
			text-align: center;
			display: none;
			z-index: 150;
		}
		header .main-nav .links-principais li{
			display: block;
		}
		header .main-nav .links-principais li:hover .sub-links{
			display: none;
		}
		header .main-nav .links-principais li .link-principal{
			border-bottom: 1px solid #547ea3;
			color: #fff;
		}
		header .main-nav .links-principais li .link-principal:hover{
			background: linear-gradient(to right, rgb(1, 80, 149, 0) , #57A9D4);	
		}
		header .main-nav .links-principais li .sub-links{
			position: static;
			width: 100%;
		}
		header .main-nav .links-principais li .sub-links li a{
			font-size: 16px;
		}
	}
</style>
<script>
	$(document).ready(function(){
		var linksPrincipais = $(".links-principais");
		if(screen.width <= 768){
			$(".menu-mobile").off().on("click", function(){
				linksPrincipais.slideToggle();
				linksPrincipais.children(".sub-links").css("display", "none");
			});

			function reset_links(){
				linksPrincipais.children("li").each(function(){
					$(this).children("ul").css("display", "none");
				});
			}

			function visit_page(url){
				window.location.href = url;
			}

			linksPrincipais.children("li").each(function(){
				var li = $(this);
				var link = li.children("a");
				var urlLink = link.prop("href");
				var ul = li.children("ul");

				link.off().on("click", function(event){
					event.preventDefault();
					reset_links();

					if(ul.hasClass("js-link-opened")){
						visit_page(urlLink);
						return;
					}

					if(typeof ul.html() != "undefined" && ul.css("display") == "none"){
						ul.css("display", "block");
						ul.addClass("js-link-opened");
					}else{
						visit_page(urlLink);
					}
				});

			});
		}
	});
</script>
<header>
	<div class="box-logo">
		<a href="index.php"><img src="imagens/identidadeVisual/logo-header-efectus-digital.png"></a>
	</div>
	<nav class="main-nav">
		<div class="menu-mobile">
			<i class="fas fa-bars"></i>
		</div>
		<ul class="links-principais">
			<li><a href="index.php" class="link-principal">Home</a></li>
			<li><a href="marketing.php" class="link-principal">Marketing<i class="fas fa-caret-down"></i></a>
				<ul class="sub-links">
					<li><a href="sms-marketing.php">SMS Marketing</a></li>
					<li><a href="google-adwords.php">Google Adwords</a></li>
					<li><a href="social-media.php">Social Media</a></li>
					<li><a href="google-analytics.php">Google Analytics</a></li>
					<li><a href="seo.php">SEO</a></li>
				</ul>
			</li>
			<li><a href="desenvolvimento-de-site.php" class="link-principal">Desenvolvimentos de sites</a></li>
			<li><a href="contato.php" class="link-principal">Contato</a></li>
			<li><a href="sobre.php" class="link-principal">Sobre</a></li>
		</ul>
	</nav>
</header>