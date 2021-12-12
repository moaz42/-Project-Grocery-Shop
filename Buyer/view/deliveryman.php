<html>
<head>
</head>
    <title>view Profile</title>
     <?php include 'navbar.php'?>
     <link rel="stylesheet" href="../controller/style.css">
<body>
<div class="content">
    <div class="dashboard">
        <?php 
            include_once './dashboard.php';
        ?>
    </div>
    <div class="main">
        <?php include '../model/profile.php'; showalldeliveryman();?>
    </div>
</div>
</body>

</html>