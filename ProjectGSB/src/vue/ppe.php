<?php 
include 'connectAD.php';


$nom = $_GET['nom'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];
$nuitee = $_GET['nuitee'];
$nuiteetotal = $_GET['nuiteetotal'];
$repas = $_GET['repas'];
$repastotal = $_GET['repastotal'];
$quantitemontant = $_GET['quantitemontant'];
$quantitetotal = $_GET['quantitetotal'];
$quantite = $_GET['quantite'];
$id=$_GET['id'];
$idvisiteur=$_GET['idvisiteur'];



$montantValide = $nuiteetotal + $repastotal + $quantitetotal;
$idetat=1;


echo $montantValide;

if (!empty($id.$idvisiteur.$mois.$annee.$montantValide.$idetat)) 
    $sql = "INSERT INTO fichefrais (id,idvisiteur,mois,annee,montantValide,idetat) VALUES ('".$id."','".$idvisiteur."','".$mois."','".$annee."','".$montantValide."','".$idetat."');";
    $result = executeSQL($sql);
    if ($result)
        echo "Ajoue fait";
        else
            echo " Ne marche pas ";




 ?>