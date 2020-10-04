<?php
session_start();
 include("config.php"); 




// blog de narimane hacheche

// <!-- delete account  -->
if (isset($_GET['delete'])) {
    $id_user = $_GET['delete'];
	$connect -> query("DELETE FROM users WHERE id_user = $id_user") or die ($connect ->error);
	session_destroy();
    header("location:index.php" );
    // blog de narimane hacheche
   
}

	
	
   

?>


