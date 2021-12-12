<?php 
session_start();
    $flag=0;
    $password=$lname=$fname=$phone=$pp=$ID="";
    $passworderr="";
    $email=$_SESSION["email"];
    if($_POST["ID"]!=""){
            $ID=test_input($_POST["ID"]);
    }
    else{
        echo "No value insulted";
        echo $email,$password,$name,$phone,$area,$city,$state;
    }

    if($flag==1)
    {
        echo$passworderr."<br>";
        header("Refresh: 3; url=../view/editProfile.php");
    }

    else{
        if($_SESSION["password"]==$_POST["password"]){
            $password=$_POST["password"];
            include_once "../model/profile.php";
            if($_POST["ID"]!=""){delete($email,$password,$ID);}
            else{
                echo "no update";
                header("Refresh: 3; url=../view/editProfile.php");
            }
        }
        else{
            echo $password;
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