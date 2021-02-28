
<?php

include "connection.php"; // Using database connection file here

$Barcode = $_GET['Barcode']; // get id through query string

$qry = mysqli_query($con,"select * from my_form.table where Barcode='$Barcode'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $category =$_POST ['category'];
    $subcategory =$_POST['subcategory'];
    $nameDescription =$_POST['nameDescription'];
    $barcode =$_POST['barcode'];
    $cost =$_POST ['cost'];
    $sales =$_POST ['sales'];
    $retails =$_POST ['retails'];
    $numberofUnits =$_POST ['numberofUnits'];
    $brand =$_POST['brand'];
	
    $edit = mysqli_query($con,"update my_form.table set `Category`='$category',`Subcategory`='$subcategory',`Name Description`
    ='$nameDescription',`Barcode`='$barcode',`Cost`='$cost',`Sales`='$sales',`Retails`='$retails',`Number of Units`=
    '$numberofUnits',`Brand`='$brand'");
	
    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:index.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "mysqli_error()";
    }    	
}
?>

<h3>Update Data</h3>

<form  method="post">
            Category:  <input type="text" name="category" id="category" placeholder="Enter the category"><br>
            Subcategory:  <input type="text" name="subcategory" id="subcategory" placeholder="Enter the subcategory:"><br>
            Name Description:  <input type="text" name="nameDescription" id="nameDescription" placeholder="Enter the description"><br>
            Barcode:  <input type="text" name="barcode" id="barcode" placeholder="Enter the barcode"><br>
            Cost:  <input type="text" name="cost" id="cost" placeholder="Enter the Cost"><br>
            Sales:  <input type="text" name="sales" id="sales" placeholder="Enter Sales%"><br>
            Retails:  <input type="text" name="retails" id="retails" placeholder="Enter Retails"><br>
            Number of Units: <input type="text" name="numberofUnits" id="numberofUnits" placeholder="Enter number of units"><br>
            Brand:  <input type="text" name="brand" id="brand" placeholder="Enter the brand"><br>
             <input type="submit" name="update" value="Update">
            
            </span>
        </form>