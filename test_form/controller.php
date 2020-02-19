<?php
session_start();

include("connexion.php");
if (count($_POST) > 0) {
$emailphone = $_POST["emailphone"];
if ($emailphone==$_POST["confirmemailphone"]){
$filtre=filter_var($emailphone, FILTER_VALIDATE_EMAIL);
if ($filtre==false) {
if (preg_match('/[0-9]{10}/', $emailphone)){
$phone=$emailphone;

$verif1=true;

}
else{
$message1 = "email ou numéro de téléphone incorrect";
}
}
else{
$email=$emailphone;

$verif1=true;
}
}
else{
$message1="Les emails ou numéro de téléphone ne correspondent pas.";
}


if (($verif1==true)&&(isset($email))) {
require("connexion.php");
$req = $conn->prepare('SELECT email FROM users WHERE email = :email');
$req->execute(array(':email' => $email));
$double = $req->fetch();
$req = null;
$conn = null;
if ($double)
{
$message2 = "Le mail donné existe déjà.";
$verif2=false;
}
else{
$verif2=true;
}
}
elseif (($verif1==true)&&(isset($phone))){
require("connexion.php");
$req = $conn->prepare('SELECT telephone FROM users WHERE telephone = :telephone');
$req->execute(array(':telephone' => $phone));
$double = $req->fetch();
$req = null;
$conn = null;
if ($double)
{
$message2 = "Le numéro de téléphone donné existe déjà.";
$verif2=false;
}
else{
$verif2=true;
}
}
if (($verif1==true)&&($verif2==true)) {
$password=hash("sha256",$_POST["password"],false);


if (isset($phone)) {
require("connexion.php");
$sql = $conn->exec("INSERT INTO users (Prenom,Nom,telephone,password,date_naissance,sexe)
VALUES ('" . htmlspecialchars($_POST["prenom"]) . "','" . htmlspecialchars($_POST["nom"]) . "','" . htmlspecialchars($phone) . "','" . $password . "','" . htmlspecialchars($_POST["annee"]) . "-" . htmlspecialchars($_POST["mois"]) . "-" . htmlspecialchars($_POST["jour"]) . "','" . htmlspecialchars($_POST["sexe"]) . "')");
$sql = null;
$conn = null;
}
elseif (isset($email)){
require("connexion.php");
$sql = $conn->exec("INSERT INTO users (Prenom,Nom,email,password,date_naissance,sexe)
VALUES ('" . htmlspecialchars($_POST["prenom"]) . "','" . htmlspecialchars($_POST["nom"]) . "','" . htmlspecialchars($email) . "','" . $password . "','" . htmlspecialchars($_POST["annee"]) . "-" . htmlspecialchars($_POST["mois"]) . "-" . htmlspecialchars($_POST["jour"]) . "','" . htmlspecialchars($_POST["sexe"]) . "')");
$sql = null;
$conn = null;


}

}
}



?>
