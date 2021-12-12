<?php
$connect = mysqli_connect("localhost", "root", "", "grocery");
$output = '';
if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["search"]);
	$query = "
	SELECT * FROM items
	name LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM items ORDER BY name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	echo "<table><tr>";
				echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</th>";
                echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse; width: 100%;'>first Name:</th>";
                echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>last Name:</th>";
                echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Email:</th>";
                echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Phone Number:</th>";
                echo "<th style='padding:10px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Gender:</th></tr>";
            while($row = $result->fetch_assoc()) {
            	echo "<tr><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["ID"]."</td>";
                echo "<td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["fname"]."</td>";
                echo "<td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["lname"]."</td>";
                echo "<td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["email"]."</td>";
                echo "<td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["phone"]."</td>";
                echo "<td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:10px;'>".$row["gender"]."</td></tr>";
            
			}
	echo "</table>";
}
else
{
	echo 'Data Not Found';
}
?>