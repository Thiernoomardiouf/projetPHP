<?php
  session_start();
  $server = "localhost";
  $user = "root";
  $mdp = "";
 try {
    $conn = new PDO("mysql:host=$server;dbname=learninggroup", $user, $mdp);
       // Définir le mode d'erreur PDO comme l'exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $lg = $_POST["login"]; 
		  $pw = $_POST["mdp"]; 
		  $requete = "select * from administrateur where identifiant='$lg' and motdepasse='$pw'";
		
		if($resultat = $conn->query($requete)){
			if($resultat){
				$_SESSION["login"]=$lg;
				$_SESSION["mdp"]=$pw;
				$_SESSION["ipAdr"]=$_SERVER["REMOTE_ADDR"];
				header("Location: admin.php");
			}else{
				header("Location: index.php?msg=Login ou mdp incorrect!");
			}
		}else{
			die("Echec d'execution de la requete."); 
		}
        }catch(PDOException $e){
          echo "Connection failed: " . $e->getMessage();
       }
?>