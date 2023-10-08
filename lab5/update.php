<?php
include "config.php";

//On clicking Updat Button, Process the form.
if(isset($_POST['update']))
{
    $n = $_POST['nm'];
    $r = $_POST['rno'];
    $c = $_POST['cno'];
    if(isset($_POST['Country']))
    {
        $coun=$_POST['Country'];
    }
    //Query for Updating records.
    $sql="UPDATE `student` SET RollNo = '$r' , Contact = '$c' , Country = '$coun' WHERE `Name` ='$n'";

    //Execution of Query
    $result=$conn->query($sql);

    if($result == TRUE)
    {
        echo "Record Updated Successfully.";
    }
    else{
        echo "ERROR" .$sql."<br>".$conn->error;
    }
}

////If the 'RollNo' variable is set, We know we have to edit the Record.
if (isset($_GET['RollNo']))
{
    $user_id=$_GET['RollNo'];

    //SQL Query to get user data.
    $sql="SELECT * FROM `student` WHERE `RollNo`='$user_id'"; 
    
    //Execute
    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $n = $row['Name'];
            $r = $row['RollNo'];
            $c = $row['Contact'];
            if(isset($row['Country']))
            {
                $coun=$row['Country'];
            }
        }
        ?>
        <link rel="stylesheet" href="https://www.w3schools.com/html/styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <body style="text-align: center; background-color: lightblue;">
        <h1 style="text-align: center;"><b>REGISTRATION FORM</b></h1>

        <form action="" method="post">
            <fieldset>
                <legend><h2><b> STUDENT INFORMATION </b></h2></legend>
                <h3 style="text-align: center;"><b> UPDATE FORM </b></h3><br>
                Name: <br>
                    <input type="text"size="30"  name="nm" placeholder="Enter Name"  />
                <br><br>
                Roll Number: <br>
                    <input type="text" name="rno" placeholder="Enter Roll Number" required />
                <br><br>
                Contact Number: <br>
                    <input type="number" name="cno" placeholder="Enter Phone Number"  />
                <br><br>
                    SELECT YOUR COUNTRY <br>
                    <select name = "Country">
                        <option value = "INDIA" selected>INDIA</option>
                        <option value = "USA">USA</option>
                        <option value = "UK">UK</option>
                        <option value = "FRANCE">FRANCE</option>
                        <option value = "NORWAY">NORWAY</option>
                        <option value = "MALDIVES">MALDIVES</option>
                        <option value = "AUSTRIA">AUSTRIA</option>
                        <option value = "AUSTRALIA">AUSTRALIA</option>
                        <option value = "BRAZIL">BRAZIL</option>
                        <option value = "PHILIPPINES">PHILIPPINES</option>
                        <option value = "GERMANY">GERMANY</option>
                        <option value = "SPAIN">SPAIN</option>
                    </select><br><br><br>
                    <input type="submit" value="Update" name="update" />
                    <input type="button" onclick="window.location='view.php'" class="Redirect" value="Display"/>
            </fieldset>
        </form>
    </body>
    </html>
    <?php
    }
    else{
        //Redirecting to the View Page
        header('Location: view.php');
    }
}
?>