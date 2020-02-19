<?php
require_once("controller.php")
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div style="color: red"><?php if (isset($message1)) {
        echo $message1;
    } ?>
</div>
<div style="color: red"><?php if (isset($message2)) {
        echo $message2;
    } ?>
</div>

<section style="margin: auto; width: 130%">
    <div  class="container" >
        <h2>Connexion</h2>
        <form class="col-md-6" action="Espace_adherent.php" method="POST" id="form">
            <div class="form-group row">
                <h5 class="col-md-5">Adresse e-mail ou mobile</h5>
                <h5 class="col-md-5">Mot de passe</h5>
            </div>
            <div class="form-group row">
                <input style="margin-right: 2px" class="col-md-5" type="text" id="emailphone" name="emailphone" placeholder="login" required>
                <input class="col-md-5"type="password" placeholder="Votre Mot de passe" id="password" name="password" required>
                <input type="submit" value="Connexion">
            </div>
            <div class="form-group row">
                <h5 class="col-md-5"></h5>
                <a class="col-md-5" href="work_in_progress.php">Information de compte oublié?</a>
            </div>
    </div>
    <div class="container" >
    <h2>Inscription</h2>
    <p>C'est gratuit (et ça le restera toujours)</p>
        <form class="col-md-6" action="inscription.php" method="POST" id="form">
            <div class="form-group row">
            <input style="margin-right: 2px" class="col-md-3" type="text" placeholder="Prénom" id="prenom" name="prenom" required><input class="col-md-3" type="text" placeholder="Nom de famille" id="nom" name="nom" required>
            </div>
            <div class="form-group row">
            <input class="col-md-6" type="text" id="emailphone" name="emailphone" placeholder="Numéro de mobile ou email" required>
            </div>
                <div class="form-group row">
            <input class="col-md-6"type="text" id="confirmemailphone" name="confirmemailphone"  placeholder="Confirmer numéro de mobile ou email" required>
                </div>
                    <div class="form-group row">
            <input class="col-md-6"type="password" placeholder="Nouveau Mot de passe" id="password" name="password" required>
                    </div>
                        <div class="form-group row">
            <label class="radio-inline" >
                <input type="radio" id="Homme" name="sexe" value="Homme">Homme
                </label>
                <label class="radio-inline" >
                <input type="radio" id="Femme" name="sexe" value="Femme">Femme
                </label>
                <label class="radio-inline" >
                <input type="radio" id="Autre" name="sexe" value="Autre">Autre
                </label>

                        </div>
            <div class="form-group row">

                <select style="margin-right: 2px"class="col-md-1" id="jour" name="jour" class="custom-select">
                    <option>Jour</option>
                    <?php
                    $i=1;
                    while ($i<32) {
                        echo "<option>$i</option>";
                        $i++;
                    }
                    ?>
                </select>
                <select style="margin-right: 2px"class="col-md-1" id="mois" name="mois" class="custom-select">
                    <option>Mois</option>
                    <?php
                    $i=1;
                    while ($i<13) {
                        echo "<option>$i</option>";
                        $i++;
                    }
                    ?>
                </select>
                <select class="col-md-1" id="annee" name="annee" class="custom-select">
                    <option>Année</option>
                    <?php
                    $i=1920;
                    while ($i<2020) {
                        echo "<option>$i</option>";
                        $i++;
                    }
                    ?>
                </select>
                <h6 style="margin: auto" class="col-md-2" ><a href="work_in_progress.php">Pourquoi indiquer une date de naissance?</a></h6>
            </div>
            <div class="form-group row">
                <h6>En cliquant sur Insciption, vous acceptez nos <a href="work_in_progress.php">Conditions</a> et</h6>
                <h6>indiquez que vous avez lu notre <a href="work_in_progress.php">Politique d'utilisation des</a>,</h6>
                <h6><a href="work_in_progress.php">données</a> y compris notre <a href="work_in_progress.php">Utilisation des cookies</a>. Vous</h6>
                <h6> pourrez recevoir des notifications par texto de la part de</h6>
                <h6>Facebook et pouvez vous désabonner à tout moment.</h6>
            </div>
            <div class="form-group row">
            <input type="submit" value="Inscription">
            </div>
        </form>
    </div>
</section>

</body>

</html>
