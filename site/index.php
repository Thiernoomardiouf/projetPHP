<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="app.css">
<title>Document sans nom</title>
<style>
  html {
    font-family: sans-serif;
  }
   
   form{
      text-align: center;
      padding-top:30%;
      width: 600px;
      background-color: rgba(0, 0, 0, 0.4);
      box-sizing: border-box;
      border-radius: 20px;
    }
    input{
        padding: 7px;
        border-radius: 6px;
        border: 12px;
    }
</style>
</head>
<body>
<form name="form1" method="post" action="login.php">
<p><strong>Page de connexion</strong></p>
  <p>
    <label for="mdp">Votre Login :</label>
    <input type="text" name="login" id="textfield2">
  </p>
  <p>
    <label for="textfield3">Mot de passe :</label>
    <input type="password" name="mdp" id="textfield3">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Se connecter">
  </p>
</form>
<p style="color:red">
<?php 
if(isset($_GET["msg"])) 
    echo $_GET["msg"];
?>
</p>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

</body>
</html>