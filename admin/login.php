<?php
// Initialize the session

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// Include config file
require_once "config.php";
//  blog de narimane hacheche
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
//  blog de narimane hacheche
    // Verifier si les champs email et mot de passe sont remplis 
    if( htmlspecialchars(empty(trim($_POST["email"])))){
        $email_err = "Please enter your email.";
    } else{
		$email = htmlspecialchars( trim($_POST["email"]));
    }
    if( htmlspecialchars(empty(trim($_POST["password"])))){
        $password_err = "Please enter your password.";
    } else{
        $password =  htmlspecialchars(trim($_POST["password"]));
    }
    // si y'a aucune erreur 
    if(empty($email_err) && empty($password_err)){
        // Préparer la requete 
        $sql = "SELECT id_user, email, password FROM users WHERE email = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Lier les variabes aux requetes en parametre
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $email;
            // Exécuter la requete préparée
            if(mysqli_stmt_execute($stmt)){
                // blog de narimane hacheche
                // restorer le resultat
                mysqli_stmt_store_result($stmt);
                // Verifier si l'email existe puis verifier le mot de passe 
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // lit les variables au jeu de résultats 
                    mysqli_stmt_bind_result($stmt, $id_user, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // mot de passe correcte donc commencer une nouvelle session 
                            session_start();
                            // envoyer les données 
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_user"] = $id_user;
                            $_SESSION["email"] = $email;  
                            // redirection 
                            header("location: index.php");
                        } else{
                            //Si le mot de passe n'est pas valide indiquer le message d'erreur 
                            $password_err = "Le mot de passe est incorrecte";
                        }
                    }
                    // blog de narimane hacheche
                } else{
                    
                    $email_err = "Email non valide ";
                }
            } else{
                echo "Oops! Veuillez ressayer ulterierement ";
            }

            // blog de narimane hacheche
            // fermeture 
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!-- blog de narimane hacheche -->

<!DOCTYPE html>
<html lang="fr" class="bg_creamWhite">
<head>
	<title>Cookbook</title>
	<meta charset="utf-8">
	<meta name="description" content="Cookbook est un blog de cuisine">
 	<meta name="keywords" content="Cookbook, cuisine,blog de cuisine,nourriture,recette">
 	<meta name="author" content="Hacheche Narimane">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://fonts.googleapis.com/css2?family=Lato&family=Prata&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css"> 	


	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/signup.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
  
</head>
<body>
	
<!-- blog de narimane hacheche -->



<!-- main -->
<div class="main-w3layouts wrapper">
		<h1>Se Connecter</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			
				<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<span class="help-block"><?php echo $email_err; ?></span>
            </div>   
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"> 
					<input class="text" type="password" name="password" placeholder="mot de passe " required="">
					<span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group">
	<!-- blog de narimane hacheche -->
    				<input type="submit" value="SE CONNECTER" name="login">
					</div>
				</form>
				<p>vous n'avez pas déjà un compte ? <a href="signup.php"> S'inscrire </a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
</div>
	<!-- //main -->




  
    
  






<?php


?>





</body>
</html>










