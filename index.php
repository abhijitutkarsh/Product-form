<?php
$insert = false;
if(isset($_POST['category'])){
    //set connection variables
    $server ="localhost";
    $username = "root";
    $password = "";

    //create a datebase connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    
    // echo "Success connecting to the db";

    //collect post variables

    $category =$_POST ['category'];
    $subcategory =$_POST['subcategory'];
    $nameDescription =$_POST['nameDescription'];
    $barcode =$_POST['barcode'];
    $cost =$_POST ['cost'];
    $sales =$_POST ['sales'];
    $retails =$_POST ['retails'];
    $numberofUnits =$_POST ['numberofUnits'];
    $brand =$_POST['brand'];
    $sql="INSERT INTO my_form.table ( `Category`, `Subcategory`, `Name Description`,
     `Barcode`, `Cost`, `Sales`, `Retails`, `Number of Units`, `Brand`, `dt`) 
    VALUES ('$category', '$subcategory', '$nameDescription', '$barcode', '$cost', '$sales', 
    '$retails', '$numberofUnits', '$brand', 'current_timestamp()');";
    
    // echo $sql;

    //execute the query

    if($con->query($sql) == true){
        //  echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        
    }

    // Close the database connection
    $con->close();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Add Product!!</h3>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Your form is submitted. Thank You</p>";
        }
        ?>
        <form action="index.php" method="post">
            Category:  <input type="text" name="category" id="category" placeholder="Enter the category"><br>
            Subcategory:  <input type="text" name="subcategory" id="subcategory" placeholder="Enter the subcategory:"><br>
            Name Description:  <input type="text" name="nameDescription" id="nameDescription" placeholder="Enter the description"><br>
            Barcode:  <input type="text" name="barcode" id="barcode" placeholder="Enter the barcode"><br>
            Cost:  <input type="text" name="cost" id="cost" placeholder="Enter the Cost"><br>
            Sales:  <input type="text" name="sales" id="sales" placeholder="Enter Sales%"><br>
            Retails:  <input type="text" name="retails" id="retails" placeholder="Enter Retails"><br>
            Number of Units: <input type="text" name="numberofUnits" id="numberofUnits" placeholder="Enter number of units"><br>
            Brand:  <input type="text" name="brand" id="brand" placeholder="Enter the brand"><br>
            <button class="btn">Submit</button>
            <span><button class="btn"><a href="fetch.php">Show</a></button>
            </span>
        </form>
    </div>
    <script src ="index.js"></script>
   </body>
</html>