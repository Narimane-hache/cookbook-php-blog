<?php  require "config/setting.php"  ;  ?>
    <?php  require "./admin/categConfig.php"  ;  ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">  <img src="assets/img/logo.png" alt="logo cookbook">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recettes salées
        </a>
        <?php   $sal = $connect -> query("SELECT * FROM category WHERE recettes='salées';") or die($connect -> error);
         ?>

       
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
        while ($row =$sal->fetch_assoc()):
          // print_r ($row);
    
          // blog d narimane
    ?>
          <a class="dropdown-item" href="affiche_recipe.php?edit=<?php echo $row['id']; ?>"><?php  echo  $row['categorie']; ?></a>
          <?php  endwhile;   ?>
        </div>
       
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recettes sucrées
        </a>
        <?php   $suc = $connect -> query("SELECT * FROM category WHERE recettes='sucrées';") or die($connect -> error);?>
<!-- blog de narimane -->

        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <?php
while ($row =$suc->fetch_assoc()):

?>
          <a class="dropdown-item" href="affiche_recipe.php?edit=<?php echo $row['id']; ?>"><?php  echo  $row['categorie']; ?></a>
          <?php  endwhile;   ?>
        </div>
       
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php" tabindex="-1">Contact</a>
      </li>
    </ul>
  </div>
</nav>