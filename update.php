<?php
require_once ("connect.php");


$m_id = $_GET['id'];
$m_name = $_GET['name'];
$m_code = $_GET['code'];
$m_category = $_GET['category'];
$m_cost = $_GET['price'];
$m_stock = $_GET['stock_count'];

$sql = "update toy set name='$m_name' , code='$m_code' , category='$m_category', price ='$m_cost' , stock_count='$m_stock'  where id='$m_id'";
//echo $sql;

if(mysqli_query($conn,$sql))
{
    echo '<h1> Successfully updated </h1>';
}
else
{
    echo 'error';
}

?>

<html>
<head>
    <title>update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<h2><a href="index.php"><button type="button" class="btn btn-warning">Go Back</button></a></h2>


</body>
</html>