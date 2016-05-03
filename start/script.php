<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>
    <body>
    
        <?php

        $result = 0;
        $result_consulting = 0;
        $result_conseil = 0;
        $result_recrutement = 0;
        $result_reiteration = 0;
        $result_conseil = 0;
        $result_management = 0;
        $result_coW = 0;
        $result = 0;
        $tva = 0;
        $result_ttc = 0;

    if (isset($_POST['consultant']) && isset($_POST['consultant_day']))
    {
        $result_consulting = 750 * intval($_POST['consultant_day']);
    }

    if (isset($_POST['conseil_rh']))
    {
        $result_conseil += $_POST['conseil_rh'];
    }

    if (isset($_POST['recrutement']) )
    {
        $result_recrutement += $_POST['recrutement'];
    }

    if (isset($_POST['reiteration']) )
    {
        $result_reiteration += $_POST['reiteration'];
    }
    
    if (isset($_POST['management_rt']) && isset($_POST['rt_nb']))
    {
        $result_management = 90 * intval($_POST['rt_nb']);

    }
    if (isset($_POST['management_rp']) && isset($_POST['rp_nb']))
    {
        $result_management = 270 * intval($_POST['rp_nb']);
    }
    if (isset($_POST['co_working']) && intval($_POST['co_working']))
    {
        switch (intval($_POST['co_working'])) {
            case '30':
                $result_coW = 30;
                break;
            case '120':
                $result_coW = 120;
                break;
            case '240':
                $result_coW = 240;
                break;
        }
    }

    $result += $result_consulting + $result_conseil + $result_recrutement + $result_management + $result_coW;
    $result_ttc = $result * 1.20;
    $tva = $result_ttc - $result;

    ?>
    <p><strong><?php echo $result ?> Euros HT</strong></p>
    <p><strong><?php echo $tva?> Euros HT</strong></p>
    <p><strong><?php echo $result_ttc ?> Euros TTC</strong></p>
    <p><strong><?php echo $result_consulting ?> Euros HT</strong></p>
    <p><strong><?php echo $result_conseil    ?> Euros HT</strong></p>
    <p><strong><?php echo $result_recrutement ?> Euros HT</strong></p>
    <p><strong><?php echo $result_reiteration ?> Euros HT</strong></p>
    <p><strong><?php echo $result_management ?> Euros HT</strong></p>
</html>