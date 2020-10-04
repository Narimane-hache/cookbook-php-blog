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
   <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/helper.css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">

	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/entree.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/entree.js"></script>

</head>

<body >
	<!-- navbar -->
<?php include("inc/navbar.php"); ?>
	<!-- navbar -->
    <?php  require "config/setting.php"  ;  ?>
    <?php  require "./admin/categConfig.php"  ;  ?>
<main  class="bg_creamWhite p-5">
<!-- blog de narimane  -->
<?php 
// conection bdd
$catg = $connect -> query("SELECT * FROM category   ;") or die($connect -> error);

 ?>
 <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
 <?php 
//  blog de narimane 
 $categorie_chois = $row['categorie'];
 $result = $connect -> query("SELECT * FROM recettes WHERE categorie = '$categorie_chois' ;") or die($connect -> error);
?>
<!-- blog de narimane -->
	<h1 class="text-center prata gold title p-3 "><?php  echo $row['categorie']; ?>  </h1>
    <?php
        while ($row =$result->fetch_assoc()):
    ?>
    <div class="blog-card">
    <div class="meta">
     <?php $image = $row['image'];
    //  blog de narimane 
    $image_src = "config/upload/".$image;?>
      <div class="photo" style="background-image: url('<?php echo $image_src; ?>')"></div>
      <ul class="details">
      <!-- blog de narimane  -->
        <li class="level"><a href="#"><?php  echo $row['niveau'];   ?></a></li>
        <li class="date"><?php  echo $row['date'];   ?></li>
        <li class="tags">
          <ul>
            <li><a href="#"><?php  echo $row['tag'];   ?></a></li>
            
          </ul>
        </li>
      </ul>
    </div>
    <!-- blog de narimane  -->
    <div class="description">
      <h1 class="darkBlue"><?php  echo $row['titre'];   ?></h1>
      <p class="Pgray"> <?php  echo $row['descr'];   ?></p>
      <p class="read-more">
         <a href="recipe.php?edit=<?php echo $row['id']; ?>">voir la recette</a> 
      </p>
    </div>
  </div>
  <?php  endwhile;   ?>
  </main>


<!-- footer -->
<?php include("inc/footer.php"); ?>
<!-- footer -->
</body>
</html>