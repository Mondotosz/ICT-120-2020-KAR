<?php require_once "includes/store.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voyage</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/code.js" defer></script>
</head>
<body>
<div class="header">
    <img class="logo" src="pictures/logo.jpg" alt="logo">
    <div class="title center">Voyage d'études</div>
</div>
<nav class="navbar">
    <div id="navPeople" class="nav-item nav-selected">Personnes</div>
    <div id="navTransport" class="nav-item">Transport</div>
    <div id="navLodging" class="nav-item">Logement</div>
    <div id="navActivities" class="nav-item">Activités</div>
</nav>
<div class="center">Cette page rassemble toutes les informations nécessaires pour l'organisation de notre voyage d'étude
    en troisième
    année.
</div>
<form method="post">
    <div id="divPeople" class="field">
        <div class="field-head">
            <div class="field-header">Adresse</div>
            <div class="field-header">Code postal</div>
            <div class="field-header">Ville</div>
            <div class="field-header">Prénom</div>
            <div class="field-header">Nom</div>
            <div class="field-header">Numéro de portable</div>
            <div class="field-header">Prof ou élève</div>
        </div>
        <?php
        for ($i = 0; $i < 50; $i++) {
            echo "<div class=\"field-component\">
            <input type=\"text\" name=\"txtAddress[${i}]\" id=\"txtAddress${i}\">
            <input type=\"text\" name=\"txtNPA[${i}]\" id=\"txtNPA${i}\">
            <input type=\"text\" name=\"txtCity[${i}]\" id=\"txtCity${i}\">
            <input type=\"text\" name=\"txtFirstName[${i}]\" id=\"txtFirstName${i}\">
            <input type=\"text\" name=\"txtLastName[${i}]\" id=\"txtLastName${i}\">
            <input type=\"text\" name=\"txtPhone[${i}]\" id=\"txtPhone${i}\">
            <input type=\"text\" name=\"txtProf[${i}]\" id=\"txtProf${i}\">
        </div>";
        }
        ?>
    </div>
    <div id="divTransport" class="field hidden">
        <div class="field-head">
            <div class="field-header">Rendez-vous</div>
            <div class="field-header">Départ</div>
            <div class="field-header">Arrivée</div>
            <div class="field-header">Numéro de vol</div>
            <div class="field-header">Numéro de train</div>
            <div class="field-header">Numéro de bus</div>
            <div class="field-header">Prix</div>
        </div>
        <?php
        for ($i = 0; $i < 50; $i++) {
            echo "<div class=\"field-component\">
            <input type=\"text\" name=\"txtMeeting[${i}]\" id=\"txtMeeting${i}\">
            <input type=\"text\" name=\"txtStart[${i}]\" id=\"txtStart${i}\">
            <input type=\"text\" name=\"txtEnd[${i}]\" id=\"txtEnd${i}\">
            <input type=\"text\" name=\"txtFlight[${i}]\" id=\"txtFlight${i}\">
            <input type=\"text\" name=\"txtTrain[${i}]\" id=\"txtTrain${i}\">
            <input type=\"text\" name=\"txtBus[${i}]\" id=\"txtBus${i}\">
            <input type=\"text\" name=\"txtPrice[${i}]\" id=\"txtPrice${i}\">
        </div>";
        }
        ?>
    </div>
    <div id="divLodging" class="field hidden">
        Hotel: <input type="text" name="txtHotelData[00]" id="txtHotelData00"><br>
        Adresse: <input type="text" name="txtHotelData[01]" id="txtHotelData01"><br>
        NPA: <input type="text" name="txtHotelData[02]" id="txtHotelData02"><br>
        City: <input type="text" name="txtHotelData[03]" id="txtHotelData03"><br>
        Téléphone: <input type="text" name="txtHotelData[04]" id="txtHotelData04"><br>
        Email: <input type="text" name="txtHotelData[05]" id="txtHotelData05"><br>

        <div class="field-head">
            <div class="field-header">Chambre</div>
            <div class="field-header">Etage</div>
            <div class="field-header">Max personnes</div>
            <div class="field-header">Occupant1</div>
            <div class="field-header">Occupant2</div>
            <div class="field-header">Occupant3</div>
            <div class="field-header">Occupant4</div>
        </div>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<div class=\"field-component\">
            <input type=\"text\" name=\"txtRoom[${i}]\" id=\"txtRoom${i}\">
            <input type=\"text\" name=\"txtFloor[${i}]\" id=\"txtFloor${i}\">
            <input type=\"text\" name=\"txtCapacity[${i}]\" id=\"txtCapacity${i}\">
            <input type=\"text\" name=\"txtOcc1[${i}]\" id=\"txtOcc1${i}\">
            <input type=\"text\" name=\"txtOcc2[${i}]\" id=\"txtOcc2${i}\">
            <input type=\"text\" name=\"txtOcc3[${i}]\" id=\"txtOcc3${i}\">
            <input type=\"text\" name=\"txtOcc4[${i}]\" id=\"txtOcc4${i}\">
        </div>";
        }
        ?>
    </div>
    <div id="divActivities" class="field hidden">

        <div class="field-head">
            <div class="field-header">Titre</div>
            <div class="field-header">Description</div>
            <div class="field-header">Date</div>
            <div class="field-header">Heure</div>
            <div class="field-header">Prix</div>
            <div class="field-header">Transport</div>
            <div class="field-header">Rendez-vous</div>
            <div class="field-header">Image</div>
        </div>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<div class=\"field-component\">
            <input type=\"text\" name=\"txtTitle[${i}]\" id=\"txtTitle${i}\">
            <input type=\"text\" name=\"txtDesc[${i}]\" id=\"txtDesc${i}\">
            <input type=\"text\" name=\"txtActDate[${i}]\" id=\"txtActDate${i}\">
            <input type=\"text\" name=\"txtActTime[${i}]\" id=\"txtActTime${i}\">
            <input type=\"text\" name=\"txtActPrice[${i}]\" id=\"txtActPrice${i}\">
            <input type=\"text\" name=\"txtActTrsp[${i}]\" id=\"txtActTrsp${i}\">
            <input type=\"text\" name=\"txtRDV[${i}]\" id=\"txtRDV${i}\">
            <input type=\"text\" name=\"txtActImg[${i}]\" id=\"txtActImg${i}\">
            <img id=\"imgActImg00\" class=\"actimg\"/>
        </div>";
        }
        ?>

    </div>
    <input type="submit" value="Ok" name="cmdSave"><input type="checkbox" name="showdata"
                                                          title="Remise à zéro de tous les champs qui ne sont pas formatés correctement">Reset
</form>
</body>
</html>