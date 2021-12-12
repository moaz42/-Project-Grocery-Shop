<html>
<head>
    <link rel="stylesheet" href="../controller/style.css">
 <?php include 'navbar.php'?>
</head>
    <title>Change Name</title>
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
            Last Name: <input type="text" name="fname" id="name">
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button type="submit" id="sub" style=" background-color: #313131; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 24px;">Edit last Name</button>
        </form>
    </div>
    <div class="main" style="margin-left: 20%;text-align: center;"><br>
    <form action="../controller/users.php" method="post">
        Password: <input type="password" name="password" id="password" ><br><br>
        <fieldset>
            First Name: <input type="text" name="lname" id="name">
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button type="submit" id="sub" style=" background-color: #313131; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 24px;">Edit first Name</button>
        </form>
    </div>
</div>
</body>

</html>
