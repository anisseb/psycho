<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Folks</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
 
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                   <span class="light">FOLKS</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#consulting">Consulting</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#conseil">Conseil RH</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recrutement">Recrutement</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#reiteration">Réitération</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#metiers">Métiers</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#management">Management</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#cowork">Co-Working</a>
                    </li>
                    <!-- <li>
                        <button type="submit" form="69" class="btn btn-default">Valider</button>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Folks</h1>
                        <p class="intro-text">FOLKS ACCOMPAGNE LES ENTREPRISES, LES ONG, LES INSTITUTIONS ET LES PERSONNES
PUBLIQUES DANS LE <br> DÉPLOIEMENT DE LEUR STRATÉGIE DE COMMUNICATION.</p>
                        <a href="#consulting" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section  class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>CATALOGUE</h2>
                <img src="" alt="catalogue">
            </div>
        </div>
    </section>
    <!-- About Section -->
     <form id="69" action="script.php" method="post">
        <section id="consulting" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 style="text-align:left;">Consulting</h2>
    				<p style="text-align:left;">FOLKS MET EN PLACE VOTRE STRATEGIE DE COM’ EN FONCTION DE VOTRE OBJECTIF ET DE VOTRE BUDGET</p>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="1.0">CONSULTANT</label>
                            </div>
                            <div class="col-sm-1">
                            <input type="checkbox" name="consultant" id="1.0" class="form-control"/>
                            </div>
                            <div class="col-sm-3">
                            <label for="1.1">Nombre de jours</label> 
            			         <input type="number" name="consultant_day" id="1.1" class="form-control">
                        </div>
                    </div>
    				<img class="consult" src="img/consulting.png" alt="consulting">
                </div>
            </div>
        </section>

    	<section id="conseil" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Conseil RH</h2>
                    <p>FOLKS MET EN PLACE UN ORDRE DE MISSION ET UNE FEUILLE DE ROUTE EN FONCTION DE L’OBJECTIF SUIVI ET DU BUDGET ALLOUÉ..</p>
                    <div class="form-group col-sm-4">
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="1" value="315">
                            STAGE DE MOINS DE 6 MOIS
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="2" value="630">
                            STAGE DE 6 MOIS ET PLUS
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="3" value="630">
                            ALTERNANCES
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="4" value="630">
                            CDD DE MOINS DE 6 MOIS
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="5" value="1260">
                            CDD DE 6 MOIS ET PLUS 
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="conseil_rh" id="6" value="1260">
                            CDI
                          </label>
                        </div>
                    </div>
    				<img class="consult" src="img/conseil.png" alt="consulting">
                </div>
            </div>
        </section>

    	<section id="recrutement" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Recrutement</h2>
                    <p>FOLKS IDENTIFIE, CONTRÖLE ET MET À DISPOSITION UN PROFIL SELECTIONNÉ EN FONCTION DE SES COMPÉTENCES, DE SON PARCOURS ET DE SA PERSONNALITÉ.</p>
                    <div class="form-group col-sm-4">
                        <div class="radio">
                          <label>
                            <input type="radio" name="recrutement" id="7" value="630">
                            PROFIL JUNIOR
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="recrutement" id="8" value="1260">
                            PROFIL SENIOR
                          </label>
                        </div>
                    </div>
    				<img class="consult" src="img/recrutement.png" alt="consulting">
                </div>
            </div>
        </section>

    	<section id="reiteration" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Réitération</h2>
                    <p>FOLKS MET À DISPOSITION LA RECRUE POUR UN NOUVEAU CONTRAT</p>
                     <div class="form-group col-sm-6">
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="9" value="315">
                            STAGE DE MOINS DE 6 MOIS  -  315,00 Euros HT
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="10" value="630">
                            STAGE DE 6 MOIS ET PLUS  -  630,00 Euros HT
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="11" value="630">
                            ALTERNANCES  -  630,00 Euros HT
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="12" value="630">
                            CDD DE MOINS DE 6 MOIS  -  630,00 Euros HT
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="13" value="1260">
                            CDD DE 6 MOIS ET PLUS  -  1260,00 Euros HT
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="reiteration" id="14" value="1890">
                            CDI  -  1890,00 Euros HT
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    	<section id="metiers" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 name="m_title"></h2>
                    <p>FOLKS VOUS PROPOSE UN POOL INFINI DE COMPÉTENCES. DIRECTEMENT PRIS EN CHARGE PAR VOTRE MARQUE. </p>
                    <ul>
                        <li>CONSULTANTS</li>
                        <li name="CDP"></li>
                        <li name="DirArt"></li>
                        <li name="webDev"></li>
                        <li name="graph"></li>
                        <li name="commMng"></li>
                        <li name="respCom"></li>
                    </ul>                            
    				<img class="consult" src="img/metiers.png" alt="consulting">
                </div>
            </div>
        </section>

        <section id="management" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Management</h2>
                    <p>FOLKS ACCOMPAGNE VOTRE RECRUE TOUT AU LONG DE SA MISSION : </p>
                     <div class="form-group">
                        <div class="col-sm-4">
                            <label for="15">REUNION TELEPHONIQUE</label>
                            </div>
                            <div class="col-sm-1">
                                <input type="checkbox" name="management_rt" id="15" class="form-control"/>
                            </div>
                            <div class="col-sm-3">
                            <label for="16">Nombre</label> 
                            <input type="number" name="rt_nb" id="16" class="form-control">
                        </div>
                    <div class="row"></div>
                        <div class="col-sm-4">
                            <label for="17">REUNION PHYSIQUE</label>
                            </div>
                            <div class="col-sm-1">
                                <input type="checkbox" name="management_rp" id="17" class="form-control"/>
                            </div>
                            <div class="col-sm-3">
                            <label for="18">Nombre</label> 
                            <input type="number" name="rp_nb" id="18" class="form-control">
                        </div>
                    </div>
					<img class="consult" src="img/management.png" alt="consulting">
                </div>
            </div>
        </section>

        <section id="cowork" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>CO-WORKING</h2>
                    <p>FOLKS MET À DISPOSITION DE VOTRE RECRUE UN BUREAU ET LE MATÉRIEL DANS L’UN DE SES FOLKS STORE : </p>
                    <div class="form-group col-sm-6">
                        <ul>
                            <li>FORFAIT JOUR -  30,00 Euros HT</li>
                            <li>FORFAIT HEBDOMADAIRE -  120,00 Euros HT</li>
                            <li>FORFAIT MENSUEL -  240,00 Euros HT</li>
                        </ul> 
                    </div>
                    <div class="col-sm-2">
                            <label for="21.1">Nombre de mois</label> 
                            <input type="number" name="nb_day_cw" id="21.1" class="form-control">
                    </div>
                    <div class="col-sm-2">
                            <label for="21.2">Nombre de semaine</label> 
                            <input type="number" name="nb_week_cw" id="21.2" class="form-control">
                    </div>
                    <div class="col-sm-2">
                            <label for="21.3">Nombre de jour</label> 
                            <input type="number" name="nb_month_cw" id="21.3" class="form-control">
                    </div>
                </div>
            </div>
        </section>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
			<h1>COMMENT ÇA MARCHE ?</h1>
			<h2>1 / DÉSIGNER UN COMMANDITAIRE : </h2>
            <div class="form-group form-group-lg">
                <label for="22" class="col-sm-3 control-label"></label>
                <div class=" form-group col-sm-7">
                  <input type="text" name="client_nom" class="form-control" id="22" placeholder="Nom">
                </div>
                <div class="row"></div>
                <label for="23" class="col-sm-3 control-label"></label>
                <div class="form-group col-sm-7">
                  <input type="text" name="client_prenom" class="form-control" id="23" placeholder="Prénom">
                </div>
                <div class="row"></div>
                <label for="24" class="col-sm-3 control-label"></label>
                <div class="form-group col-sm-7">
                  <input type="text" name="client_cp" class="form-control" id="24" placeholder="Poste">
                </div>
                <div class="row"></div>
                <label for="25" class="col-sm-3 control-label"></label>
                <div class="form-group col-sm-7">
                  <input type="text" name="client_num" class="form-control" id="25" placeholder="Numéro">
                </div>
                <div class="row"></div>
                <label for="26" class="col-sm-3 control-label"></label>
                <div class="form-group col-sm-7">
                  <input type="mail" name="client_mail" class="form-control" id="26" placeholder="Email">
                </div>
                <div class="row"></div>
            </div>
            <button type="submit" class="btn btn-default">Valider</button>
            <button type="submit" class="btn btn-default">Visualiser</button>
        </div>
        </form>
    </footer>
<!-- 
  </section>   -->

    

    <script type="text/javascript">
    $(document).ready(function () {

        $("[name=CDP]").html("CHEFS DE PROJETS  -  2100,00 Euros HT / MOIS") ;
        $("[name=DirArt]").html("DIRECTEURS ARTISTIQUES  -  2000,00 Euros HT / MOIS");
        $("[name=m_title]").html("Métiers (JUNIOR)");
        $("[name=webDev]").html("DÉVELOPPEURS WEB  -  1500,00 Euros HT / MOIS");
        $("[name=graph]").html("EXÉCUTANTS GRAPHIQUES ET WEB  -  1500,00 Euros HT / MOIS");
        $("[name=commMng]").html("COMMUNNITY MANAGER ET WEB  -  1700,00 Euros HT / MOIS");
        $("[name=respCom]").html("RESPONSABLE COM ET WEB  -  1500,00 Euros HT / MOIS");

        $("input[name=recrutement]").click(function(){
            var value = $(this).attr("value");
            if (value === "630")
            {
                $("[name=CDP]").html("CHEFS DE PROJETS  -  2100,00 Euros HT / MOIS") ;
                $("[name=DirArt]").html("DIRECTEURS ARTISTIQUES  -  2000,00 Euros HT / MOIS");
                $("[name=m_title]").html("Métiers (JUNIOR)");
                $("[name=webDev]").html("DÉVELOPPEURS WEB  -  1500,00 Euros HT / MOIS");
                $("[name=graph]").html("EXÉCUTANTS GRAPHIQUES ET WEB  -  1500,00 Euros HT / MOIS");
                $("[name=commMng]").html("COMMUNNITY MANAGER ET WEB  -  1700,00 Euros HT / MOIS");
                $("[name=respCom]").html("RESPONSABLE COM ET WEB  -  1500,00 Euros HT / MOIS");
            }
            else
            {        
                $("[name=CDP]").html("CHEFS DE PROJETS  -  3300,00 Euros HT / MOIS") ;
                $("[name=DirArt]").html("DIRECTEURS ARTISTIQUES  -  2200 - 4000,00 Euros HT / MOIS");
                $("[name=m_title]").html("Métiers (SENIOR)");
                $("[name=webDev]").html("DÉVELOPPEURS WEB  -  3600,00 Euros HT / MOIS");
                $("[name=graph]").html("EXÉCUTANTS GRAPHIQUES ET WEB  -  2300,00 Euros HT / MOIS");
                $("[name=commMng]").html("COMMUNNITY MANAGER ET WEB  -  2700,00 Euros HT / MOIS");
                $("[name=respCom]").html("RESPONSABLE COM ET WEB  -  3500,00 Euros HT / MOIS");
            }
        });
    });
    </script>

</body>

</html>
