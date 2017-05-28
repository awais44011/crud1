<?php
require_once("connect.php");
$check = 2;
if(!empty($_GET["id"])) {
    echo $_GET["id"];

    $sql = "DELETE FROM toy WHERE id=" . $_GET["id"];
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        $check = 1;
        //echo "Record deleted successfully";
    } else {
        $check = 0;
       // echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>

<html>
<head>
    <title>Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>


<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Enter <strong>ID</strong> of record which you want to delete? </h2>
            <form action="delete.php" method="get">
                <input type="text"  name='id' id="id">
                <input type="submit" name="submit" >
            </form>

            <?php if($check == 1){ echo '<h2>Deleted Successfully!!</h2>';} if($check==0){echo '<h2>Sorry Unable to Delete</h2>';} ?>

            <h2><a href="index.php"><button type="button" class="btn btn-warning">Go Back</button></a></h2>

        </div>
    </div>
</div>

</body>
</html>