
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
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	
<!-- blog de narimane hacheche -->

	<link rel="icon" type="image/png" href="assets/img/icon.png"/>
	
	<link rel="stylesheet" type="text/css" href="../assets/css/helper.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/addRecipe.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/../addRecipe.js"></script>
  
</head>

<body>
<!-- blog de narimane hacheche -->
   <?php include("admin.config.php"); ?>
	<!-- navbar -->
  <?php include("admin.navbar.php"); ?>
  <!-- navbar -->
<main class=" bg_creamWhite p-5">
<!-- aficher l'alert  -->


<?php  require "../config/setting.php"  ;  ?>
  
<!-- blog de narimane hacheche -->
  <div class="container"> 
  



<!-- blog de narimane hacheche -->

<?php 
          if ($update == true):?>
<h1 class="text-center prata gold title m-3 "> 
        Modifer la recette</h1>
         <?php else:?>
          <h1 class="text-center prata gold title m-3 "> 
          Ajouts de la recette 
      </h1>
  
  <?php endif ?>
  <!-- blog de narimane hacheche -->

<form action="../config/setting.php" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php  echo $id; ?>">
  <!-- titre -->
  <div class="form-group">
    <label for="titre">Nom de la recette:</label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?php  echo $titre; ?> " >
    
  </div>
  <!-- blog de narimane hacheche -->

  <!-- description -->
  <div class="form-group">
    <label for="descr">Description</label>
    <input type="text" class="form-control" id="descr" name="descr"  value="<?php  echo $descr; ?> ">
  </div>
  <!-- categorie -->
  <?php   $catg = $connect -> query("SELECT * FROM category") or die($connect -> error);?>
  <div class="form-group">
  <label for="categ">Catégorie:</label>
    
    <select class="form-control" id="categ" name="categorie" >
    <?php
        while ($row =$catg->fetch_assoc()):
    
    ?>
    <!-- blog de narimane hacheche -->
    <option><?php  echo  $row['categorie']; ?> </option>
    <?php  endwhile;   ?>
     
    </select>
  </div>
<!-- blog de narimane hacheche -->
  <!-- photo -->
  <div class="form-group">
    <label for="photo">Inserer la photo</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
<!-- temp -->
  <div class="form-group">
    <label for="temp">Temps de préparation:</label>
    <input type="text" class="form-control" id="temp" name="temp" value=" <?php  echo $temp; ?>">
    
  </div>
<!-- blog de narimane hacheche -->
<!-- niveau -->
  <div class="form-group">
    <label for="niveau">Niveau</label>
    <select class="form-control" id="niveau" name="niveau" >
    
    <option><?php  echo $niveau; ?></option>
      <option>Facile</option>
      <option>Moyen</option>
      <option>Difficile</option>
    </select>
  </div>

<!-- blog de narimane hacheche -->



  <!-- parts -->
  <div class="form-group">
    <label for="parts">Parts:</label>
    <input type="text" class="form-control" id="parts" name="parts" value=" <?php  echo $parts; ?> ">
    
  </div>
  <!-- tag name -->
  <div class="form-group">
    <label for="tag">Tags :</label>
    <input type="text" class="form-control" id="tag" name="tag" value="<?php  echo $tag; ?>">
    
  </div>


<!-- ingredients -->
  <div class="form-group row">
    <label for="ingredients" class="col-12 col-md-3">ingredients:</label>
    
    <textarea class="form-control col-12 col-md-4" id="exampleFormControlTextarea" rows="3" placeholder="les ingredients" name="ingredients" ><?php  echo $ingredients; ?></textarea>
    

  </div>
  
<!-- blog de narimane hacheche -->
<!-- preparation -->
  <div class="form-group row">
    <label for="ingredients" class="col-12 col-md-3">Préparation:</label>
    
    <textarea class="form-control col-12 col-md-4" id="exampleFormControlTextarea1" rows="3" placeholder="la preparation" name="preparation" ><?php  echo $preparation; ?></textarea>
  </div>

  <!-- note -->
  <div class="form-group row">
    <label for="note" class="col-12 col-md-3">Note de l'auteur: </label>
    <input type="text" class="form-control" id="note" rows="3" name="note"  value="<?php  echo $note; ?>">

  </div>
  
      <!-- button -->
  
  <!-- blog de narimane hacheche -->
  <div class="form-group row">   
  <?php 
          if ($update == true):
        ?>
        <button type="submit" name  ="update" class=" btn  btn-primary col-3 m-5">UPDATE
        </button> 
        <a href="../config/setting.php?delete=<?php echo $id; ?>" class="btn btn-danger col-3 m-5">DELETE</a>
        <?php else:?>
    <button type="submit" class="btn btn-primary col-3 m-5" name="save">Enregistrer</button>
    <?php endif ?>
   <!-- blog de narimane hacheche -->
    
  </div>
 
  
</form>
</main>

<!-- blog de narimane hacheche -->

</body>
</html>










