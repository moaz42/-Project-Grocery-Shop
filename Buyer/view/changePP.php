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
    <form action="../controller/users.php" method="post">
        Password: <input type="password" name="password" id="password" ><br><br>
        <fieldset>
            <label for="img">Profile Picture</label>
            <input type="file" name="img" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                        
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button type="submit" id="sub" style=" background-color: #313131; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 24px;">Edit Profile picture</button>
        </form>
    </div>
</div>
</body>

</html>
