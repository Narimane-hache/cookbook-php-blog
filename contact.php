<!DOCTYPE html>
<html lang="fr" >
<head>
	<title>Cookbook</title>
	<meta charset="utf-8">
	<meta name="description" content="Cookbook est un blog de cuisine">
 	<meta name="keywords" content="Cookbook, cuisine,blog de cuisine,nourriture,recette">
 	<meta name="author" content="Hacheche Narimane">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://fonts.googleapis.com/css2?family=Lato&family=Prata&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/9213264f90.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css"> 	


	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/entree.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/entree.js"></script>
  
</head>
<body >
	<!-- navbar -->
<?php include("inc/navbar.php"); ?>
	<!-- navbar -->

  <main>
    
  <?php
// var_dump($_POST);


// connection bdd
if (isset($_POST['submit'])) {
// blog de narimane hacheche
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$objet = $_POST['objet'];

if ($name !='' && $email !='' && $message !='' && $objet !='' ) {

    
$query = "INSERT INTO contact (nom,email,objet,message) VALUES ('$name','$email','$objet','$message')";

$result = mysqli_query($connect,$query);
// var_dump($connect);
// var_dump($query);

if ($result) {

 echo "Message bien envoyé, Merci de nous avoir contacté";
 

} else{

 //echo "ERROR";



}

} else{

//echo 'Values not set';

}

}

?>
   
   

    <main class="bg_creamWhite p-5">

    <div id="container">
  <h1>&bull; Contactez nous  &bull;</h1>
  <div class="underline">
  </div>
  <form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Nom" name="name" id="name_input" required>
    </div>
    <!-- blog de Narimane HACHECHE  -->

    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Email" name="email" id="email_input" required>
    </div>
    
    <div class="subject">
      <label for="subject"></label>
      <input type="text" placeholder="Objet" name="objet" id="telephone_input" required>
     
    </div>
    <!-- blog de Narimane HACHECHE  -->

    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="message" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Envoyer" id="form_button" name="submit" />
    </div>
    <div class="msg_envoyé">
    </div>
    <!-- blog de Narimane HACHECHE  -->

  </form><!-- // End form -->
</div><!-- // End #container -->
</main>

<?php
// var_dump($_POST);


// $connect = mysqli_connect("localhost","root","","cookbook");

// if (isset($_POST['submit'])) {

// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $objet = $_POST['objet'];

// if ($name !='' && $email !='' && $message !='' && $objet !='' ) {

    
// $query = "INSERT INTO contact (nom,email,objet,message) VALUES ('$name','$email','$objet','$message')";

// $result = mysqli_query($connect,$query);
// // var_dump($connect);
// // var_dump($query);

// // if ($result) {

// //  echo "Message bien envoyé, Merci de nous avoir contacté";
 

// // } else{

// //  //echo "ERROR";



// // }

// } else{

// //echo 'Values not set';

// }

// }

?>


</main>

<!-- footer -->
<?php include("inc/footer.php"); ?>
<!-- footer -->
</body>
</html>










