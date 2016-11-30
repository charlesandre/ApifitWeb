<!DOCTYPE html>
<html lang="fr">
<head>
	<link href="bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/default.css"/>
	<link rel="stylesheet" href="css/large_screen.css"/>
	<link rel="stylesheet" href="css/middle_screen.css"/>
	<link rel="stylesheet" href="css/small_screen.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! ">
	<title>Apifit</title>
</head>
<body>

	<header id="myCarousel" class="carousel slide">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner">
			<div class=banner_links>
				<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li><a href="#">Accueil</a></li>
		      <li><a href="#"></a></li>
		      <li><a class="js-scrollTo" href="#contact">Contact</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user padding-icon-right"></span>Inscription</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in padding-icon-right"></span>Connexion</a></li>
		    </ul>
		  </div>
		</nav>
			</div>
			<div class="item active">
				<img src="images/header-basket.jpg" "Apifit Basket">
				<div class="carousel-caption">
					<h2>Apifit</h2>
					<p>Rejoignez la communauté 100% sport</p>
				</div>
			</div>

			<div class="item">
				<img src="images/header-fitness.jpg" alt="Apifit Fitness">
				<div class="carousel-caption">
					<h2>Apifit</h2>
					<p>Rejoignez la communauté 100% sport</p>
				</div>
			</div>

			<div class="item">
				<img src="images/header-rugby.jpg" alt="Apifit Rugby">
				<div class="carousel-caption">
					<h2>Apifit</h2>
					<p>Rejoignez la communauté 100% sport</p>
				</div>
			</div>

			<div class="item">
				<img src="images/header-foot.jpg" alt="Apifit Foot">
				<div class="carousel-caption">
					<h2>Apifit</h2>
					<p>Rejoignez la communauté 100% sport</p>
				</div>
			</div>

		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>

	</header>
	<!--END CAROUSSEL HEADER-->

	<!-- MENU-->
	<nav class="navbar navbar-default menu container-fluid">
		<!-- <div class="navbar-header">
		<a class="navbar-brand" href="#"><img src="" alt="logo-apifit"></a>
	</div> -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar_menu" aria-expanded="false" aria-controls="navbar" style="margin-left:20px">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<nav class="navbar-collapse collapse" id="bar_menu">
		<ul class="nav navbar-nav">
			<li><a class="js-scrollTo" href="#accueil" >Accueil</a></li>
			<li><a class="js-scrollTo" href=".service">Services</a></li>
			<li><a class="js-scrollTo" href=".equipe">&Eacute;quipe</a></li>
			<li><a class="js-scrollTo" href="#contact">Contact</a></li>
		</ul>
	</nav>
</nav>
<!--END MENU-->

<!--INTRO-->
<section class="centrer" id="accueil">
	<div class=container>
		<h3 >Qui sommes nous ?</h3>
		<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
			permettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
		</div>	</section>
		<!--END INTRO-->

		<!--SERVICES-->
		<section class="centrer service">
			<h3>Nos Services</h3>
			<ul>
				<li class="col-sm-3">
					<img src="images/icon-profil.png" alt="icon-profil" id="profile">
					<h4>Un parcours constructif conforme à votre niveau</h4>
					<p id="showme">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<img src="images/icon-statistique.png" alt="icon-statistique">
					<h4>Analysez vos statistiques</h4>
				</li>
				<li class="col-sm-3 col-sm-offset-6">
					<img src="images/icon-communaute.png" alt="icon-communaute">
					<h4>Rejoignez la communauté Apifit et ses défis</h4>
					<img src="images/icon-conseil.png" alt="icon-conseil">
					<h4>Des exercices et des conseils</h4></li>
				</ul>
			</section>
			<!--END SERVICES-->

			<!--VIDEO-->
			<section class="centrer video">
				<h3>Vidéo de présentation</h3>
				<!-- <img src="images/ordi-video.png" alt="ordi-video"> -->
				<div class="contenu-video">
					<video   controls="controls">
						<source src="" type="video/mp4" />
						<object type="application/x-shockwave-flash" data="https://youtu.be/FlTCAqOcqbo">
							<param name="movie" value="https://youtu.be/FlTCAqOcqbo" />
							<param name="wmode" value="transparent" />
							<!--[if lte IE 6 ]>
							<embed src="https://youtu.be/FlTCAqOcqbo" type="application/x-shockwave-flash"  allowscriptaccess="always" allowfullscreen="true" width="400" height="222">
						</embed>
						<![endif]-->
						Vous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
					</object>
				</video>
			</div>
		</section>
		<!--END VIDEO-->

		<!--EQUIPE-->
		<div class="home-doctors  clearfix">
		<section class="centrer equipe">
			<h3>Notre équipe</h3>
			<aside class="row">
				<article class="col-sm-1 text-center doc-item"></article>
				<article class="col-sm-2 text-center doc-item">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a href="https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:vincentbas92@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/profil.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Vincent BAS</h5>
							<h5><small>Objets connectés</small></h5>
						</div>
					</div>
				</article>
				<article class="col-sm-2 text-center doc-item">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a href="https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/profil.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Charles ANDRE</h5>
							<h5><small>Systèmes d'information</small></h5>
						</div>
					</div>
				</article>
				<article class="col-sm-2  text-center doc-item">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a href="https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:samuelbenais@outlook.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/profil.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Samuel BENAÏS</h5>
							<h5><small>Systèmes d'information</small></h5>
						</div>
					</div>
				</article>
				<article class="col-sm-2  text-center doc-item">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a href="https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:remialabadan@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/profil.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Rémi ALABADAN</h5>
							<h5><small>Energies et Environnements</small></h5>
						</div>
					</div>
				</article>
				<article class="col-sm-2 text-center doc-item">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a href="https://www.linkedin.com/in/bayramfatih?authType=NAME_SEARCH&authToken=eQ0O&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A418660352%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506653484%2Ctas%3Afati"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:fatih.b@live.fr?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/profil.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Fatih BAYRAM</h5>
							<h5><small>Systèmes Embarqués</small></h5>
						</div>
					</div>
				</article>
				<article class="col-sm-1 text-center doc-item"></article>
				<!--<article class="col-sm-2 char"><h5><img src="images/businessman.png" alt="Vincent BAS"></h5></article>
				<article class="col-sm-2 char"><h5><img src="images/dj.png" alt="Charles ANDRE"></h5></article>
				<article class="col-sm-2 char"><h5><img src="images/croupier.png" alt="Samuel BENAIS"></h5></article>
				<article class="col-sm-2 char"><h5><img src="images/showman.png" alt="Fatih BAYRAM"></h5></article>
				<article class="col-sm-2 char"><h5><img src="images/detective.png" alt="Rémi ALABADAN"></h5></article>-->
			</aside>
		</section>
		</div>
		<!--END EQUIPE-->

		<!--PARTENAIRE-->
		<section class="centrer partenaire">
			<h3>Nos Partenaires</h3>
			<p>Ils nous ont fait confiance ...</p>
			<aside class="row logo-part">
				<article class="col-sm-2 col-sm-offset-2"><h5><img src="images/logo-fitbit.png" alt="logo-fitbit"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-withings.png" alt="logo-withings"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-orange-bleu.png" alt="logo-orange-bleu"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-jawbone.png" alt="logo-jawbone"></h5></article>
			</aside>
			<aside class="row logo-part">
				<article class="col-sm-2 col-sm-offset-2"><h5><img src="images/logo-forest-hill.png" alt="logo-fitbit"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-garmin.png" alt="logo-withings"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-yo-fitness.png" alt="logo-orange-bleu"></h5></article>
				<article class="col-sm-2"><h5><img src="images/logo-gopro.png" alt="logo-jawbone"></h5></article>
			</aside>
		</section>
		<!--END PARTENAIRE-->

		<!--CONTACTER-->
		<section class="centrer contacter" id="contact">
			<h3>Nous Contacter</h3>
			<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
			<section class="form-contact ">
				<form class="well form-horizontal" method="post"  id="contact_form">
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="first_name" placeholder="Prénom" class="form-control"  type="text" required>
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="last_name" placeholder="Nom de famille" class="form-control"  type="text" required>
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input name="email" placeholder="Adresse E-Mail" class="form-control"  type="text" required>
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								<input name="phone" placeholder="+33" class="form-control" type="text">
							</div>
						</div>
					</div>
					<!-- Text area -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<textarea class="form-control" name="comment" placeholder="Commentez..."></textarea>
							</div>
						</div>
					</div>
					<!-- Success message -->
					<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
					<!-- Button -->
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Envoyer<span class="glyphicon glyphicon-send padding-icon-left"></span></button>
					</div>
				</form>
			</section>
		</section>
		<!--END CONTACTER-->

		<footer class="centrer footer">
			<a class="rect js-scrollTo" href=".carousel">
				<span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
			</a>
			<ul class="row" id="links">
				<li><a href="">Mentions Légales</a></li>
				<li><a href=""> - Nous Suivre</a></li>
				<li><a href=""> - Besoin Aide</a></li>
			</ul>
			<div>
                    <ul class="essai social-network social-circle row" >
                        <li><a href="#" class="icoFacebook col-md-6" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter col-md-6" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>				
				</div>
			<p>Copyright © 2016 Apifit. Tous droits réservés.</p>
		</footer>

		<?php if ($_COOKIE['accept_cookies']!="accepted"){?> <!-- if the cookie is there, the banner does not display. -->
     <div class=row id="cookies">
       <div>
				 En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous offrir un meilleur service.
 				<br/>Pour en savoir plus et savoir comment paramétrer ces cookies : <a href="#" class="white underline" >Cliquez-ici</a>
       </div>
       <div>
         <button type="button" id="acc_cookies" class="btn btn-primary">OK</button>
       </div>
     </div>
     <?php  }?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.js"></script>
		<script type="text/javascript" src="js/apifit.js"></script>
		<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})

		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
		</script>
		<script>
		$('#acc_cookies').click(function(e) {
			e.preventDefault();
			$.ajax({
				url: "php/setcookie_accepted.php",
				type: 'POST',
				success: function(data) {
					$("#cookies").hide();
				}
			});
		});
		</script>
	</body>
	</html>
