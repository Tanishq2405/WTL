<?php
include "config.php";

//On clicking Submit Button, Process the form.
if(isset($_POST['submit']))
{
    //Get variables from the form.
    $n = $_POST['nm'];
    $r = $_POST['rno'];
    $c = $_POST['cno'];
    if(isset($_POST['Country']))
    {
        $coun=$_POST['Country'];
    }

    //Query for Inserting 
    $sql="insert into student(Name,RollNo,Contact,Country) values ('$n','$r','$c','$coun')";

    //Executing it.
    $result=$conn->query($sql);

    if ($result == TRUE)
    {
        echo "New Record Created Successfully.";
    }
    else{
        echo "Error" .$sql."<br>".$conn->error;
    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/html/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Demo Form</title>
</head>
<body style="text-align: center; background-color: lightblue;">
    <h1 style="text-align: center;"><b>REGISTRATION FORM</b></h1>

    <form action="" method="post">
        <fieldset>
            <legend><h2><b> STUDENT INFORMATION </b></h2></legend><br>
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
            <input type="submit" value="Submit" name="submit" />
            <input type="button" onclick="window.location='view.php'" class="Redirect" value="Display"/>
        </fieldset>
        <style>
        div { 
            box-sizing: border-box;
            width: 100%;
            border: 100px solid rgb(70, 177, 196);
            float: left;
            align-content: center;
            align-items: center;
        }
        
        form {   
            margin: 0 auto;
            width: 500px;
        }</style>
    </body>
</html>
