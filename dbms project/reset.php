<?php 
include('dbc.php');
  if(isset($_POST['submit'])){
  

 

  $vote = "DELETE FROM vote";      
  $result2 = mysqli_query($conn, $vote);

  $res = "DELETE FROM result";      
  $result3 = mysqli_query($conn, $res);

  $query = "DELETE FROM query";      
  $result4 = mysqli_query($conn, $query);

  $sql = "DELETE FROM candidate";      
  $result = mysqli_query($conn, $sql);
  
  $voter = "DELETE FROM voter";      
  $result1 = mysqli_query($conn, $voter);

  header('Location: home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>admin login page</title>
  
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
  
body
{

background-image:url("v1.jpg");
background-size: 1600px 800px;
background-repeat: no-repeat;
}
input[type=text], input[type=password] {
  width: 10%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}



 .signupbtn {
  float: left;
  width: 5%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
     
<body>
  <h1><center> Are you sure you want to reset</center></h1>
  

  <form class="red"method="POST" style="border:3px solid #ccc">

    <div class="container">
    <div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">Reset</button>
      
    </div>

    </div>
  </form>
</body>
</html>