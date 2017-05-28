<?php

require_once ("connect.php");
$sql = "Select * from toy";
$result = mysqli_query($conn,$sql);

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
            <a href="add.php"><button type="button" class="btn btn-primary">Add Record</button></a>
            <a href="edit.php"><button type="button" class="btn btn-success">Edit Record</button></a>
            <a href="delete.php"><button type="button" class="btn btn-warning">Delete Record</button></a>
            <button type="button" class="btn btn-danger">Create Table</button>
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
                if( mysqli_num_rows( $result )==0 ){
                    echo '<tr><td colspan="6">No Rows Returned</td></tr>';
                }else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['code']}</td><td>{$row['category']}</td><td>{$row['price']}</td><td>{$row['stock_count']}</td></tr>\n";
                    }
                }
                ?>



            </table>

        </div>

    </div>

</div>






</body>
</html>
