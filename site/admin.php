<?php
  session_start();
  if(!isset($_SESSION["login"]))
	header("Location: index.php?msg=Login ou mdp incorrect!");
  $server = "localhost";
  $user = "root";
  $mdp = "";
 try {
    $conn = new PDO("mysql:host=$server;dbname=learninggroup", $user, $mdp);
       // Définir le mode d'erreur PDO comme l'exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   $requete = "select * from apprenants";
	   if($resultat = $conn->query($requete)){
		   $chr = "<table border='1' width='500' cellspacing='0'>";
		   $chr .= "<tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Email</td><td>Telephone</td><td>Identifiant</td><td>Mot de passe</td>";
		   while($ligne=$resultat->fetch()){
			   $chr .= "<tr><td>".$ligne["idapp"]."</td><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td>".$ligne["email"]."</td><td>".$ligne["tel"]."</td><td>".$ligne["identifiant"]."</td><td>".$ligne["motdepasse"]."</td><tr>";
		   }
		   $chr .="</table><br />";
		   $chr .= "<h2>Menu</h2>";
		   $chr .= "<a href='deconnecter.php'>Se deconnecter</a>";
		   $chr .=" ";
		   $chr .= "<a href='ajouter.php'>Ajouter un apprenant</a>";			
		   echo $chr;
		   
	   }else{
		   die("Echec d'execution de la requete."); 
	   }
        }catch(PDOException $e){
          echo "Connection failed: " . $e->getMessage();
       }
?>