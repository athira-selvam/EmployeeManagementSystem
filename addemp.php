<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="addemp.php">ADD EMPLOYEE</a></li>
  <li><a href="deleteemp.php">DELETE EMPLOYEE</a></li>
  <li><a href="searchemp.php">DISPLAY EMPLOYEE</a></li>
  <li><a href="#about">ABOUT</a></li>
</ul>

</body>
      <h1>ADD Employee</h1> 
   
   <head>
      <title>ADD Employee</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>EmpId  :</label><input type = "text" name = "empid" class = "box"/><br /><br />
                  <label>First Name  :</label><input type = "text" name = "fname" class = "box" /><br/><br />
                  <label>Last Name  :</label><input type = "text" name = "lname" class = "box" /><br/><br /> 
                  <label>Hiredate :</label><input type = "text" name = "hiredate" class = "box"/><br /><br />
                  <label>Salary  :</label><input type = "text" name = "salary" class = "box"/><br /><br />

                  <input type="submit" value="submit" id="submit" />
              
                  <p><a href="login.html">HOME</a></p>
                  
                 
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>
    <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "empdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$empid=$_POST['empid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$hiredate=$_POST['hiredate'];
$salary=$_POST['salary'];

$sql="INSERT INTO employee(empid,fname,lname,hiredate,salary) VALUES (' $empid ', ' $fname ' , ' $lname ','$hiredate','$salary')";
var_dump($sql);
/*$re_password=$_POST['repassword'];*/
if (mysqli_query($conn, $sql)) {
      echo "Workng!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</html>

