<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
     <?php include 'navbar.php'?>
     <link rel="stylesheet" href="../controller/style.css">
</head>
<body>
    <div class="main">
         <?php  
                        if(isset($_SESSION["name"]))
                        {
                            $user=$_SESSION["name"];
                            echo $user." Do you want to logged out.";
                        }//"using session from registration.php
                        else{
                            echo " You have logged out. please login again";
                            header("Refresh:2; url=../../index.php");
                        }
                    ?>
                <div class="btn">
                    <button value="Log Out"> Log Out
                        <?php
                        session_destroy();
                        ?>
                    </button>
                </div>
    </div>
</body>
</html>