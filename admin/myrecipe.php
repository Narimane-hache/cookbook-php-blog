<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
     <script src="https://kit.fontawesome.com/9213264f90.js" crossorigin="anonymous"></script>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css"> 	


	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.index.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
  
</head>
<body>
<?php 

    
    ?>
    <!-- blog de narimane hacheche -->

<?php include("admin.navbar.php"); ?>
<?php include("config.php"); ?>

<?php
// blog de narimane hacheche

$result = $connect -> query("SELECT recettes.id,titre,recettes.categorie FROM recettes INNER JOIN users ON recettes.user_id = users.id_user
;") or die($connect -> error); ?>



<main>
<!-- blog de narimane hacheche -->

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">recette</th>
      <th scope="col">catégorie</th>
      <th scope="col">modifier la recette</th>
     <!-- blog de narimane hacheche -->
    </tr>
  </thead>
  <tbody>
  <?php
        while ($row =$result->fetch_assoc()):
    // blog de narimane hacheche
    ?>
    <tr>
      <th scope="row"><?php  echo $row['id']; ?> </th>
      <td><?php  echo $row['titre']; ?></td>
      <td><?php  echo $row['categorie']; ?></td>
      <td>  <a href="addRecipe.php?edit=<?php echo $row['id'];?>">
          <i class="fas fa-edit" ></i>
          </a></td>
    </tr>
    <?php  endwhile;   ?>
    
  </tbody>
</table>







</main>





  
    
  






<?php


?>





</body>
</html>














