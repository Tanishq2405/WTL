<?php
include "config.php";

//If the 'RollNo' vAriable is set, We know we have to edit the Record.
if (isset($_GET['RollNo']))
{
    $user_id=$_GET['RollNo'];

    //Delete Query
    $sql="DELETE FROM `student` WHERE `RollNo`='$user_id'"; 
    //Execution
    $result = $conn->query($sql);

    if($result == TRUE)
    {
        echo "Record Deleted Successfully.";
    }
    else{
        echo "ERROR" .$sql."<br>".$conn->error;
    }
}
?>
