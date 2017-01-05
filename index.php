<!DOCTYPE html>
<html lang="fr">
<head>
	<link href="bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<Link rel="SHORTCUT ICON" href="images/logo-apifit.png">
	<link rel="stylesheet" href="css/default.css"/>
	<link rel="stylesheet" href="css/large_screen.css"/>
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/middle_screen.css"/>
	<link rel="stylesheet" media="screen and (max-width: 770px)" href="css/small_screen.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! ">
	<title>Apifit</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/controller.js"></script>
</head>
<body ng-app="mainApp">

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
		    <ul class="nav navbar-nav" id ="buttonleft">
		      <li><a href="#"><span class="glyphicon glyphicon-home padding-icon-right"></span>Accueil</a></li>
		      <li><a class="js-scrollTo" href="#contact"><span class="glyphicon glyphicon-earphone padding-icon-right"></span>Contact</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right" id= "buttonright">
		      <li><a href="#" data-toggle="modal" data-target="#ModalInsc"><span class="glyphicon glyphicon-user padding-icon-right"></span><span id="legende">Inscription</span></a></li>
		      <li><a href="#" data-toggle="modal" data-target="#ModalConn"><span class="glyphicon glyphicon-log-in padding-icon-right"></span><span id="legende">Connexion</span></a></li>
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
				<li><a class="js-scrollTo" href="#service">Services</a></li>
				<li><a class="js-scrollTo" href="#equipe">&Eacute;quipe</a></li>
				<li><a class="js-scrollTo" href="#contact">Contact</a></li>
			</ul>
		</nav>
	</nav>
<!--END MENU-->

<!-- Modal inscription-->
  <div class="modal fade" id="ModalInsc" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><span class="glyphicon glyphicon-user padding-icon-right"></span> Inscription</h3>
        </div>
        <div class="modal-body">
          <p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
        </div>
        <form ng-controller="signupCtrl" id="register_form" action ="/">
		  <div class="form-group">
		    <label for="first_name">Prenom :</label>
		    <input type="text" class="form-control" name="first_name" placeholder="Prenom" ng-model="name">
		  </div>
		  <div class="form-group">
		    <label for="family_name">Nom :</label>
		    <input type="text" class="form-control" name="family_name" placeholder="Nom"  ng-model="lastname">
		  </div>
		  <div class="form-group">
		    <label for="phone">Telephone :</label>
		    <input type="text" class="form-control" name="phone" placeholder="Telephone"  ng-model="phone">
		  </div>
		  <div class="form-group">
		    <label for="email">Adresse email :</label>
		    <input type="email" class="form-control" name="email" placeholder="Adresse Email"  ng-model="email">
		  </div>
		  <div class="form-group">
		    <label for="Password1">Mot de passe :</label>
		    <input type="password" required class="form-control" id ="password" name="Password1" placeholder="******" ng-model="password">
		  </div>
		  <div class="form-group">
		    <label for="Password2">Repetez le mot de passe :</label>
		    <input type="password" required class="form-control" id ="confirm_password" name="Password2" placeholder="******" ng-model="password2">
		  </div>
		  <div class="formsubmit">
		  <button ng-click="submit()" type="button" class="btn btn-info">Envoyer<span class="glyphicon glyphicon-send padding-icon-left"></span></button>
		  </div>
		</form>
      </div>
      
    </div>
  </div>

<!-- END MODAL -->

<!-- Modal connexion-->
  <div class="modal fade" id="ModalConn" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h3 class="modal-title"><span class="glyphicon glyphicon-log-in padding-icon-right"></span> Connexion</h3>
        </div>
       	
        <form ng-controller="loginCtrl" id="register_form" action ="/">
		  
		  <div  class="form-group">
		    <label for="email">Adresse email :</label>
		    <input ng-model="emailaddress" type="email" class="form-control" name="email" placeholder="Adresse Email">
		  </div>
		  <div class="form-group">
		    <label for="Password">Mot de passe :</label>
		    <input ng-model="password" type="password" required class="form-control" id ="Password" name="Password1" placeholder="******">
		  </div>
		  <div class="formsubmit">
		  <button ng-click="submit()" type="button" class="btn btn-info">Envoyer<span class="glyphicon glyphicon-send padding-icon-left"></span></button>
		  </div>
		</form>
		
      </div>
      
    </div>
  </div>

<!-- END MODAL -->

<!--INTRO-->
<section class="centrer" id="accueil">
	<div class=container>
		<h3 >Qui sommes nous ?</h3>
		<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
			permettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
	</div>	
</section>
<!--END INTRO-->

		<!--SERVICES-->
		<section class="centrer service" id="service">
			<h3>Nos Services</h3>
			
<div class="container">
 <div class="row">
  <div class="process">
   <div class="process-row nav nav-tabs">
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle " data-toggle="tab" href="#menu1"><i class="fa fa-user fa-3x"></i></button>
     <p><small>&Eacute;diter<br />votre Profil</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-line-chart fa-3x"></i></button>
     <p><small>Récupérer vos Données<br />Quantify-Self</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-trophy fa-3x"></i></button>
     <p><small>Coach & Programmes<br />personnalisés</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-spinner fa-3x"></i></button>
     <p><small>Créer une<br />Communauté de Sportif</small></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-comments-o fa-3x"></i></button>
     <p><small>Partager<br />votre Passion</small></p>
    </div>
   </div>
  </div>
  <div class="tab-content">
   <div id="menu1" class="tab-pane fade active in">
    <h3>&Eacute;dition<br />du Profil</h3> 
    <h4>Inscription et édition<br/>
    du profil et des attentes de l'utilisateur<br/>
    de la plateforme (sport pratiqué, niveau)</h4>
   </div>
   
   <div id="menu2" class="tab-pane fade">
    <h3>Récupération Données<br />Quantify-Self</h3>
    <h4>Collection et récupération des données<br/>
    Quantify-Self de l'utilisateur via les bracelets<br/>
    et objets connectés</h4>
   
   </div>
   <div id="menu3" class="tab-pane fade">
    <h3>Coach & Programmes<br />personnalisés</h3>
    <h4>Algorithme intélligent qui génère<br/>
    des programmes d'entraînements<br/>
    et des exercices adaptées à l'utilisateur</h4>
 
   </div>
   <div id="menu4" class="tab-pane fade">
    <h3>Création<br />Communauté de sportif</h3>
    <h4>Gérer et construiser un réseau de sportifs.<br/>
    Une plateforme unique permettant aux sportifs<br/>de communiquer, de challenger,<br/>
	rechercher des partenaires qui pratiquent le même sport,<br/>
	créer des événements.</h4>
  
   </div>
   <div id="menu5" class="tab-pane fade">
    <h3>Partager<br />votre Passion</h3>
    <h4>On pratique pas le même sport,<br/>
    mais on a la même passion</h4>
   </div>
  </div>
 </div>
</div>
			<!--<ul>
				<li class="col-sm-3">
				
					<img src="images/icon-prof.png" alt="icon-profil" id="profile">
					<h4>Un parcours constructif conforme à votre niveau</h4>
					
					<img src="images/icon-stats.png" alt="icon-statistique">
					<h4>Analysez vos statistiques</h4>
				</li>
				<li class="col-sm-3 col-sm-offset-6">
					<img src="images/icon-com.png" alt="icon-communaute">
					<h4>Rejoignez la communauté Apifit et ses défis</h4>

					<img src="images/icon-cons.png" alt="icon-conseil">
					<h4>Des exercices et des conseils</h4></li>
			</ul>-->
			
			
		</section>
		<!--END SERVICES-->

		<!--VIDEO-->
		<section class="centrer video">
			<h3>Vidéo de présentation</h3>
<!-- 			<img src="images/ordi-video.png" alt="ordi-video">
 -->		<div class="contenu-video">
 				<section class ="fondordi">
 					<img alt="LogoApifit" src="images/logo-apifit.png" height="200" width="200">
 					<h3>Apifit</h3>
				</section>
				<!-- <video   controls="controls">
					<source src="" type="video/mp4" />
					<object type="application/x-shockwave-flash" data="https://youtu.be/FlTCAqOcqbo">
							<param name="movie" value="https://youtu.be/FlTCAqOcqbo" />
							<param name="wmode" value="transparent" />
							[if lte IE 6 ]>
							<embed src="https://youtu.be/FlTCAqOcqbo" type="application/x-shockwave-flash"  allowscriptaccess="always" allowfullscreen="true" width="400" height="222">
							</embed>
						<![endif]
						Vous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
					</object>
				</video> -->
			</div>
		</section>
		<!--END VIDEO-->

		<!--EQUIPE-->
		<div class="home-doctors  clearfix">
		<section class="centrer equipe" id="equipe">
			<h3>Notre équipe</h3>
			<aside class="row" id="centrerequipe">
				<article class ="col-md-1"></article>
				<article class="col-md-2 text-center doc-item" id ="casemembres">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a target="_blank" href="https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:vincentbas92@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/Vincent.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Vincent BAS</h5>
							<h5><small>Objets connectés</small></h5>
						</div>
					</div>
				</article>
				
				<article class="col-md-2 text-center doc-item" id ="casemembres">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate"">
							<li><a target="_blank" href="https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin"></i></a></li>
							<li><a thref="mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/Charles.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Charles ANDRE</h5>
							<h5><small>Systèmes d'information</small></h5>
						</div>
					</div>
				</article>
				<article class="col-md-2 text-center doc-item" id ="casemembres">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a target="_blank" href="https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH"><i class="fa fa-linkedin"></i></a></li>
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
				<article class="col-md-2 text-center doc-item" id ="casemembres">
					<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

						<ul class="list-inline social-lists animate">
							<li><a target="_blank" href="https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:remialabadan@gmail.com?Subject=Site%20Apifit"><i class="fa fa-envelope-o"></i></a></li>
						</ul>

						<figure>
								<img width="670" height="500" src="images/Remi.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
						</figure>

						<div class="text-content">
							<h5>Rémi ALABADAN</h5>
							<h5><small>Energies Environnements</small></h5>
						</div>
					</div>
				</article>
				<article class="col-md-2 text-center doc-item" id ="casemembres">
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
				<article class ="col-md-1"></article>
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
		<section class="centrer contacter col-md-12" id="contact">
			<h3>Nous Contacter</h3>
			<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
			<section class="form-contact ">
				<form class="well form-horizontal" method="post"  id="contact_form" action ="php/formmail.php">
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

		<footer class="centrer footer col-sm-12">
			<a class="rect js-scrollTo col-sm-12" href=".carousel">
				<span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
			</a>
			<ul class="row col-md-12" id="links">
				<li><a href="">Mentions Légales</a></li>
				<li><a href=""> - Nous Suivre</a></li>
				<li><a href=""> - Besoin Aide</a></li>
			</ul>
			<div>
                    <ul class="essai social-network social-circle row" >
                        <li><a target="_blank" href="https://www.facebook.com/Apifit-166037367198199/?fref=ts" class="icoFacebook col-md-6" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC0cmD6pie45Hfhj9lTXYVnA" class="icoYoutube col-md-6" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/Apifit_Ece" class="icoTwitter col-md-6" title="Twitter"><i class="fa fa-twitter"></i></a></li>
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
         <button type="button" id="acc_cookies" class="btn btn-info">OK</button>
       </div>
     </div>
     <?php  }?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script src="bootstrap/bootstrap.js"></script>
		<script type="text/javascript" src="js/apifit.js"></script>
		<script type="text/javascript" src="js/service-process.js"></script>
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