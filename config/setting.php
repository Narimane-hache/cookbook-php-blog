<?php

$connect = new mysqli('localhost','root','','cookbook') or die (mysqli_error($connect));

 
$titre="";
$descr="";
$categorie="";
$temp="";
$image="";
$niveau="";
$parts="";
$ingredients="";
$preparation="";
$note="";
$tag="";
$date="";
$id=0;
$update = false;


 $users = $connect -> query("SELECT * FROM users  ;") or die ($connect ->error);
 $row =$users->fetch_assoc();

// pour ajouter une nouvelle recette 
// on récupere le formulaire avec la methode POST 
if ( htmlspecialchars(isset($_POST['save']))) {
    // on enregistre les valeurs récupéréés dans des variables 
    $titre =  htmlspecialchars($_POST['titre']);
    $descr =  htmlspecialchars($_POST['descr']);
    $categorie =  htmlspecialchars($_POST['categorie']);
    $temp = htmlspecialchars( $_POST['temp']);
    // pour l'image :
    $image = $_FILES['image']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES['image']['name']);
    // image
    $niveau = htmlspecialchars( $_POST['niveau']);
    $parts = htmlspecialchars( $_POST['parts']);
    $user_id =  $row['id_user'];
    $ingredients =  htmlspecialchars($_POST['ingredients']);
    $preparation =  htmlspecialchars($_POST['preparation']);
    $note =  htmlspecialchars($_POST['note']);
    $tag =  htmlspecialchars($_POST['tag']);
    $date  = date ("Y-m-d H:i:s");
// on insere les variables dans la base de données avec la requete INSERT INTO 
    $connect -> query("INSERT INTO recettes(titre,descr,categorie,temp,image,niveau,parts,ingredients,preparation,note,tag,date,user_id) VALUES ('$titre','$descr','$categorie','$temp','$image','$niveau','$parts','$ingredients','$preparation','$note','$tag','$date','$user_id')") or die ($connect ->error);
    // enregistrer la photo le dossier upload
    move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$image);
    header("location:../admin/index.php" );
   
}


//pour supprimer 
// au click du lien de suppression on envoie les données par la méthode GET 
if (isset($_GET['delete'])) {
    //  // on onvoie l'id de la recette selectionné 
    $id = $_GET['delete'];
    // on supprime la recette avec l'id selectionné de la bdd avec l'instruction DELETE
    $connect -> query("DELETE FROM recettes WHERE id = $id") or die ($connect ->error);
   
    header("location:../admin/index.php" );
   
}
// fin supprimer





// pour modifier 
// edit
// au click du lien d'edit on envoie les données par la methode GET 
if (isset($_GET['edit'])) {
    // on onvoie l'id de la recette selectionné 
    $id = $_GET['edit'];
    $update = true;
    // on selectionne  les données de la recette avec son id depuis  la base de donnée 
     $result = $connect -> query("SELECT * FROM recettes WHERE id = $id") or die ($connect ->error);
    //  on verifie bien que l'id et les données existe dans la bdd 
    $test = mysqli_num_rows($result);
    if ($test ==1) {
        // si Oui ils existent on les stock les résulats dans un tableau associatif 
    $row = $result->fetch_array();
    // on récupére chaque valeur dans le tableau et on la stock dans des variables  
    $titre = $row['titre'];
    $descr = $row['descr'];
    $categorie = $row['categorie'];
    $temp = $row['temp'];
    // pour l'image :
    $image = $row['image'];
    $niveau = $row['niveau'];
    $parts = $row['parts'];
    $tag = $row['tag'];
    $ingredients = $row['ingredients'];
    $preparation = $row['preparation'];
    $note = $row['note'];
    }
}
    
// update
// Envoie du formulaire avec la methode POST 
    if (htmlspecialchars(isset($_POST['update']))) {
// enregistrer les valeurs récupérées du formulaire dans des variables 
    $id = htmlspecialchars( $_POST['id']);
    $titre =  htmlspecialchars($_POST['titre']);
    $descr =  htmlspecialchars($_POST['descr']);
    $categorie =  htmlspecialchars($_POST['categorie']);
    $temp =  htmlspecialchars($_POST['temp']);
    $niveau =  htmlspecialchars($_POST['niveau']);
    $parts = htmlspecialchars( $_POST['parts']);
    $image = $_FILES['image']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES['image']['name']);
    $ingredients = htmlspecialchars( $_POST['ingredients']);
    $preparation =  htmlspecialchars($_POST['preparation']);
    $note =  htmlspecialchars($_POST['note']);
    $tag =  htmlspecialchars($_POST['tag']);
    $date  = date ("Y-m-d H:i:s");
    // modifier les valeurs  de la base de données avec la requete UPDATE .... SET 
    $connect->query("UPDATE recettes SET titre='$titre', descr='$descr',categorie='$categorie',temp='$temp',image='$image',niveau='$niveau',parts='$parts',ingredients='$ingredients',preparation='$preparation',note='$note',tag='$tag',date='$date' WHERE id=$id") or die ($connect ->error);
    move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$image);
   
    header("location:../admin/index.php" );
   
    
       
    }
    

?>