<?php 
    function updatepassword($email,$password)
        {$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        try{
       $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users SET password='$password' WHERE email='$email'";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        if($stmt->rowCount()==1)
        {
            header("Refresh: 3; url=../../index.php");
        }
        else{
            echo "No record updated";
        }
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function showallbuyer()
{
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From users where type ='buyer'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Fist Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Last Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Email:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Phone Number:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Gender:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>User Type:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["gender"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["type"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function showall()
{
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Fist Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Last Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Email:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Phone Number:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Gender:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>User Type:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["gender"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["type"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function showallseller()
{$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From users where type ='seller'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Fist Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Last Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Email:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Phone Number:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Gender:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>User Type:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["gender"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["type"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function showalldeliveryman()
{$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From users where type ='deliveryman'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Fist Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Last Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Email:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Phone Number:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Gender:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>User Type:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["gender"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["type"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function showalladmin()
{
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From users where type ='admin'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Fist Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Last Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Email:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Phone Number:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>Gender:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>User Type:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["gender"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["type"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function showallitem()
{
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From items";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo"<tr>";
            echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'> Name:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'> Price:</th>
            <th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>Quantity:</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["name"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["price"]."</td>";
                echo "<td style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;padding:10px;'>".$row["quantity"]."</td>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}

function showuserbyID($ID){$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT ID,fname,lname,email,phone,gender,type,img From users WHERE ID = '$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table style='padding:20px;margin:20px;background-color: #04AA6D;color: white;border: 1px solid black;border-collapse: collapse;width: 100%;text-align: center;'>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><th>".$row["img"]."</th></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["ID"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>first Name:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["fname"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>last Name:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["lname"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Email:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["email"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Phone Number:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["phone"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Gender:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["gender"]."</td></tr>";
                echo "<tr><th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>User Type:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["type"]."</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();}
function editlname($email,$password,$name){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "UPDATE users SET lname='$name' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
            if($stmt->rowCount()!=1)
            {
                header("Refresh: 1; url=../view/viewProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 1; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 1; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function editfname($email,$password,$name){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "UPDATE users SET fname='$name' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
            if($stmt->rowCount()!=1)
            {
                header("Refresh: 1; url=../view/viewProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 1; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 1; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function editphone($email,$password,$phone){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "UPDATE users SET phone='$phone' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
            if($stmt->rowCount()!=1)
            {
                header("Refresh: 1; url=../view/viewProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 1; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 1; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function delete($email,$password,$id){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="grocery";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "DELETE FROM users WHERE ID='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " Record Deleted successfully";
            if($stmt->execute()== TRUE)
            {
                header("Refresh: 3; url=../view/editProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 2; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 2; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function img($email,$password,$img_name){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="hospital";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            move_uploaded_file($tmp_name,"img/".$new_img_name);
                            $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
                            $INSERT = "UPDATE users SET img='$new_img_name' WHERE email='$email'VALUES (?)";
                            $stmt = $conn->prepare($SELECT);
                            $stmt->bind_param('s',$email);
                            $stmt->execute();
                            $stmt->bind_result($email);
                            $stmt->store_result();
                            $rnum=$stmt->num_rows;
                            if($rnum==0)
                            {
                                $stmt->close();
                                $stmt = $conn->prepare($INSERT);
                                $stmt->bind_param("s",$new_img_name);
                                $stmt->execute();
                                    echo"<br> User Added successfully Done <br>";
                            }
                            else{
                                echo"Already an account registard by this mail. New mail id requiared";

                            }
                        }
                    }
        }
}

?>