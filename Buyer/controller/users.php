<?php 
session_start();
    $flag=0;
    $password=$lname=$fname=$phone=$pp=$ID="";
    $passworderr="";
    $email=$_SESSION["email"];
    if($_POST["password"]!=""){
        $password = test_input($_POST["password"]);
    }
    else{
        $flag=1;
        $passworderr="Password required";
    }
    if($_POST["lname"]!=""){
        $lname = test_input($_POST["lname"]);
    }
    elseif($_POST["fname"]!=""){
        $fname = test_input($_POST["fname"]);
    }
    elseif($_POST["phone"]!=""){
        $phone = test_input($_POST["phone"]);
    }
    elseif($_POST["ID"]!=""){
        if($_POST["ID"]==$_SESSION["ID"]){
            $ID=test_input($_POST["ID"]);
        }
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
            include_once "../model/profile.php";
                if (empty($_POST["img"])) {
                $imgerr = "img is required";
                $flag=1;
                } else {
                    $img = test_input($_POST["img"]);
                    img($email,$password,$img);
                    //$flag=0;
                }
            if($_POST["fname"]!=""){editlname($email,$password,$fname);}
            elseif($_POST["lname"]!=""){editfname($email,$password,$lname);}
            elseif($_POST["phone"]!=""){editphone($email,$password,$phone);}
            elseif($_POST["ID"]!=""){delete($email,$password,$ID);}
            else{
                echo "no update";
                header("Refresh: 3; url=../view/editProfile.php");
            }
        }
        else{
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