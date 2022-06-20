<?php 
include('dbc.php');
?><center> <?php
$sql = "SELECT * FROM candidate";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
      echo "<table border='1'> 
      
    <tr>  
    <th>candidate_id</th>  
    <th>candidate_name</th>
    <th>symbol</th>  
    </tr>";
     while($row = mysqli_fetch_assoc($result)) {
       // echo "candidate id      : " . $row["candidate_id"]."       candidate name      ".$row["candidate_name"]. "      symbol        ".$row["symbol"]."<br><br>";
        echo "<tr>";  
        echo "<td>" . $row['candidate_id'] . "</td>"; 
        echo "<td>" . $row['candidate_name'] . "</td>"; 
        echo "<td>" . $row['symbol'] . "</td>";  
        echo "</tr>";  
    }
  }



  if(isset($_POST['start_voting'])){
 	//header('Location: addh3.php');
  header('Location: homeh3.php');

 }
 if(isset($_POST['stop_voting'])){
 	//header('Location: showing.php');
  header('Location: showing.php');

 }
 if(isset($_POST['start_candidatet'])){
 	//header('Location: addh2.php');
  header('Location: homeh2.php');

 }
  if(isset($_POST['stop_candidate'])){
 	//header('Location: add.php');
  header('Location: home.php');

 }

if(isset($_POST['reset'])){
  
  //header('Location: add.php');
  header('Location: home.php');

 }

 ?> 	



</center>
<!DOCTYPE html>
<html>
<head>
<title>E-VOTING CANDIDATE</title>
<style>
h1.center {
  text-align: center;
  color: black;
border: 2px solid green;
  border-radius: 12px;

}
body
{

background-image:url("down.jpg");
background-size: 1600px 800px;
background-repeat: no-repeat;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: green;
}

li {
  float: left;
 border-right: 1px solid #bbb;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}
li:last-child {
  border-right: none;
  color:red;
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
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:red;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>

<body>
<h1 class="center">E-VOTING<br>vote from your home</h1>

<ul>
  <li><a href="#home">Home</a></li>
<li><a href="homeh2.php">Start candidate registration</a></li>
<li><a href="home.php">Stop candidate registration</a></li>
<li><a href="homeh3.php">Start Election</a></li>
<li><a href="showing.php">Stop Election</a></li>
<li style="float:right"><a href="reset.php">Reset</a></li>
<li style="float:right"><a href="voter.php">Make a Vote</a></li>

</ul>
</body>
</html>