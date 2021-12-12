<html>
<head>

 <?php include 'navbar.php'?>
</head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../controller/style.css">
<body>
<div class="content">
    <div class="dashboard">
        <?php 
            include_once './dashboard.php';
        ?>
    </div>
    <div class="main" style="justify-content: center; padding:6%; font-size: 24px;">
        <a href="./changeName.php">Change Name</a> <br> <hr> <br>
        <a href="./changephone.php">Change phone number</a><br> <hr> <br>
        <a href="./changePassword.php">Change Password</a><br> <hr> <br>
    </div>
</div>
</body>

</html>
