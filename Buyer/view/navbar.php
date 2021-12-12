<?php 
session_start();
        if(isset($_SESSION["lname"])) 
        {
                $name=$_SESSION["lname"];
                $userType=$_SESSION["type"];
                $log="Log out";
        }
        else{
                header("Refresh: 0; url=../index.php");
        }
?>
<style>
        
.nav {
    background-color: gray;
    /*margin-bottom: -20px;*/
    font-family: 'Bebas Neue', cursive;
    font-family: 'Comforter Brush', cursive;
    font-family: 'Source Sans Pro', sans-serif;
    color: #e4e2e2;
    display: flex;
    min-width: 99%;
}

.nav>div {
    padding: 5px;
    color: rgb(16, 250, 250);
}

.nav .left {
    min-width: 47%;
}

.nav .right {
    justify-content: right;
    min-width: 47%;
    display: flex;
}

.nav .right>div {
    text-align: right;
    margin: 1%;
    padding: .5%;
}

</style>
<div class="nav">
        <div class="left">
            <div class="icon"></div>
            <div class="name"><h2>GroCery</h2></div>
        </div>
        <div class="right">          
                <div class="userType"><h3>| <?php echo $name; ?> |</h3></div>
                <div class="userName"><h3>| <?php echo $userType; ?> |</h3></div>
                <div class="status"><h3>| Log Out |</h3></div>
        </div>
</div>