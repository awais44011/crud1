<?php

require_once ("connect.php");

$items_per_page = 10;
$sql = "Select COUNT(id) as num from toy";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$total_rows = $row['num'];

$total_pages = ceil($total_rows / $items_per_page);



if(!isset($_GET['page'])){
	$_GET['page'] = 0;
}else{
	// Convert the page number to an integer
	$_GET['page'] = (int)$_GET['page'];
}

// If the page number is less than 1, make it 1.
if($_GET['page'] < 1){
	$_GET['page'] = 1;
	// Check that the page is below the last page
}else if($_GET['page'] > $total_pages){
	$_GET['page'] = $total_pages;
}

$getpage = $_GET['page'];


// Calculate the starting number
$start = ($_GET['page'] - 1) * $items_per_page;

// SQL Query
$sql2 = "SELECT * FROM toy LIMIT $start,$items_per_page";
$result2 = mysqli_query($conn,$sql2);

?>



<html>
<head>
	<title>My Crud</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container">

	<div class="row">

		<div class="col-md-8 offset-md-2">

			<h1>Welcome to my CRUD</h1>
			<br>
			<a href="add.php"><button type="button" class="btn btn-warning">Add Record</button></a>
			<a href="edit.php"><button type="button" class="btn btn-success">Edit Record</button></a>
			<a href="delete.php"><button type="button" class="btn btn-danger">Delete Record</button></a>

			

			<br>
			<br>
			<table class="table table-hover">

				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Code</th>
					<th>Category</th>
					<th>Price</th>
					<th>Stock</th>


				</tr>


				<?php
				if( mysqli_num_rows( $result2 )==0 ){
					echo '<tr><td colspan="6">No Rows Returned</td></tr>';
				}else {
					while ($row = mysqli_fetch_assoc($result2)) {

						echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['code']}</td><td>{$row['category']}</td><td>{$row['price']}</td><td>{$row['stock_count']}</td></tr>\n";
					}
				}
				?>



			</table>

			<?php
			foreach(range(1, $total_pages) as $page){
				if($page == 1 || $page == $total_pages || ($page >= $getpage - 2 && $page <= $getpage + 2)){
					echo '<a style="padding:1%" href="?page=' . $page .'"><button type="button" class="btn btn-primary"> ' . $page . '</button></a>';
				}
			}
			?>

		</div>

	</div>

</div>






</body>
</html>

