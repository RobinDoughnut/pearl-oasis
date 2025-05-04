<?php

try
{
    require_once "dbh.inc.php";
    $category = ["ring","earring","necklace","pendant","bracelet","jewelry set"];
    $query = "SELECT * FROM products WHERE category = :category;";
    $stmt = $pdo->prepare($query);

    
    $stmt->bindParam(":category",$category[$index]);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    
 
}catch(PDOException $e){
    die("Query Failed: ".$e->getMessage());
    
}

?>