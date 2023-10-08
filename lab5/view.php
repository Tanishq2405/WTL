<?php
include "config.php";

//Query from getting data from table
$sql = "SELECT * FROM student";

//Execute Query
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> View Page </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="container">
        <br><input type="button" onclick="window.location='create.php'" class="Redirect" value="Create"/>
        <h2>Students Details</h2>
        <table class="table">
<thead>
    <tr>
        <th> Name </th>
        <th> Roll No. </th>
        <th> Contact No. </th>
        <th> Country </th>
    </tr>
</thead>
<tbody>
    <?php
    if ($result->num_rows>0)
    {
        //Output Data of each row
       while ($row =$result->fetch_assoc())
       {
        ?>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['RollNo'];?></td>
            <td><?php echo $row['Contact'];?></td>
            <td><?php echo $row['Country'];?></td>
            <td><a class="btn btn-info" href="update.php?RollNo=<?php echo $row['RollNo']; ?>">EDIT</a>
            <a class="btn btn-danger" href="delete.php?RollNo=<?php echo $row['RollNo']; ?>">DELETE</a>
            </td>
            
        </tr>
        <?php }
        } ?> 
</tbody>
</table>
    </div>
    </body>
    </html>
