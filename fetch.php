

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
h1 {text-align: center;}
a:hover {
  /* background-color: green; */
}
</style>
<body>
	<div class ="main-div">
		<h1>Here is the data</h1>
		<div class = "center-div">
		 	<div>
				 <table>
					 <thead>
					 <table border="1" cellspacing="5" cellpadding="10"> 
						 <tr>
							 <th>Category  </th>
							 <th>Subcategory  </th>
							 <th>Name Description  </th>
							 <th>Barcode  </th>
							 <th>Cost  </th>
							 <th>Sales  </th>
							 <th>Retails  </th>
							 <th>Number of Units  </th>
							 <th>Brand  </th>
							 <th colspan="2">operation  </th>
 						</tr>	 
 					</thead>	 
					 <tbody>
					 <?php

					include 'connection.php';
					
					$selectquery = " select * from my_form.table " ;

					$query = mysqli_query($con,$selectquery);

					$nums = mysqli_num_rows($query);
					

					while($res = mysqli_fetch_array($query)){
					?>
						<!-- // echo $res['Category']."<br>"; -->
						
						<tr>
						<td><?php echo $res['Category'];?></td>
						<td><?php echo $res['Subcategory'];?></td>
						<td> <?php echo $res['Name Description'];?></td>
						<td> <?php echo$res['Barcode'];?></td>
						<td> <?php echo $res['Cost'];?></td>
						<td> <?php echo $res['Sales'];?></td>
						<td> <?php echo $res['Retails'];?></td>
						<td> <?php echo $res['Number of Units'];?></td>
						<td> <?php echo $res['Brand'];?></td>
						<td><a href="update.php?Barcode=<?php echo $res['Barcode']; ?>">Edit</a></td>
						<td><a href="delete.php?Barcode=<?php echo $res['Barcode']; ?>">Delete</a></td>
						
					</tr>
					
					<?php	
					}

						?>
					
						
					</tbody>
 				 </table>			 
			</div>	
 		</div>
</body>
</html>