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
	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>

<body>
	<!-- navbar -->
<?php include("inc/navbar.php");
 ?>
   <?php  require "config/setting.php"  ;  ?>
	<!-- navbar -->
<main class="bg_creamWhite pb-5">
<!-- blog de Narimane HACHECHE  -->

	<h1 class="text-center prata gold text p-5 ">Bienvenue Sur Cookbook </h1>
	<section class="Slider bg_creamWhite">
		<!-- blog de Narimane HACHECHE  -->

		<div id="carouselExampleControls" class="carousel slide w-50 m-auto" data-ride="carousel">
			<div class="carousel-inner text-center">
				<div class="carousel-item active ">
				<img src="assets/img/makrot (3).jpg" class="d-block w-100" alt="makrot ">
				</div>
				<div class="carousel-item ">
				<img src="assets/img/rechta.jpg" class="d-block w-100" alt="rechta ">
				</div>
				<div class="carousel-item ">
				<img src="assets/img/pain.jpg" class="d-block w-100" alt="pain ">
				</div>
			</div>
			<!-- blog de Narimane HACHECHE  -->

			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- blog de Narimane HACHECHE  -->

		</div>
	</section>
	
	
	<section class="recette-salees bg_creamWhite  ">
			<div class="borderTitle bg_lightGray m-5">
			<!-- blog de Narimane HACHECHE  -->

				<h2 class="text-center  darkBlue">Recettes salées </h2>
			</div>
			<div class=" row container m-auto">
			<!-- blog de Narimane HACHECHE  -->

			<?php 
	
	$catg = $connect -> query("SELECT * FROM category WHERE recettes='salées'  ;") or die($connect -> error);
	
        while ($row =$catg->fetch_assoc()):
    
    ?>

				<div class="col-12 col-lg-4  m-auto  p-5">
					<div class="card  m-auto mt-4 mb-4 " style="width: 18rem;">
					<?php $image = $row['image'];
    $image_src = "admin/uploadsCteg/".$image;?>
					<img src="<?php echo $image_src; ?>" class="card-img-top" alt="catégorie">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['categorie']; ?></h5>
							
							<a href="affiche_recipe.php?edit=<?php echo $row['id']; ?>" class="btn darkBlue text-align-right">Voir les recettes</a>
						</div>
					</div>
				</div>
				<?php  endwhile;   ?>
			
			</div>
			<!-- blog de Narimane HACHECHE  -->

			
	</section>
	<!-- recettes salées  -->
	<section class="recette-sucrées bg_creamWhite  ">
		<div class="borderTitle bg_lightGray m-5">
			<h2 class="text-center darkBlue ">Recettes sucrées </h2>
		</div>
		<div class=" row container m-auto">
		<!-- blog de Narimane HACHECHE  -->

		<?php   $suc = $connect -> query("SELECT * FROM category WHERE recettes='sucrées';") or die($connect -> error);
		  while ($row =$suc->fetch_assoc()):?>

			<div class="col-12 col-lg-4  m-auto p-5 ">
				<div class=" m-auto card mt-4 mb-4 " style="width: 18rem;">
				<?php $image = $row['image'];
    $image_src = "admin/uploadsCteg/".$image;?>
	<!-- blog de Narimane HACHECHE  -->

					<img src="<?php echo $image_src; ?>" class="card-img-top" alt="catégorie">
					<div class="card-body">
						<h5 class="card-title"><?php echo $row['categorie']; ?></h5>
						
						<a href="affiche_recipe.php?edit=<?php echo $row['id']; ?>" class="btn darkBlue text-align-right">Voir les recettes </a>
					</div>
				</div>
				<!-- blog de Narimane HACHECHE  -->

			</div>
			<?php  endwhile;   ?>
			
		</div>
		
	</section>
</main>

<!-- footer -->
<?php include("inc/footer.php"); ?>
<!-- footer -->
<script src="assets/js/script.js"></script>
</body>
</html>










