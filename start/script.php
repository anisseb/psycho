<?php
require_once 'vendor/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

    $result = 0;
    $forfait = "";
    $result_consulting = 0;
    $result_conseil = 0;
    $result_recrutement = 0;
    $result_reiteration = 0;
    $result_conseil = 0;
    $result_management = 0;
    $result_coW = 0;
    $value_cw = 0;
    $result = 0;
    $tva = 0;
    $result_ttc = 0;

    if (isset($_POST['consultant']) && isset($_POST['consultant_day']))
    {
        $result_consulting = 750 * intval($_POST['consultant_day']);
        $forfait .= "C";
    }

    if (isset($_POST['conseil_rh']))
    {
        $result_conseil += $_POST['conseil_rh'];
        $forfait .= "C";
    }

    if (isset($_POST['recrutement']) )
    {
        $result_recrutement += $_POST['recrutement'];
        $forfait .= "S";
    }

    if (isset($_POST['reiteration']) )
        $result_reiteration += $_POST['reiteration'];
    
    if (isset($_POST['management_rt']) || isset($_POST['management_rp']) )
    {
        $forfait .= "M";
        if (isset($_POST['management_rt']) && isset($_POST['rt_nb']))
            $result_management += 90 * intval($_POST['rt_nb']);
        if (isset($_POST['management_rp']) && isset($_POST['rp_nb']))
            $result_management += 270 * intval($_POST['rp_nb']);
    }
    if (isset($_POST['nb_day_cw']) || isset($_POST['nb_week_cw']) || isset($_POST['nb_month_cw']))
    {
        $forfait .= "CW";
        $result_coW += $_POST['nb_day_cw'] * 30;
        $result_coW += $_POST['nb_week_cw'] * 120;
        $result_coW += $_POST['nb_month_cw'] * 240;
    }

    $result += $result_consulting + $result_conseil + $result_recrutement + $result_management;
    $result_ttc = $result * 1.20;
    $tva = $result_ttc - $result;

$content = '<html>
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>Folks</title>

                    <!-- Bootstrap Core CSS -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                  <link href="css/pdf.css" rel="stylesheet">
                    <!-- Custom CSS -->

                    <!-- Custom Fonts -->
                    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
                    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->


                <h1 class="titre">folks</h1>
                <div class="entete">BUMPER FRANCE
                  <br> 63, rue de Créqui
                  <br>  69006 LYON
                </div>
                <div class="entete">LYON, LE 18 AVRIL 2016
                    <br>OFFRE : BU-01-16
                </div>
                </head>
                <body style="background-color: #EFEFEF;">
                <h2 class="recrutement">recrutement dans le secteur de la communication</h2>
                <h3 class="titreservice">consulting</h3>
                <div class="texte">mise en place d\'une stratégie de web-marketing avec pour objectifs : 
                  <br>augmentation du trafic du site internet, acquisitions de nouveaux mandats et 
                  <br>  recherche de clients potentiels
                </div>
                <div class="prix">'.$result_consulting.',00 € HT</div>
                <h3 class="titreservice">conseil rh</h3>
                <div class="texte">mise en place d\'un ordre de mission et d\'une feuille de route</div>
                <div class="prix">'.$result_conseil.',00 € HT</div>
                <h3 class="titreservice">staffing</h3>
                <div class="texte">identification, contrôle et mise à disposition
                  <br>d\'un profil junior sélectionné en fonction de ses disponibilités, de 
                  <br>  ses compéteneces, de son parcours et de sa personnalité pendant 6 mois
                </div>
                <div class="prix">'.$result_recrutement.',00 € HT</div>
                <div class="rem">rémunération du personnel a prevoir en sus</div>
                <h3 class="titreservice">réitération de contrat</h3>
                <div class="texte">stage et cdd de -6 mois</div>
                <div class="prix">'.$result_reiteration.',00 € HT</div>
                <h3 class="titreservice">management</h3>
                <div class="texte">24 points hebdomadaires
                  <br>3 réunions physiques (69) bimensuelles de deux heures
                </div>
                <div class="prix">'.$result_management.', 00 € HT</div>
                <h3 class="titreservice">coworking</h3>
                <div class="texte">mise à disposition d\'un bureau (69) sur 6 mois
                </div>
                <div class="prix">'.$result_coW.',00 € HT</div>
                </body>


                <footer>
                <div class="textefooterl">
                FOLKS 
                <br>SARL AU CAPITAL DE 25.000 EUROS

                <br>64, RUE MOLIERE – 69003 LYON 
                <br>04.27.01.46.20
                <br>CONTACT@FOLKS.FR
                <br>WWW.FOLKS.FR

                <br>RCS LYON : SIRET : 525137675
                <br>TVA INTRA : FR 50525137675 
                </div>
                <div class="textefooterr">OFFRE VALABLE UN MOIS
                 <br>BON POUR ACCORD / SIGNATURE / CACHET
                 <br>PAIEMENT DE 30 % A LA COMMAINDE
                <br>PAIEMENT 70 % A LA PRISE DE FONCTION</div>
                </footer>
            </html>';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->loadHtml($content);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('my.pdf',array('Attachment'=>0));

  /*  $destinataire = 'martin.pras@epitech.eu';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = 'test.folks@gmail.com';
    $objet = 'Test'; // Objet du message
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
    $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
    $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
    $message = 'Un Bonjour de Developpez.com!';
    if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
    {
        echo 'Votre message a bien été envoyé ';
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé";
    }

    function verifEmail ($email) {
    if (filter_var ($email, FILTER_VALIDATE_EMAIL) === false) {
        return false;
    } else {
        return true;
    }
}*/
?>
