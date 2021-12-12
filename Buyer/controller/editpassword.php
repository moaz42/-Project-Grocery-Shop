<?php 
session_start();
    $flag=0;
    $email= $password=$opass="";
    $emailerr= $passworderr=$opasserr="";

    if($_POST["email"]!=""){
        $email = test_input($_POST["email"]);
    }
    else{
        $flag=1;
        $emailerr="Valid email required";
    }
    if($_POST["npass"]!=""){
        $password = test_input($_POST["npass"]);
    }
    else{
        $flag=1;
        $passworderr="Valid new password required";
    }
    if($_POST["opass"]!=""){
        $opass = test_input($_POST["opass"]);
    }
    else{
        $flag=1;
        $opasserr="Wrong password Give your correct Old password";
    }
    if($flag==1)
    {
        
        echo $emailerr."<br>";
        echo$opasserr."<br>";
        echo$passworderr."<br>";
        //header("Refresh: 3; url=../inbox.php");
    }
    else{
        if($_SESSION["password"]==$opass&&$email==$_SESSION["email"]){
            include_once "../model/profile.php";
            updatepassword($email,$password);
        }
        else{
            echo$opasserr."<br>";
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