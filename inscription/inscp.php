<?php

echo 'in';
if (isset($_POST['submit'])) {
    
    if (/*isset($_POST['name']) && isset($_POST['last name']) &&
        isset($_POST['number']) && isset($_POST['email']) &&
        isset($_POST['matricule']) && isset($_POST['year'])&&*/
        isset($_POST['faculty'])/*&&isset($_POST['specialty'])*/&&
        isset($_POST['motif'])&& isset($_POST['objectif'])) {
        
       /* $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $matricule = $_POST['matricule'];
        $year = $_POST['year'];*/
        $faculty = $_POST['faculty'];
        //$specialty = $_POST['specialty'];
        $motif = $_POST['motif'];
        $objectif = $_POST['objectif'];
        $host = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'projectWeb';
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO adherant(faculty,motif,objectif) values('$faculty', '$motif','$objectif')";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
        /*
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database. '. $conn->connect_error);
        }
        else {
            
            $Insert = "INSERT INTO adherant(name,last_name,number,email,matricule,year,faculty,specialty,motif,objectif) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

          
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssssss",$name, $lastname, $number, $email, $matricule, $year,$faculty,$specialty,$motif,$objectif);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }

            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
*/

?>