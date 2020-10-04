<?php
// blog de narimane hacheche
$result = $connect -> query("SELECT * FROM users  ;") or die($connect -> error);
$row =$result->fetch_assoc()
 ?>
<nav class="navbar navbar-expand-lg text-light bg-dark">
  <a class="navbar-brand text-light" href="index.php">  Admin </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- blog de narimane hacheche -->
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link text-light" href="../index.php" tabindex="-1">Visite le site</a>
      </li>
      <li class="nav-item dropdown bg-dark">
        <a class="nav-link dropdown-toggle text-light bg-dark" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recettes 
        </a>
        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown2">
          <a class="dropdown-item text-dark" href="myrecipe.php">Voir mes recettes </a>
          <a class="dropdown-item text-dark" href="addRecipe.php">Ajouter une nouvelle recette</a>
         
        </div>
      </li>
<!-- blog de narimane hacheche -->
      <li class="nav-item">
        <a class="nav-link text-light" href="categorie.php" tabindex="-1">Catégories</a>
      </li>
      <!-- blog de narimane hacheche -->
      <li class="nav-item dropdown bg-dark">
        <a class="nav-link dropdown-toggle text-light bg-dark" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Mon Compte 
        </a>
        <!-- blog de narimane hacheche -->
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item text-dark" href="logout.php">Déconnexion</a>
          <a class="dropdown-item text-dark" href="reset_password.php">Reinitialiser le mot de passe </a>
          <a class="dropdown-item text-dark" href="admin.config.php?delete=<?php echo $row['id_user']; ?>">Supprimer le compte</a>
         
        </div>
      </li>
    
    </ul>
  </div>
</nav>
