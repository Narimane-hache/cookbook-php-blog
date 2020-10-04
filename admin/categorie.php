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
 
  <!-- blog de narimane hacheche -->
</head>

<body>

	<!-- navbar -->
  <?php include("admin.navbar.php"); ?>
  <!-- navbar -->
<main class=" bg_creamWhite p-5">
<!-- pour afficher l'alert en haut  -->
<?php  require "categConfig.php"  ;  ?>
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
    
    </div>
    <?php  endif ?>

  <div class="container"> 
    
    <?php

// blog de narimane hacheche

    $result = $connect -> query("SELECT * FROM category") or die($connect -> error);
  




// blog de narimane hacheche

    ?>  
    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
          <th>Catégorie </th>
          <th>type de recette</th>
          <th colspane="2">ACTION</th>
          </tr>
        
        </thead>
        <?php
            while ($row =$result->fetch_assoc()):
        // blog de narimane hacheche
        ?>
        <tr>
            <td> <?php  echo $row['categorie'];   ?></td>
            <td> <?php  echo $row['recettes'];   ?></td>
          

            <td>  <a href="categorie.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >Edit</a>

<!-- blog de narimane hacheche -->
            <a href="categConfig.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
        <?php  endwhile;   ?>
      </table>
      <div class="row justify-content-center">
        <form action="categConfig.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php  echo $id; ?>">
            <div class="form-group">
            <label for="">categorie:</label>
            <input type="text" name="categorie" id="categorie" class="form-control" value="<?php  echo $categorie;?>">
<!-- blog de narimane hacheche -->
            </div>
            <div class="form-group">
              <label for="recettes">Recettes:</label>
              <select  class="form-control" id="recettes" name="recettes">
              <option><?php  echo $recettes; ?></option>
                <option>salées </option>
                <option>Sucrées</option>
              
              </select>
            </div>
            <div class="form-group">
    <label for="photo">Inserer la photo</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
        
        <!-- blog de narimane hacheche -->
            <div class="form-group">
            <?php 
              if ($update == true):
            ?>
            <button type="submit" name  ="update" class=" btn btn-info">UPDATE</button>
            <?php else:?>


            <button type="submit" name  ="save" class=" btn btn-primary">CREATE</button>

            <?php endif ?>

            
            
            <!-- blog de narimane hacheche -->
            </div>
        
        </form>
    </div>
  </div>






</div>
</main>
<!-- blog de narimane hacheche -->


</body>
</html>










