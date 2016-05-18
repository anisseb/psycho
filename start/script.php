<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>
    <body>
    
        <?php

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

    

    ?>
    <p><strong>Résultat HT = <?php echo $result ?> Euros</strong></p>
    <p><strong>Résultat TVA = <?php echo $tva?> Euros</strong></p>
    <p><strong>Résultat TTC = <?php echo $result_ttc ?> Euros</strong></p>
    <p><strong>Résultat Consulting = <?php echo $result_consulting ?> Euros HT</strong></p>
    <p><strong>Résultat Connseil RH = <?php echo $result_conseil ?> Euros HT</strong></p>
    <p><strong>Résultat Staffing = <?php echo $result_recrutement ?> Euros HT</strong></p>
    <p><strong>Résultat Réiteration = <?php echo $result_reiteration ?> Euros HT</strong></p>
    <p><strong>Résultat Management = <?php echo $result_management ?> Euros HT</strong></p>
    <p><strong>Résultat Co - Working = <?php echo $result_coW ?> Euros HT</strong></p>
    <p><strong>FORFAIT <?php print($forfait) ?></strong></p>
</html>
<?php
$content='<page><html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <br>69006 LYON
</div>
<div class="entete">LYON, LE 18 AVRIL 2016
        <br>OFFRE : BU-01-16
</div>
</head>
<body style="background-color: #EFEFEF;">
<h2 class="recrutement">recrutement dans le secteur de la communication</h2>
<h3 class="titreservice">consulting</h3>
<div class="texte">
</div>
<span class="prix">1890,00 € HT</span>
<h3 class="titreservice">conseil rh</h3>
<div class="texte"></div>
<span class="prix">630,00 € HT</span>
<h3 class="titreservice">staffing</h3>
<div class="texte"></div>
<span class="prix">630,00 € HT</span>
<div class="rem">rémunération du personnel a prevoir en sus</div>
<h3 class="titreservice">réitération de contrat</h3>
<div class="texte"></div>
<span class="prix">315,00 € HT</span>
<div class="texte"></div>
<span class="prix">630,00 € HT</span>
<div class="texte">cdi</div>
<span class="prix">1890,00 € HT</span>
<h3 class="titreservice">management</h3>
<div class="texte">
</div>
<span class="prix">1440, 00 € HT</span>
<h3 class="titreservice">coworking</h3>
<div class="texte">
</div>
<span class="prix">900,00 € HT</span>
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
</html></page>';


 
require_once(__DIR__ . '/html2pdf/vendor/autoload.php');
    $html2pdf = new HTML2PDF('l','A4','fr','ISO-8859-15');
    $html2pdf->WriteHTML($content);
    /*$html2pdf->Output(__DIR__ . "/testage5.pdf", 'F');*/
    /*$html2pdf->Output("testage.pdf");*/

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