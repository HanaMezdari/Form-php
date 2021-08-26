<?php
// déclaration
if(isset($_GET['nom'])){
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$telephone=$_GET["telephone"];
$adresse=$_GET["adresse"];
$email=$_GET["email"];
$envoyer=$_GET["envoyer"];
$erreur="";
}


if(isset($envoyer))
  {
    // Le nom est-il rempli ?
    if(empty($nom)) $erreur= "<li>Veuillez entrer votre nom svp !</li>";
    if(empty($prenom)) $erreur.= "<li>Veuillez entrer votre prenom svp !</li>";
    if(empty($telephone)) $erreur.= "<li>Veuillez entrer votre telephone svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Veuillez entrer votre adresse svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez entrer votre email svp !</li>";


  }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <div class="container">
  <form name="fo" method="GET" action="">
     <fieldset>
        <legend><h1>Inscription</h1></legend>
        
        
                
        <div class="label">Nom</div>
        <div class="champ">
           <input type="text" name="nom" value="" />
        </div>
        <div class="label">Prénom</div>
        <div class="champ">
           <input type="text" name="prenom" value="" />
        </div>
        <div class="label">Email</div>
        <div class="champ">
           <input type="text" name="email" value="" />
        </div>
        <div class="label">Adresse</div>
        <div class="champ">
           <input type="Adresse" name="adresse"  value="" />
        </div>
        <div class="label">Téléphone</div>
        <div class="champ">
           <input type="telephone" name="telephone" value="" />
        </div>
        <div class="champ">
           <input type="submit" name="envoyer" value="envoyer" />
        </div>
     </fieldset>
</form>
<?php if(!empty($erreur)){ ?>


<div id="erreur"><?php echo $erreur ?></div>
<?php }  ?>
</div>
    <style>
    body{
            margin: 50px;
         
         }
         
         fieldset{
            border: 3px solid rgb(40, 25, 17);
            border-radius:10px;
            box-shadow:0 10px 15px 0 black;
            padding-left: 300px;
         }
         legend{
            font:bold 20px arial;
            color:#ccc;
         }
         input{
            height: 25px;
            width: 400px;
         }
         
         input[type="submit"]{
            border:none;
            background-color:#03a9f4;
            color:#fff;
            font-size: 25px;
            width:180px;
            height: 30px;
            cursor:pointer;
            margin-left:500px;
         }
         .label{
            margin-bottom:10px;
            font:20px arial;
            color:#03a9f4;
         }
         .champ{
            margin-bottom:20px;
         }
         #erreur{
            font:10pt arial;
            color:#DD0000;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }

.legend h1 {
	color: #fff;
	font-size: 35px;
	position: absolute;
	
}

.container h1:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #03a9f4;
}



</body>
</html>
