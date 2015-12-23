<?php
// include to get database connection
include_once 'admin/database.php';

try{
    // PDO update query
    $query = "UPDATE
                products
            set
                name = :name,
                description = :description,
                price = :price
            where
                id = :id";

    // prepare query for execution
    $stmt = $con->prepare($query);

    // bind the parameters
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':id', $_POST['id']);

    // execute the query
    if($stmt->execute()){
        echo "Product was updated.";
    }else{
        echo "Unable to update product.";
    }
}

// handle error
catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>
