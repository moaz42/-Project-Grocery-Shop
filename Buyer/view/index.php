<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../controller/style.css">
    <title>Home</title>
</head>
<body>
    <?php include 'navbar.php'?>
<div class="content">
    <div class="dashboard">
        <?php 
            include_once 'dashboard.php';
        ?>
    </div>
    <div class="main" style="padding:25px;">
    <div class="div1">    <br> <br>
    <a href="seller.php">show all sellers</a> <br> <br>
    <a href="deliveryman.php">show all deliveryman</a> <br> <br>
    <a href="items.php">Show Inventory</a></div><br><br>
    <div class="div2">
        <h2>Items</h2>
        <?php include '../model/profile.php'; showallitem();?></div>

    
</div>
</div>
</body>
</html>