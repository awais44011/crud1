<?php
require_once("connect.php");


if(isset($_POST["submit"])) {
    $sql = "INSERT INTO toy(name, code, category, price, stock_count) VALUES('".$_POST["name"]."','".$_POST["code"]."','".$_POST["category"]."',".$_POST["price"].",".$_POST["stock_count"].")";

    $result = mysqli_query($conn,$sql);
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.form-group{
			background: grey;
		}
		form{
			padding-left: 30%;
		}
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-8">
<div class="form-group">

<form name="frmToy" method="post" action="add.php">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="demoInputBox">
</div>
<div>
<label>Code</label>
<span id="code-info" class="info"></span><br/>
<input type="text" name="code" id="code" class="demoInputBox">
</div>
<div>
<label>Category</label> 
<span id="category-info" class="info"></span><br/>
<input type="text" name="category" id="category" class="demoInputBox">
</div>
<div>
<label>Price</label> 
<span id="price-info" class="info"></span><br/>
<input type="text" name="price" id="price" class="demoInputBox">
</div>
<div>
<label>Stock Count</label> 
<span id="stock_count-info" class="info"></span><br/>
<input type="text" name="stock_count" id="stock_count" class="demoInputBox">
</div>
<div>
	<br>
<input type="submit" name="submit" id="btnAddAction" value="Add Record" />
</div>
</div>

    </form>



</div>
</div>
	</div>



</body>
</html>