<?php
// include to get database connection
include_once 'admin/database.php';

try{

    // set your default time-zone
    date_default_timezone_set('Asia/Manila');
    $created=date('Y-m-d H:i:s');

    // write query
    $query = "INSERT INTO products SET name=:name, description=:description, price=:price, created=:created";

    // prepare query for execution
    $stmt = $con->prepare($query);

    // bind the parameters
    // this is the first question mark
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":description", $_POST['description']);
    $stmt->bindParam(":price", $_POST['price']);
    $stmt->bindParam(":created", $created);

    // execute the query
    if($stmt->execute()){
        echo "Product was created.";
    }else{
        echo "Unable to create product.";
    }
}

// handle error
catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}

?>
