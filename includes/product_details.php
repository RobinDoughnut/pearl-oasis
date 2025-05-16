<?php

function getProductDetails($id)
{

    try {
        require_once "dbh.inc.php";
        $query = "SELECT * FROM products WHERE id = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());


    }
}

?>