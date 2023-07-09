<?php
    $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "sou";

        $conn = mysqli_connect($servername, $username, $password,$databasename);
        if($conn -> connect_error)
        {
        
            die($conn -> connect_error);
        }
        else
        {
            echo "MySql Connection Successful!" . '<br/>';
        }

        $query = "INSERT INTO stu1(id, fname, lname, mnum,  sem, branch, addr) VALUES('1', 'Anjali', 'Patel', '9876543210', '2', 'CE', 'ahmedabad')";
        $query = "INSERT INTO stu1(fname, lname, mnum,  sem, branch, addr) VALUES('Rutu', 'patel', '997536454', '2', 'CE', 'ahmedabad')";
        $query = "INSERT INTO stu1(fname, lname, mnum,  sem, branch, addr) VALUES('Maheshwari', 'jadeja', '9975321289', '4', 'Physiotherapy', 'rajkot')";
    
        // $query = "INSERT INTO student2(studentid, firstname, lastname, mnumber, email_id, addr, branch,  sem, createddate, uploaddate) VALUES('1', 'anju', 'patel', '9954231267', 'anju@gmail.com', 'junagadh', 'ce', '4');";

        //$query = "INSERT INTO student2(studentid, firstname, lastname, mnumber, email_id, addr, branch,  sem, createddate, uploaddate) VALUES('2', 'happy', 'pael', '9975124645', 'hp1354@gmail.com', 'rajkot', 'Pharmacy', '3');";

        $query = "UPDATE stu1 SET fname='Vatsayu' where id='1';";
        $query = "UPDATE stu1 SET sem='5' where id='3';";

        //$query = "DELETE FROM student2 "

        $result = $conn->multi_query($query);

        if($conn -> error)
        {
            echo $conn->error;
        }
        else
        {
            echo "Record Inserted successfully";
        }

    $query = "SELECT * FROM stu1";
        $result = $conn->query($query);

        if($conn -> error)
        {
            echo $conn->error;
        }
        else
        {
            echo '<br/>';
            while($row = $result->fetch_assoc())
            {
                echo '<pre/>';
                print_r($row);
                echo "HI" . $row["fname"] . "" . $row["lname"] . ',';
                echo implode('|',$row) . '<br/>';
            }
        }


?>
