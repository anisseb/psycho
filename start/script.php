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
    if (isset($_POST['co_working']) && intval($_POST['co_working']) && isset($_POST['nb_cw']))
    {
        $forfait .= "CW";
        switch (intval($_POST['co_working'])) {
            case '30':
                $value_coW = 30;
                $result_coW = 30 * intval($_POST['nb_cw']);
                break;
            case '120':
                $value_coW = 120;
                $result_coW = 120 * intval($_POST['nb_cw']);
                break;
            case '240':
                $value_coW = 240;
                $result_coW = 240 * intval($_POST['nb_cw']);
                break;
        }
    }

    $result += $result_consulting + $result_conseil + $result_recrutement + $result_management;
    $result_ttc = $result * 1.20;
    $tva = $result_ttc - $result;

    header('Location: app.html');  

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