<?php
require_once ("connect.php");
$myid;
if(!empty($_GET["id"])) {

	$sql = "Select * from toy where id =" . $_GET["id"];
	echo $sql;
	$result = mysqli_query($conn, $sql);



    $m_id;
	$m_name;
	$m_code;
	$m_category;
	$m_cost;
	$m_stock;

	if (mysqli_num_rows($result) == 0) {
		echo '<tr><td colspan="6">No Rows Returned</td></tr>';
	} else {
		$row = mysqli_fetch_assoc($result);
		{
			$m_id = $row['id'];
			$m_name = $row['name'];
			$m_code = $row['code'];
			$m_category = $row['category'];
			$m_cost = $row['price'];
			$m_stock = $row['stock_count'];
		}
	}


}
?>

<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">


            <h1 style="colo:orange">Update Record</h1>
			<div class="form-group">
			<form  action="edit.php" method="get">

				<input type="text" name="id" id="id">
				<input type="submit" name="Search" value="Search">


			</form>
			</div>
			<div class="form-group">
				<form action="update.php" method="get">

					<h2>ID</h2>

				<input type="text" name="id" id="id" value="<?php if(!empty($m_id)){echo $m_id;} else {echo ' ';} ?>">

					<h2>Name</h2>

			    <input type="text" name="name" id="name" value="<?php if(!empty($m_name)){echo $m_name;} else {echo ' ';} ?>">

					<h2>Code</h2>

				<input type="text" name="code" id="code" value="<?php if(!empty($m_code)){echo $m_code;} else {echo ' ';} ?>">

					<h2>Category</h2>

				<input type="text" name="category" id="category" value="<?php if(!empty($m_category)){echo $m_category;} else {echo ' ';} ?>">

					<h2>Price</h2>

				<input type="text" name="price" id="price" value="<?php if(!empty($m_cost)){echo $m_cost;} else {echo ' ';} ?>">

					<h2>Stock Count</h2>

				<input type="text" name="stock_count" id="stock_count" value="<?php if(!empty($m_stock)){echo $m_stock;} else {echo ' ';} ?>">
					<input type="submit" value="Update" name="Submit">

				</form>
			</div>




		</div>
	</div>
</div>


</body>
</html>