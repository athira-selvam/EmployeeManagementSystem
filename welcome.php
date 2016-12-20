
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

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="addemp.php">ADD EMPLOYEE</a></li>
  <li><a href="deleteemp.php">DELETE EMPLOYEE</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Search By</a>
    <div class="dropdown-content">
      <a href="#">Employee</a>
      <a href="#">Department</a>
      <a href="#">Position</a>
    </div>
  </li>
  <li><a href="#about">ABOUT</a></li>
</ul>

</body>
      <h1>Welcome!!</h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>

