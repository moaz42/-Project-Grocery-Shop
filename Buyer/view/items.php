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
        <?php include '../model/profile.php'; showallitem();?>
    </div>
</div>
</body>

</html>
<h2>Make ORDER</h2>
<form action="" method="post">
Item ID: 
<input type="text" name="id" id=""> <br>
Quantity
<input type="text" name="" id=""> <br>
<button type="submit">Make Order</button>
</form>