<!DOCTYPE html>
<?php
session_start();

if ($_SESSION['id'] !== 0){
    $id = $_SESSION['id'];
    require("connexion.php");
    $sql = $conn->execute(" select * from users where ID='.$id.'");
    $resultat = $sql->fetch();
    $req = null;
    $conn = null;
}
elseif (isset($_COOKIE['concookie'])){
    require("connexion.php");
    $sql = $conn->execute(" select * from users where ID='.$id.'");
    $resultat = $sql->fetch();
    $req = null;
    $conn = null;
}
else{
    header("location:inscription.php");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Espace adhérent</title>
</head>

<body style="background-image: url("img/work-in-progress.png")">

</body>

</html>




