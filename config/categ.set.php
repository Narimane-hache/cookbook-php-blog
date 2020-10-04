<?php
 $connect = new mysqli('localhost','root','','cookbook') or die (mysqli_error($connect));
//$connect -> query("SELECT * FROM recettes ;") or die ($connect ->error);

function get_posts(){
    $connect = new mysqli('localhost','root','','cookbook'
    $req = $connect -> query("SELECT * FROM recettes ") ;

    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results ;
}




?>