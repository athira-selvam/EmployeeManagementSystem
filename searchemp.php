<!DOCTYPE html>
<html>
<head>
	<title>donors</title>
</head>
<body>
<center>
<section>
<style type="text/css">
    table,th,td {
    	border: 1px solid black;
    border-collapse: collapse;
    padding: 15px;
        margin: 8px;
    }
    </style>
<div style="display:inline-block;">
<form action ="log.php" method="post">
<h1>Donor list</h1>
<p>Blood Group</p>
<input type="text" name="bloodgroup"><br>
<p>Location</p>
<input type="text" name="location"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</div>
<div style="display:inline-block;">

</section>
</center>
</body>
</html>
 <?php
$servername = "localhost";
$username = "root";
$password = "19may1996";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT dname,bloodgroup ,age,location,mobilenumber FROM donor WHERE bloodgroup='$_POST[bloodgroup]' AND location='$_POST[location]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>bloodgroup</th><th>age</th><th>location</th><th>mobilenumber</tb></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["dname"]."</td><td>".$row["bloodgroup"]."</td><td> ".$row["age"]."</td><td>".$row["location"]."</td><td> ".$row["mobilenumber"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?> 
