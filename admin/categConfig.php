<?php

 $categorie="";
 $recettes="";
 $image="";
 
$id=0;
$update = false;
// blog de narimane hacheche

// pour ajouter un nouveau 
if ( htmlspecialchars(isset($_POST['save']))) {
    $categorie =  htmlspecialchars($_POST['categorie']);
    $recettes =  htmlspecialchars($_POST['recettes']);
      // pour l'image :
      $image = $_FILES['image']['name'];
      $target_dir = "uploadsCteg/";
      $target_file = $target_dir.basename($_FILES['image']['name']);
      // image
//   blog de narimane hacheche 
    $connect -> query("INSERT INTO category(categorie,recettes,image) VALUES ('$categorie','$recettes','$image')") or die ($connect ->error);
    echo "<script>alert(\"la catégorie est bien ajouter\")</script>";
     // enregistrer la photo le dossier upload
    move_uploaded_file($_FILES['image']['tmp_name'],'uploadsCteg/'.$image);
    header("location:categorie.php");
}

// pour supprimer 
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $connect -> query("DELETE FROM `category` WHERE id = $id") or die ($connect ->error);
    echo "<script>alert(\"la catégorie est bien supprimé \")</script>";
    header("location:categorie.php");
}
// blog de narimane hacheche
// pour edit
// modifier
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
     $result = $connect -> query("SELECT * FROM category WHERE id = $id") or die ($connect ->error);

    $test = mysqli_num_rows($result);
    if ($test ==1) {
        $row = $result->fetch_array();
        $categorie= $row['categorie'];
        $recettes=$row['recettes'];
      
        
    }
        // enregistrer les modif
    // blog de narimane hacheche
    
}
if ( htmlspecialchars(isset($_POST['update']))) {
    $id = htmlspecialchars( $_POST['id']);
    $categorie =  htmlspecialchars($_POST['categorie']);
    $recettes= htmlspecialchars($_POST['recettes']);
    $image = $_FILES['image']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES['image']['name']);
//   blog de narimane hacheche
    $connect->query("UPDATE  category  SET categorie='$categorie', recettes='$recettes', image='$image' WHERE id=$id") or die ($connect ->error);
    move_uploaded_file($_FILES['image']['tmp_name'],'uploadsCteg/'.$image);
// blog de narimane hacheche
    echo "<script>alert(\"la catégorie est bien modifié!\")</script>";
    header("location:categorie.php");
}


?>