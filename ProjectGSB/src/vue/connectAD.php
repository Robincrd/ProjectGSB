<?php
require_once 'AccesDonnees.php';

$ip=explode(".", adresseIPV4($_SERVER['SERVER_ADDR']));
switch ($ip[0]) {
    case 127:
        //local SI6
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "gsb";
        $port='3307';
        break;
        
    case 51:
        //BDD Scaleway
        $host = "localhost";
        $user = "";
        $password = "";
        $dbname = "";
        $port='3306';
        break;
        
    default:
        echo ("Serveur non reconnu $ip[0]...<br />");
        echo "<pre>";
        print_r($_SERVER);
        echo "SERVER_ADDR : ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];
        echo " -- IPV4 : ".adresseIPV4($_SERVER['SERVER_ADDR'])."<br />";
        echo "REMOTE_ADDR : ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT'];
        echo " -- IPV4 : ".adresseIPV4($_SERVER['REMOTE_ADDR'])."<br />";
        exit("</pre>");
        break;
}

$connexion = connexion($host, $port, $dbname, $user, $password);

if (!$connexion) {
    //print_r($_SERVER);
    echo "Echec Connexion...<br />";
} else {
    
   // echo "<pre>";
   // echo "Connexion reussie<br />";
   // echo "Server addr : ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];
  //  echo " -- IPV4 : ".adresseIPV4($_SERVER['SERVER_ADDR'])."<br />";
   // echo "Remote addr : ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT'];
   // echo " -- IPV4 : ".adresseIPV4($_SERVER['REMOTE_ADDR'])."<br />";
   // echo "Host : $host:$port<br />";
   // echo "Utilisateur : $user";
   // echo "</pre>";
    
   // echo "Bonjour "."<br/>";
}
?>

