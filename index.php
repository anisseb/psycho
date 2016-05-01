<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>AutoDevis</title>
    </head>
    <body>
        <form action="script.php" method="post">
            <p>
            <h1>CONSULTING</h1><br>
            <input type="checkbox" name="consultant"/> CONSULTANT RH
            <input type="number" name="consultant_day" ><br>
            <h1>CONSEIL</h1><br>
            <input type="radio" name="conseil_rh" id="1" value="315"> STAGE DE MOINS DE 6 MOIS<br>
            <input type="radio" name="conseil_rh" id="2" value="630"> STAGE DE 6 MOIS ET PLUS<br>
            <input type="radio" name="conseil_rh" id="3" value="630"> ALTERNANCES<br>
            <input type="radio" name="conseil_rh" id="4" value="630"> CDD DE MOINS DE 6 MOIS<br>
            <input type="radio" name="conseil_rh" id="5" value="1260"> CDD DE 6 MOIS ET PLUS<br>
            <input type="radio" name="conseil_rh" id="6" value="1890"> CDI<br>
            <h1>RECRUTEMENT</h1><br>
            <input type="radio" name="recrutement" id="7" value="630"> PROFIL JUNIOR<br>
            <input type="radio" name="recrutement" id="8" value="1260"> PROFIL SENIOR<br>
            <h1>REITERATION</h1><br>
            <input type="radio" name="reiteration" id="9" value="315"> STAGE DE MOINS DE 6 MOIS<br>
            <input type="radio" name="reiteration" id="10" value="630"> STAGE DE 6 MOIS ET PLUS<br>
            <input type="radio" name="reiteration" id="11" value="630"> ALTERNANCES<br>
            <input type="radio" name="reiteration" id="12" value="630"> CDD DE MOINS DE 6 MOIS<br>
            <input type="radio" name="reiteration" id="13" value="1260"> CDD DE 6 MOIS ET PLUS<br>
            <input type="radio" name="reiteration" id="14" value="1890"> CDI<br>
            <h1>MANGEMENT</h1><br>
            <input type="checkbox" name="management_rt"/> REUNION TELEPHONIQUE
            <input type="number" name="rt_nb" ><br>
            <input type="checkbox" name="management_rp"/> REUNION PHYSIQUE
            <input type="number" name="rp_nb" ><br>
            <h1>CONSEIL</h1><br>
            <input type="radio" name="co_working" value="30"> FORFAIT JOUR<br>
            <input type="radio" name="co_working" value="120"> FORFAIT HEBDOMADAIRE<br>
            <input type="radio" name="co_working" value="240"> FORFAIT MENSUEL<br>
            <h1>INFOS CLIENT</h1><br>
            NOM <input type="text" name="client_nom" id="15"><br>
            PRENOM <input type="text" name="client_prenom" id="16"><br>
            POSTE <input type="text" name="client_cp" id="17"><br>
            NUMERO <input type="text" name="client_num" id="18"><br>
            MAIL <input type="text" name="client_mail" id="19"><br>

            <br><input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>