<?php 
session_start();
    $flag=0;
    $itemID=$name=$oderq="";
    $name=$_SESSION["lname"];
    if($_POST["ID"]!=""){
            $ID=test_input($_POST["ID"]);
    }
    else{
        echo "No value insulted";
        echo $email,$password,$name,$phone,$area,$city,$state;
    }
    if($_POST["oderq"]!=""){
            $oderq=test_input($_POST["oderq"]);
    }
    else{
        echo "No value insulted";
    }
    if($flag==1)
    {
        echo$passworderr."<br>";
        header("Refresh: 3; url=../view/editProfile.php");
    }

    else{
            if($_POST["ID"]!=""){
                    $host="localhost";
                    $dbUsername = "root";
                    $dbPassword="";
                    $dbname="grocery";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO order (itemID, buyerName, orderq)
                    VALUES ('$itemID', '$name', ' $oderq')";

                    if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
            }
            else{
                echo "no update";
                header("Refresh: 3; url=../view/editProfile.php");
            }
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    function fg($data1,$data2)
    {
        include_once "../model/profile.php";
            updatepassword($data1,$data2);
    }
?>