<?php
session_start();
if(isset($_SESSION["login"])){
	session_destroy();
	header("Location: index.php?msg=Vous venez de vous déconnecter!");
}else
	header("Location: index.php?msg=Veuillez vous connecter d'abord!");
?>