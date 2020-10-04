<!DOCTYPE html>
<html lang="fr">
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
 	


	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/recipe.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  
</head>
<!-- blog de Narimane HACHECHE  -->

<body  >
	<!-- navbar -->
<?php include("inc/navbar.php"); ?>
  <!-- navbar -->
  <?php  require "config/setting.php"  ;  ?>
   

  <div class="container"> 

 
  <?php
  //  <!-- connection à la bdd  -->
    $result = $connect -> query("SELECT * FROM recettes");
  ?>
  <!-- fin de connection -->
<!-- blog de Narimane HACHECHE  -->

<main class="m-5 bg_creamWhite p-5">
    <!-- boucle pour lire de la bdd -->
     <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
    <h1 class="text-center prata gold title m-3 "><?php  echo $row['titre']; ?> </h1>
    <p class="description text-justify text-center">
    <?php echo $row['descr']; ?>
    </p>
    <!-- blog de Narimane HACHECHE  -->

    <div class="recettePhoto  m-5 text-center">
    <?php $image = $row['image'];
    $image_src = "config/upload/".$image;?>
        <img src="<?php echo $image_src; ?>" alt="recette" class="w-100">
    </div>
    <div class="barre row text-center">
        <div class="tempPreparation col-3 m-4"><i class="far fa-clock"></i>Temps:<span id="time"> <?php  echo $row['temp'];   ?></span></div>
        <div class="parts col-3 m-4"><i class="fas fa-utensils"></i>Parts: <span id="parts"> <?php  echo $row['parts'];   ?></span></div>
        <div class="niveau col-3 m-4"> Niveau:  <span id="niveau"> <?php  echo $row['niveau'];   ?></span>  </div>
<!-- blog de Narimane HACHECHE  -->

    </div> 


    
 
    
    






<!-- blog de Narimane HACHECHE  -->

    <div class="row">  

        <div class="ingredients col-12 ">
          <h2 class="box text-center darkBlue">Ingredients</h2>
          <ul id="ingredients-list" class="saver row"   >
            <div class="col12 col-md-5 m-3">
            <?php  echo $row['ingredients'];   ?>
            
            </div>
          <!-- blog de Narimane HACHECHE  -->
  
            <div class="col12 col-md-5 m-3">
           
            </div>
          </ul>
        </div>
<!-- blog de Narimane HACHECHE  -->

        <div class="instructions col-12  ">
          <h2 class="box text-center darkBlue">Préparation</h2>
          <ol id="method-list" class="saver" contenteditable="true" >
          <?php  echo $row['preparation'];   ?>
          </ol>
        </div>
      </div>
      <!-- blog de Narimane HACHECHE  -->

      <div class="quote-container">
  <i class="pin"></i>
  <blockquote class="note couleur">
  <?php  echo $row['note'];   ?>
  
  </blockquote>
</div>
    </div>

   
<!-- fin de la boucle  -->
<!-- blog de Narimane HACHECHE  -->

    
</main>

<!-- blog de Narimane HACHECHE  -->

<!-- footer -->
<?php include("inc/footer.php"); ?>
<!-- footer -->
</body>
</html>










