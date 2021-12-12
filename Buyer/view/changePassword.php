<html>
<head>
    <link rel="stylesheet" href="../controller/style.css">
 <?php include 'navbar.php'?>
</head>
    <title>Change Password</title>
    <link rel="stylesheet" href="../controller/style.css">
<body>
<div class="content">
    <div class="dashboard">
        <?php 
            include_once './dashboard.php';
        ?>
    </div>
    <div class="main" style="margin-left: 20%;text-align: center;"><br>
    <form action="../controller/editpassword.php" method="post">
        Email: <input type="email" name="email" id="email" ><br><br>
        <fieldset>
        <span style="color: red;">Old password: <input type="password" name="opass" id="opass" > <br><br></span>
        <span style="color: green;">New password: <input type="password" name="npass" id="npass"  > <br><br></span>
        <span style="color: blue;">Confirm password: <input type="password" name="cpass" id="cpass" > <br><br></span>
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button type="submit" id="sub" style=" background-color: #313131; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 24px;">Edit Password</button>
        </form><script>
            function editPassword(){
                var x =  document.getElementById("email").value;
                var np=document.getElementById("npass").value;
                var op=document.getElementById("opass").value;
                var cp=document.getElementById("cpass").value;
                if (x == "" || x == null) {
                    document.getElementById('spane').innerHTML="Must be filled out Email";
                    return false;
                }
                else{
                    if (op == "" || op == null) {
                    document.getElementById('spane').innerHTML="Must be filled out Old Password";
                    return false;
                    }
                    else{
                        if (np == "" || np == null) {
                        document.getElementById('spane').innerHTML="Must be filled out New Password";
                        return false;
                        }
                        else{
                            if (cp == "" || cp == null) {
                            document.getElementById('spane').innerHTML="Must be filled out confirm Password";
                            return false;
                            }
                            else{
                                    document.getElementById('spanp').innerHTML="";
                                    return true;
                            }
                        }
                    }
                }
            }
                function btn(){
                    var y=document.getElementById("sub");
                    var x=editPassword();
                    if(x==false)
                    {
                        
                        y.style.display="none";
                    }
                    else {
                        y.style.display="none";
                    }
                }
            </script>	
    </div>
</div>
</body>



</html>
