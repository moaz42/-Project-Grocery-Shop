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
        <form action="../controller/makeorder.php" method="post">
            Item id: 
            <input type="text" name="id" id="id">
            Item quantity: 
            <input type="text" name="quantity" id="quantity">
            <button type="submit">Make Order</button>
        </form>
    </div>
</div>
</body>

</html>