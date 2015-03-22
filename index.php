<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/index.css">
		<title>Troyes Hockey Club</title>
	</head>
	<body>
		<div class="container">

			<nav>
				<ul>
					<li><a href="#" id="firstMenu">Accueil</a></li>
					<li><a href="tricasse/club.php">Club</a></li>
					<li><a href="#">Jeu</a></li>
					<li><a href="#">Partenaires</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div id="present">
				<h1>Les Tricasses</h1>
				<div class="defilText">
					<ul>
						<li>Vous êtes combatif ?</li>
						<li>Vous rêvez de jouer au hockey ?</li>
						<li>Alors rejoignez nous sur la glace !</li>
					</ul>
				</div>
				<strong>Equipes de hockey | Troyes</strong>
			</div>
			<footer>
				
			</footer>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var widthWindow = $(window).width();
				var heightWindow = $(window).height();

				/*reglage taille ecran*/
				$('body').css('width','widthWindow');

				$('.container').css('width',widthWindow)
							   .css('height',heightWindow);

				/*defilement text*/
					$('.defilText').fadeOut(0).fadeIn(2000);
					$(function(){
				      setInterval(function(){
				         $(".defilText ul").animate({marginTop:-50},1500,function(){
				            $(this).css({marginTop:0}).find("li:last").after($(this).find("li:first"));
				         })
				      }, 4000);
				   });

				/*fixe color sur menu selectionné*/
					$('#firstMenu').addClass("activeMenu");
					

			})
		</script>
	</body>
</html>