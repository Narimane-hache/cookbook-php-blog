<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username =$email = $password = $confirm_password = "";
$username_err =$email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// si le nom est valide 
    if( htmlspecialchars(empty(trim($_POST["username"]))) ){
        $username_err = "Veuillez entrer votre nom.";
    } else{
        // on prépare la requetes 
        $sql = "SELECT id_user FROM users WHERE nom = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // lier les variables à la requetes 
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // assembler les  parameters
            $param_username = htmlspecialchars(trim($_POST["username"]));
            
          
            mysqli_stmt_close($stmt);
        }
    }
    // valider l'email
    if( htmlspecialchars( empty(trim($_POST["email"])))){
        $email_err = "Veillez bien entrer votre email .";
    } else{
        // preparer la requetes SELECT 
        $sql = "SELECT id_user FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // lier les variables a la prepared statement pour les mettre en parametre 
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email= htmlspecialchars( trim($_POST["email"])); 
            // exécuter la requete 
            if(mysqli_stmt_execute($stmt)){
                /* resotorer le resulat  */
                mysqli_stmt_store_result($stmt);
                // verifier si l'email n'est pas déja utilisé 
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Cet email est déja utilisé.";
                } else{
                    $email = htmlspecialchars(trim($_POST["email"]));
                }
            } else{
                echo "Oops! Une erreur d'est produite, veuillez ressayer ulterieurement .";
            }

            // fermeture 
            mysqli_stmt_close($stmt);
        }
    }
    
    // Valider le mot de passe 
    // verifier si le champs mot de passe est remplis 
    if( htmlspecialchars(empty(trim($_POST["password"])))){
        $password_err = "Veuillez indiquer votre mot de passe ."; 
        // verifier si le mot de passe contient plus de 6 caractères 
    } elseif( htmlspecialchars(strlen(trim($_POST["password"])) < 6)){
        $password_err = "Le mot de passe doit contenir au moins 6 caractères .";
    } else{
        $password =  htmlspecialchars(trim($_POST["password"]));
    }
    
    // Valider le mot de passe de confirmation 
    // verifier si le champs est bien remplis
    if( htmlspecialchars(empty(trim($_POST["confirm_password"])))){
        $confirm_password_err = "Veuillez confirmer le mot de passe"; 
            //verifier si les 2 mots de passe sont identiques  
    } else{
        $confirm_password = htmlspecialchars( trim($_POST["confirm_password"]));
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Les mot de passe ne sont pas identiques";
        }
    }
    
    // Vérifier si y'a aucune erreur 
    if(empty($username_err)&& empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Préparer la requete 
        $sql = "INSERT INTO users (nom,email, password) VALUES (?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
			$param_username = $username;
			$param_username = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

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
	

<!-- main -->
<!---->

<!--  -->
<div class="main-w3layouts wrapper">
		<h1> S'inscrire  </h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
            <!-- blog de narimane -->
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
				<input class="text name" type="text" name="username" placeholder="Nom" required="">
				<span class="help-block"><?php echo $username_err; ?></span>
				</div>  
                <!-- blog de narimane -->
				<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
					<input class="text email" type="email" name="email" placeholder="Email" required>
					<span class="help-block"><?php echo $email_err; ?></span>
				</div>  
<!-- blog de narimane -->
				<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
					<input class="text" type="password" name="password" placeholder="Mot de passe" required>
					<span class="help-block"><?php echo $password_err; ?></span>
            </div>
					<input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirmer le mot de passe " required="">
					<span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <!-- blog de narimane -->
			<div class="form-group">
					<input type="submit" value="S'INSCRIRE" name="submit">
				
            </div>
				</form>
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










