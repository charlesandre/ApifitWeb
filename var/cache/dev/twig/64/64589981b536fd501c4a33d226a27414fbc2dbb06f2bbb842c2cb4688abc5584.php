<?php

/* default/index.html.twig */
class __TwigTemplate_5668d978bca4ce4a0005ace3c7f393a2e19dc7df8534fe6e506485595bf6d259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00d27c211ae3e8024968e8a570677382c56b95c0e9a611ff3c9a5a6bcff4edda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d27c211ae3e8024968e8a570677382c56b95c0e9a611ff3c9a5a6bcff4edda->enter($__internal_00d27c211ae3e8024968e8a570677382c56b95c0e9a611ff3c9a5a6bcff4edda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b0f5445b66c2fe089c303ee7e16eb3e6696bdbe8cc8261f0a0a78789d6747a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f5445b66c2fe089c303ee7e16eb3e6696bdbe8cc8261f0a0a78789d6747a6e->enter($__internal_b0f5445b66c2fe089c303ee7e16eb3e6696bdbe8cc8261f0a0a78789d6747a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<Link rel=\"SHORTCUT ICON\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-apifit.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/default.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/large_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/middle_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/small_screen.css"), "html", null, true);
        echo "\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-messages.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-password.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/ControllerIndex.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body ng-app=\"mainApp\">

\t\t<header id=\"myCarousel\" class=\"carousel slide\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=banner_links>
\t\t\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id =\"buttonleft\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-home padding-icon-right\"></span>Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\"><span class=\"glyphicon glyphicon-earphone padding-icon-right\"></span>Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" id= \"buttonright\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalInsc\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span><span id=\"legende\">Inscription</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalConn\"><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Connexion</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/header-basket.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/header-fitness.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Fitness\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/header-rugby.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Rugby\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/header-foot.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Foot\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"icon-prev\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<span class=\"icon-next\"></span>
\t\t\t</a>

\t\t</header>
\t\t<!--END CAROUSSEL HEADER-->



\t\t<!-- MENU-->
\t\t<nav class=\"navbar navbar-default menu container-fluid\">
\t\t\t<!-- <div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"\" alt=\"logo-apifit\"></a>
\t\t</div> -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bar_menu\" aria-expanded=\"false\" aria-controls=\"navbar\" style=\"margin-left:20px\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"navbar-collapse collapse\" id=\"bar_menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#accueil\" >Accueil</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#service\">Services</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#equipe\">&Eacute;quipe</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t</nav>
\t<!--END MENU-->

\t<!-- Modal inscription-->
\t<div class=\"modal fade\" id=\"ModalInsc\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>
\t\t\t<!--\t<form name=\"myForm\" ng-controller=\"signupCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">Prénom :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre prénom</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">Nom :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Nom\" ng-model=\"last_name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.last_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre nom</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"phone\">Telephone :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"Telephone\"  ng-model=\"phone\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre numéro de téléphone.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Adresse email :</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre adresse email.</div>
\t\t\t\t\t\t<div ng-show=\"myForm.email.\$error.pattern\"> Cet email n'est pas valide ! </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password1\">Mot de passe :</label>
\t\t\t\t\t\t<input type=\"password\" required class=\"form-control\" id =\"password\" name=\"Password1\" placeholder=\"******\" ng-model=\"password\" ng-minlength=\"5\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.Password1.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre mot de passe</div>
\t\t\t\t\t\t<div ng-message=\"minlength\">Votre mot de passe est trop court</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password2\">Répetez le mot de passe :</label>
\t\t\t\t\t\t<input type=\"password\" required class=\"form-control\" id =\"confirm_password\" name=\"Password2\" placeholder=\"******\" ng-model=\"password2\" match-password=\"Password1\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.Password2.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez confirmer le mot de passe</div>
\t\t\t\t\t\t<div ng-message=\"passwordMatch\">Les mots de passes ne sont pas identiques</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"formsubmit\">
\t\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myForm.\$invalid\" type=\"button\" class=\"btn btn-info\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t\t</div>

\t\t\t\t</form>-->
\t\t\t\t";
        // line 182
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t    ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uemail", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upassword", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uname", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulastname", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 187
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uphone", array()), 'row');
        echo "
\t\t\t\t    <button type=\"submit\">Register!</button>
\t\t\t\t";
        // line 189
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- END MODAL -->

\t<!-- Modal connexion-->
\t<div class=\"modal fade\" id=\"ModalConn\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span> Connexion</h3>
\t\t\t\t</div>

\t\t\t\t<form name=\"myForm2\" ng-controller=\"loginCtrl\" id=\"register_form\" action=\"/\">

\t\t\t\t\t<div  class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Adresse email :</label>
\t\t\t\t\t\t<input ng-model=\"emailaddress\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm2.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Entrez votre addresse email </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password\">Mot de passe :</label>
\t\t\t\t\t\t<input ng-model=\"password\" type=\"password\" required class=\"form-control\" id =\"Password\" name=\"password\" placeholder=\"******\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm2.Password1.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Entrez votre mot de passe</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"formsubmit\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- END MODAL -->

\t<!--INTRO-->
\t<section class=\"centrer\" id=\"accueil\">
\t\t<div class=container>
\t\t\t<h3 >Qui sommes nous ?</h3>
\t\t\t<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
\t\t\t\tpermettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
\t\t\t</div>
\t\t</section>
\t\t<!--END INTRO-->

\t\t<!--SERVICES-->
\t\t<section class=\"centrer service\" id=\"service\">
\t\t\t<h3>Nos Services</h3>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"process\">
\t\t\t\t\t\t<div class=\"process-row nav nav-tabs\">
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle \" data-toggle=\"tab\" href=\"#menu1\"><i class=\"fa fa-user fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>&Eacute;diter<br />votre Profil</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu2\"><i class=\"fa fa-line-chart fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Récupérer vos Données<br />Quantify-Self</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu3\"><i class=\"fa fa-trophy fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Coach & Programmes<br />personnalisés</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu4\"><i class=\"fa fa-spinner fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Créer une<br />Communauté de Sportif</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu5\"><i class=\"fa fa-comments-o fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Partager<br />votre Passion</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade active in\">
\t\t\t\t\t\t\t<h3>&Eacute;dition<br />du Profil</h3>
\t\t\t\t\t\t\t<h4>Inscription et édition<br/>
\t\t\t\t\t\t\t\tdu profil et des attentes de l'utilisateur<br/>
\t\t\t\t\t\t\t\tde la plateforme (sport pratiqué, niveau)</h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"menu2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<h3>Récupération Données<br />Quantify-Self</h3>
\t\t\t\t\t\t\t\t<h4>Collection et récupération des données<br/>
\t\t\t\t\t\t\t\t\tQuantify-Self de l'utilisateur via les bracelets<br/>
\t\t\t\t\t\t\t\t\tet objets connectés</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"menu3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h3>Coach & Programmes<br />personnalisés</h3>
\t\t\t\t\t\t\t\t\t<h4>Algorithme intélligent qui génère<br/>
\t\t\t\t\t\t\t\t\t\tdes programmes d'entraînements<br/>
\t\t\t\t\t\t\t\t\t\tet des exercices adaptées à l'utilisateur</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"menu4\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t<h3>Création<br />Communauté de sportif</h3>
\t\t\t\t\t\t\t\t\t\t<h4>Gérer et construiser un réseau de sportifs.<br/>
\t\t\t\t\t\t\t\t\t\t\tUne plateforme unique permettant aux sportifs<br/>de communiquer, de challenger,<br/>
\t\t\t\t\t\t\t\t\t\t\trechercher des partenaires qui pratiquent le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\tcréer des événements.</h4>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"menu5\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Partager<br />votre Passion</h3>
\t\t\t\t\t\t\t\t\t\t\t<h4>On pratique pas le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\t\tmais on a la même passion</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t<!--<ul>
\t\t\t\t<li class=\"col-sm-3\">

\t\t\t\t\t<img src=\"images/icon-prof.png\" alt=\"icon-profil\" id=\"profile\">
\t\t\t\t\t<h4>Un parcours constructif conforme à votre niveau</h4>

\t\t\t\t\t<img src=\"images/icon-stats.png\" alt=\"icon-statistique\">
\t\t\t\t\t<h4>Analysez vos statistiques</h4>
\t\t\t\t</li>
\t\t\t\t<li class=\"col-sm-3 col-sm-offset-6\">
\t\t\t\t\t<img src=\"images/icon-com.png\" alt=\"icon-communaute\">
\t\t\t\t\t<h4>Rejoignez la communauté Apifit et ses défis</h4>

\t\t\t\t\t<img src=\"images/icon-cons.png\" alt=\"icon-conseil\">
\t\t\t\t\t<h4>Des exercices et des conseils</h4></li>
\t\t\t\t</ul>-->


\t\t\t</section>
\t\t\t<!--END SERVICES-->

\t\t\t<!--VIDEO-->
\t\t\t<section class=\"centrer video\">
\t\t\t\t<h3>Vidéo de présentation</h3>
<!-- \t\t\t<img src=\"images/ordi-video.png\" alt=\"ordi-video\">
-->\t\t<div class=\"contenu-video\">
<section class =\"fondordi\">
\t<img alt=\"LogoApifit\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-apifit.png"), "html", null, true);
        echo "\" height=\"200\" width=\"200\">
\t<h3>Apifit</h3>
</section>
\t\t\t\t<!-- <video   controls=\"controls\">
\t\t\t\t\t<source src=\"\" type=\"video/mp4\" />
\t\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"https://youtu.be/FlTCAqOcqbo\">
\t\t\t\t\t\t\t<param name=\"movie\" value=\"https://youtu.be/FlTCAqOcqbo\" />
\t\t\t\t\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t\t\t\t\t[if lte IE 6 ]>
\t\t\t\t\t\t\t<embed src=\"https://youtu.be/FlTCAqOcqbo\" type=\"application/x-shockwave-flash\"  allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"400\" height=\"222\">
\t\t\t\t\t\t\t</embed>
\t\t\t\t\t\t<![endif]
\t\t\t\t\t\tVous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
\t\t\t\t\t</object>
\t\t\t\t</video> -->
\t\t\t</div>
\t\t</section>
\t\t<!--END VIDEO-->

\t\t<!--EQUIPE-->
\t\t<div class=\"home-doctors  clearfix\">
\t\t\t<section class=\"centrer equipe\" id=\"equipe\">
\t\t\t\t<h3>Notre équipe</h3>
\t\t\t\t<aside class=\"row\" id=\"centrerequipe\">
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/Vincent.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Vincent BAS</h5>
\t\t\t\t\t\t\t\t<h5><small>Objets connectés</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a thref=\"mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/Charles.png"), "html", null, true);
        echo "\"class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Charles ANDRE</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:samuelbenais@outlook.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/profil.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Samuel BENAÏS</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:remialabadan@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/Remi.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Rémi ALABADAN</h5>
\t\t\t\t\t\t\t\t<h5><small>Energies Environnements</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/bayramfatih?authType=NAME_SEARCH&authToken=eQ0O&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A418660352%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506653484%2Ctas%3Afati\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:fatih.b@live.fr?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/profil.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Fatih BAYRAM</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes Embarqués</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t<!--<article class=\"col-sm-2 char\"><h5><img src=\"images/businessman.png\" alt=\"Vincent BAS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/dj.png\" alt=\"Charles ANDRE\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/croupier.png\" alt=\"Samuel BENAIS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/showman.png\" alt=\"Fatih BAYRAM\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/detective.png\" alt=\"Rémi ALABADAN\"></h5></article>-->
\t\t\t</aside>
\t\t</section>
\t</div>
\t<!--END EQUIPE-->

\t<!--PARTENAIRE-->
\t<section class=\"centrer partenaire\">
\t\t<h3>Nos Partenaires</h3>
\t\t<p>Ils nous ont fait confiance ...</p>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-fitbit.png"), "html", null, true);
        echo "\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-withings.png"), "html", null, true);
        echo "\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-orange-bleu.png"), "html", null, true);
        echo "\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-jawbone.png"), "html", null, true);
        echo "\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-forest-hill.png"), "html", null, true);
        echo "\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-garmin.png"), "html", null, true);
        echo "\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-yo-fitness.png"), "html", null, true);
        echo "\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-gopro.png"), "html", null, true);
        echo "\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t</section>
\t<!--END PARTENAIRE-->

\t<!--CONTACTER-->
\t<section class=\"centrer contacter col-md-12\" id=\"contact\">
\t\t<h3>Nous Contacter</h3>
\t\t<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
\t\t<section class=\"form-contact\" ng-controller=\"contactCtrl\">

\t\t\t<form class=\"well form-horizontal\" name=\"myFormCont\" ng-controller=\"contactCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"family_name\" placeholder=\"Nom\"  ng-model=\"lastname\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.family_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t\t<div ng-show=\"myFormCont.email.\$error.pattern\"> Cet email n'est pas valide ! </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"+33\"  ng-model=\"phone\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text area -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
\t\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" ng-minlength=\"30\" name=\"com\" placeholder=\"Commenter..\"  ng-model=\"com\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.com.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t\t<div ng-message=\"minlength\">Votre commentaire est trop court, minimum 30 caractères.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Success message -->

\t\t\t\t<!-- Button -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myFormCont.\$invalid\" type=\"button\" class=\"btn btn-primary\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</section>
\t</section>
\t<!--END CONTACTER-->

\t<footer class=\"centrer footer\">
\t\t<a class=\"rect js-scrollTo\" href=\".carousel\">
\t\t\t<span class=\"glyphicon glyphicon-menu-up\" aria-hidden=\"true\"></span>
\t\t</a>
\t\t<ul class=\"row\" id=\"links\">
\t\t\t<li><a href=\"#\">Mentions Légales</a></li>
\t\t\t<li><a href=\"#\"> - Nous Suivre</a></li>
\t\t\t<li><a href=\"#\"> - Besoin Aide</a></li>
\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"essai social-network social-circle row\" >
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/Apifit-166037367198199/?fref=ts\" class=\"icoFacebook col-md-6\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com/channel/UC0cmD6pie45Hfhj9lTXYVnA\" class=\"icoYoutube col-md-6\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/Apifit_Ece\" class=\"icoTwitter col-md-6\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<p>Copyright © 2016 Apifit. Tous droits réservés.</p>
\t</footer>

\t<?php if (\$_COOKIE['accept_cookies']!=\"accepted\"){?> <!-- if the cookie is there, the banner does not display. -->
\t<div class=row id=\"cookies\">
\t\t<div>
\t\t\tEn poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous offrir un meilleur service.
\t\t\t<br/>Pour en savoir plus et savoir comment paramétrer ces cookies : <a href=\"#\" class=\"white underline\" >Cliquez-ici</a>
\t\t</div>
\t\t<div>
\t\t\t<button type=\"button\" id=\"acc_cookies\" class=\"btn btn-info\">OK</button>
\t\t</div>
\t</div>
\t<?php  }?>

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js\"></script>
\t<script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/apifit.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/service-process.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.carousel').carousel({
\t\t\tinterval: 5000 //changes the speed
\t\t})

\t\t\$('.js-scrollTo').on('click', function() { // Au clic sur un élément
\t\t\tvar page = \$(this).attr('href'); // Page cible
\t\t\tvar speed = 750; // Durée de l'animation (en ms)
\t\t\t\$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
\t\t\treturn false;
\t\t});
\t</script>

\t<script>
\t\t\$('#acc_cookies').click(function(e) {
\t\t\te.preventDefault();
\t\t\t\$.ajax({
\t\t\t\turl: \"php/setcookieAccepted.php\",
\t\t\t\ttype: 'POST',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\$(\"#cookies\").hide();
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</body>
</html>
";
        
        $__internal_00d27c211ae3e8024968e8a570677382c56b95c0e9a611ff3c9a5a6bcff4edda->leave($__internal_00d27c211ae3e8024968e8a570677382c56b95c0e9a611ff3c9a5a6bcff4edda_prof);

        
        $__internal_b0f5445b66c2fe089c303ee7e16eb3e6696bdbe8cc8261f0a0a78789d6747a6e->leave($__internal_b0f5445b66c2fe089c303ee7e16eb3e6696bdbe8cc8261f0a0a78789d6747a6e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 597,  730 => 596,  726 => 595,  610 => 482,  606 => 481,  602 => 480,  598 => 479,  592 => 476,  588 => 475,  584 => 474,  580 => 473,  552 => 448,  531 => 430,  510 => 412,  489 => 394,  467 => 375,  430 => 341,  275 => 189,  270 => 187,  266 => 186,  262 => 185,  258 => 184,  254 => 183,  250 => 182,  138 => 73,  127 => 65,  116 => 57,  105 => 49,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"{{ asset('www/bootstrap/bootstrap.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<Link rel=\"SHORTCUT ICON\" href=\"{{ asset('www/images/logo-apifit.png') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('www/css/default.css') }}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('www/css/large_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"{{ asset('www/css/middle_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"{{ asset('www/css/small_screen.css') }}\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"{{ asset('www/js/angular-route.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/angular-messages.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/angular-password.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/ControllerIndex.js')}}\"></script>
\t</head>
\t<body ng-app=\"mainApp\">

\t\t<header id=\"myCarousel\" class=\"carousel slide\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=banner_links>
\t\t\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id =\"buttonleft\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-home padding-icon-right\"></span>Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\"><span class=\"glyphicon glyphicon-earphone padding-icon-right\"></span>Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" id= \"buttonright\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalInsc\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span><span id=\"legende\">Inscription</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalConn\"><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Connexion</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"{{ asset('www/images/header-basket.jpg') }}\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('www/images/header-fitness.jpg') }}\" alt=\"Apifit Fitness\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('www/images/header-rugby.jpg') }}\" alt=\"Apifit Rugby\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('www/images/header-foot.jpg') }}\" alt=\"Apifit Foot\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"icon-prev\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<span class=\"icon-next\"></span>
\t\t\t</a>

\t\t</header>
\t\t<!--END CAROUSSEL HEADER-->



\t\t<!-- MENU-->
\t\t<nav class=\"navbar navbar-default menu container-fluid\">
\t\t\t<!-- <div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"\" alt=\"logo-apifit\"></a>
\t\t</div> -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bar_menu\" aria-expanded=\"false\" aria-controls=\"navbar\" style=\"margin-left:20px\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"navbar-collapse collapse\" id=\"bar_menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#accueil\" >Accueil</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#service\">Services</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#equipe\">&Eacute;quipe</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t</nav>
\t<!--END MENU-->

\t<!-- Modal inscription-->
\t<div class=\"modal fade\" id=\"ModalInsc\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>
\t\t\t<!--\t<form name=\"myForm\" ng-controller=\"signupCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">Prénom :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre prénom</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">Nom :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Nom\" ng-model=\"last_name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.last_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre nom</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"phone\">Telephone :</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"Telephone\"  ng-model=\"phone\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre numéro de téléphone.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Adresse email :</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre adresse email.</div>
\t\t\t\t\t\t<div ng-show=\"myForm.email.\$error.pattern\"> Cet email n'est pas valide ! </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password1\">Mot de passe :</label>
\t\t\t\t\t\t<input type=\"password\" required class=\"form-control\" id =\"password\" name=\"Password1\" placeholder=\"******\" ng-model=\"password\" ng-minlength=\"5\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.Password1.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez entrer votre mot de passe</div>
\t\t\t\t\t\t<div ng-message=\"minlength\">Votre mot de passe est trop court</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password2\">Répetez le mot de passe :</label>
\t\t\t\t\t\t<input type=\"password\" required class=\"form-control\" id =\"confirm_password\" name=\"Password2\" placeholder=\"******\" ng-model=\"password2\" match-password=\"Password1\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm.Password2.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t<div ng-message=\"required\">Veuillez confirmer le mot de passe</div>
\t\t\t\t\t\t<div ng-message=\"passwordMatch\">Les mots de passes ne sont pas identiques</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"formsubmit\">
\t\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myForm.\$invalid\" type=\"button\" class=\"btn btn-info\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t\t</div>

\t\t\t\t</form>-->
\t\t\t\t{{ form_start(form) }}
\t\t\t\t    {{ form_row(form.uemail) }}
\t\t\t\t    {{ form_row(form.upassword) }}
\t\t\t\t    {{ form_row(form.uname) }}
\t\t\t\t\t\t{{ form_row(form.ulastname) }}
\t\t\t\t\t\t{{ form_row(form.uphone) }}
\t\t\t\t    <button type=\"submit\">Register!</button>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- END MODAL -->

\t<!-- Modal connexion-->
\t<div class=\"modal fade\" id=\"ModalConn\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span> Connexion</h3>
\t\t\t\t</div>

\t\t\t\t<form name=\"myForm2\" ng-controller=\"loginCtrl\" id=\"register_form\" action=\"/\">

\t\t\t\t\t<div  class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Adresse email :</label>
\t\t\t\t\t\t<input ng-model=\"emailaddress\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm2.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Entrez votre addresse email </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"Password\">Mot de passe :</label>
\t\t\t\t\t\t<input ng-model=\"password\" type=\"password\" required class=\"form-control\" id =\"Password\" name=\"password\" placeholder=\"******\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-messages=\"myForm2.Password1.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t<div ng-message=\"required\">Entrez votre mot de passe</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"formsubmit\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- END MODAL -->

\t<!--INTRO-->
\t<section class=\"centrer\" id=\"accueil\">
\t\t<div class=container>
\t\t\t<h3 >Qui sommes nous ?</h3>
\t\t\t<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
\t\t\t\tpermettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
\t\t\t</div>
\t\t</section>
\t\t<!--END INTRO-->

\t\t<!--SERVICES-->
\t\t<section class=\"centrer service\" id=\"service\">
\t\t\t<h3>Nos Services</h3>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"process\">
\t\t\t\t\t\t<div class=\"process-row nav nav-tabs\">
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle \" data-toggle=\"tab\" href=\"#menu1\"><i class=\"fa fa-user fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>&Eacute;diter<br />votre Profil</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu2\"><i class=\"fa fa-line-chart fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Récupérer vos Données<br />Quantify-Self</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu3\"><i class=\"fa fa-trophy fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Coach & Programmes<br />personnalisés</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu4\"><i class=\"fa fa-spinner fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Créer une<br />Communauté de Sportif</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu5\"><i class=\"fa fa-comments-o fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Partager<br />votre Passion</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade active in\">
\t\t\t\t\t\t\t<h3>&Eacute;dition<br />du Profil</h3>
\t\t\t\t\t\t\t<h4>Inscription et édition<br/>
\t\t\t\t\t\t\t\tdu profil et des attentes de l'utilisateur<br/>
\t\t\t\t\t\t\t\tde la plateforme (sport pratiqué, niveau)</h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"menu2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<h3>Récupération Données<br />Quantify-Self</h3>
\t\t\t\t\t\t\t\t<h4>Collection et récupération des données<br/>
\t\t\t\t\t\t\t\t\tQuantify-Self de l'utilisateur via les bracelets<br/>
\t\t\t\t\t\t\t\t\tet objets connectés</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"menu3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h3>Coach & Programmes<br />personnalisés</h3>
\t\t\t\t\t\t\t\t\t<h4>Algorithme intélligent qui génère<br/>
\t\t\t\t\t\t\t\t\t\tdes programmes d'entraînements<br/>
\t\t\t\t\t\t\t\t\t\tet des exercices adaptées à l'utilisateur</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"menu4\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t<h3>Création<br />Communauté de sportif</h3>
\t\t\t\t\t\t\t\t\t\t<h4>Gérer et construiser un réseau de sportifs.<br/>
\t\t\t\t\t\t\t\t\t\t\tUne plateforme unique permettant aux sportifs<br/>de communiquer, de challenger,<br/>
\t\t\t\t\t\t\t\t\t\t\trechercher des partenaires qui pratiquent le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\tcréer des événements.</h4>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"menu5\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Partager<br />votre Passion</h3>
\t\t\t\t\t\t\t\t\t\t\t<h4>On pratique pas le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\t\tmais on a la même passion</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t<!--<ul>
\t\t\t\t<li class=\"col-sm-3\">

\t\t\t\t\t<img src=\"images/icon-prof.png\" alt=\"icon-profil\" id=\"profile\">
\t\t\t\t\t<h4>Un parcours constructif conforme à votre niveau</h4>

\t\t\t\t\t<img src=\"images/icon-stats.png\" alt=\"icon-statistique\">
\t\t\t\t\t<h4>Analysez vos statistiques</h4>
\t\t\t\t</li>
\t\t\t\t<li class=\"col-sm-3 col-sm-offset-6\">
\t\t\t\t\t<img src=\"images/icon-com.png\" alt=\"icon-communaute\">
\t\t\t\t\t<h4>Rejoignez la communauté Apifit et ses défis</h4>

\t\t\t\t\t<img src=\"images/icon-cons.png\" alt=\"icon-conseil\">
\t\t\t\t\t<h4>Des exercices et des conseils</h4></li>
\t\t\t\t</ul>-->


\t\t\t</section>
\t\t\t<!--END SERVICES-->

\t\t\t<!--VIDEO-->
\t\t\t<section class=\"centrer video\">
\t\t\t\t<h3>Vidéo de présentation</h3>
<!-- \t\t\t<img src=\"images/ordi-video.png\" alt=\"ordi-video\">
-->\t\t<div class=\"contenu-video\">
<section class =\"fondordi\">
\t<img alt=\"LogoApifit\" src=\"{{ asset('www/images/logo-apifit.png') }}\" height=\"200\" width=\"200\">
\t<h3>Apifit</h3>
</section>
\t\t\t\t<!-- <video   controls=\"controls\">
\t\t\t\t\t<source src=\"\" type=\"video/mp4\" />
\t\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"https://youtu.be/FlTCAqOcqbo\">
\t\t\t\t\t\t\t<param name=\"movie\" value=\"https://youtu.be/FlTCAqOcqbo\" />
\t\t\t\t\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t\t\t\t\t[if lte IE 6 ]>
\t\t\t\t\t\t\t<embed src=\"https://youtu.be/FlTCAqOcqbo\" type=\"application/x-shockwave-flash\"  allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"400\" height=\"222\">
\t\t\t\t\t\t\t</embed>
\t\t\t\t\t\t<![endif]
\t\t\t\t\t\tVous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
\t\t\t\t\t</object>
\t\t\t\t</video> -->
\t\t\t</div>
\t\t</section>
\t\t<!--END VIDEO-->

\t\t<!--EQUIPE-->
\t\t<div class=\"home-doctors  clearfix\">
\t\t\t<section class=\"centrer equipe\" id=\"equipe\">
\t\t\t\t<h3>Notre équipe</h3>
\t\t\t\t<aside class=\"row\" id=\"centrerequipe\">
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('www/images/Vincent.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Vincent BAS</h5>
\t\t\t\t\t\t\t\t<h5><small>Objets connectés</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a thref=\"mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('www/images/Charles.png') }}\"class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Charles ANDRE</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:samuelbenais@outlook.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('www/images/profil.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Samuel BENAÏS</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:remialabadan@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('www/images/Remi.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Rémi ALABADAN</h5>
\t\t\t\t\t\t\t\t<h5><small>Energies Environnements</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/bayramfatih?authType=NAME_SEARCH&authToken=eQ0O&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A418660352%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506653484%2Ctas%3Afati\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:fatih.b@live.fr?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('www/images/profil.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Fatih BAYRAM</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes Embarqués</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t<!--<article class=\"col-sm-2 char\"><h5><img src=\"images/businessman.png\" alt=\"Vincent BAS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/dj.png\" alt=\"Charles ANDRE\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/croupier.png\" alt=\"Samuel BENAIS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/showman.png\" alt=\"Fatih BAYRAM\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/detective.png\" alt=\"Rémi ALABADAN\"></h5></article>-->
\t\t\t</aside>
\t\t</section>
\t</div>
\t<!--END EQUIPE-->

\t<!--PARTENAIRE-->
\t<section class=\"centrer partenaire\">
\t\t<h3>Nos Partenaires</h3>
\t\t<p>Ils nous ont fait confiance ...</p>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"{{ asset('www/images/logo-fitbit.png') }}\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-withings.png') }}\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-orange-bleu.png') }}\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-jawbone.png') }}\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"{{ asset('www/images/logo-forest-hill.png') }}\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-garmin.png') }}\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-yo-fitness.png') }}\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('www/images/logo-gopro.png') }}\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t</section>
\t<!--END PARTENAIRE-->

\t<!--CONTACTER-->
\t<section class=\"centrer contacter col-md-12\" id=\"contact\">
\t\t<h3>Nous Contacter</h3>
\t\t<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
\t\t<section class=\"form-contact\" ng-controller=\"contactCtrl\">

\t\t\t<form class=\"well form-horizontal\" name=\"myFormCont\" ng-controller=\"contactCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"family_name\" placeholder=\"Nom\"  ng-model=\"lastname\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.family_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.email.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t\t<div ng-show=\"myFormCont.email.\$error.pattern\"> Cet email n'est pas valide ! </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"+33\"  ng-model=\"phone\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text area -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
\t\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" ng-minlength=\"30\" name=\"com\" placeholder=\"Commenter..\"  ng-model=\"com\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.com.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t\t<div ng-message=\"minlength\">Votre commentaire est trop court, minimum 30 caractères.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Success message -->

\t\t\t\t<!-- Button -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myFormCont.\$invalid\" type=\"button\" class=\"btn btn-primary\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</section>
\t</section>
\t<!--END CONTACTER-->

\t<footer class=\"centrer footer\">
\t\t<a class=\"rect js-scrollTo\" href=\".carousel\">
\t\t\t<span class=\"glyphicon glyphicon-menu-up\" aria-hidden=\"true\"></span>
\t\t</a>
\t\t<ul class=\"row\" id=\"links\">
\t\t\t<li><a href=\"#\">Mentions Légales</a></li>
\t\t\t<li><a href=\"#\"> - Nous Suivre</a></li>
\t\t\t<li><a href=\"#\"> - Besoin Aide</a></li>
\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"essai social-network social-circle row\" >
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/Apifit-166037367198199/?fref=ts\" class=\"icoFacebook col-md-6\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com/channel/UC0cmD6pie45Hfhj9lTXYVnA\" class=\"icoYoutube col-md-6\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/Apifit_Ece\" class=\"icoTwitter col-md-6\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<p>Copyright © 2016 Apifit. Tous droits réservés.</p>
\t</footer>

\t<?php if (\$_COOKIE['accept_cookies']!=\"accepted\"){?> <!-- if the cookie is there, the banner does not display. -->
\t<div class=row id=\"cookies\">
\t\t<div>
\t\t\tEn poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous offrir un meilleur service.
\t\t\t<br/>Pour en savoir plus et savoir comment paramétrer ces cookies : <a href=\"#\" class=\"white underline\" >Cliquez-ici</a>
\t\t</div>
\t\t<div>
\t\t\t<button type=\"button\" id=\"acc_cookies\" class=\"btn btn-info\">OK</button>
\t\t</div>
\t</div>
\t<?php  }?>

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js\"></script>
\t<script src=\"{{ asset('www/bootstrap/bootstrap.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('www/js/apifit.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('www/js/service-process.js') }}\"></script>
\t<script>
\t\t\$('.carousel').carousel({
\t\t\tinterval: 5000 //changes the speed
\t\t})

\t\t\$('.js-scrollTo').on('click', function() { // Au clic sur un élément
\t\t\tvar page = \$(this).attr('href'); // Page cible
\t\t\tvar speed = 750; // Durée de l'animation (en ms)
\t\t\t\$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
\t\t\treturn false;
\t\t});
\t</script>

\t<script>
\t\t\$('#acc_cookies').click(function(e) {
\t\t\te.preventDefault();
\t\t\t\$.ajax({
\t\t\t\turl: \"php/setcookieAccepted.php\",
\t\t\t\ttype: 'POST',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\$(\"#cookies\").hide();
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</body>
</html>
", "default/index.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/app/Resources/views/default/index.html.twig");
    }
}
