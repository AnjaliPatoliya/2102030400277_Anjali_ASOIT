<?php
    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $enrol = $_POST['enrol'];
        $pass = $_POST['pass'];
    }

    
    $con=mysqli_connect("localhost", "root", "", "form");

    if(mysqli_connect_error())
    echo "Connection Error.";
    else
    echo "Database Connection Successfully.";
    

    // using sql to create a data entry query
    $sql = "INSERT INTO form ( uname, enrol, pass) VALUES ( '$uname', '$enrol', '$pass')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);
?>