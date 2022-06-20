<?php 
include('dbc.php');
  if(isset($_POST['view_result'])){
  //header('Location: result.php');
  header('Location: join.php');

 }
if(isset($_POST['view_querys'])){
  //header('Location: result.php');
  header('Location: queryjoin.php');

 }
if(isset($_POST['go_to_home'])){
  //header('Location: result.php');
  header('Location: addh4.php');

 }


 ?> 	
<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
  
body
{

background-image:url("votebox.jpg");
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


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
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
<form class="red"method="POST">
		
		<br><br>
		<div class='clearfix'>
      <button type="submit" name="view_result" value='view_result'class="signup">view_result</button>

      
    </div>
		<br><br>
		<div class='clearfix'>
      <button type="submit" name="view_querys" value='view_querys'class="signup">view_querys</button>
		<br><br>
		<div class='clearfix'>
      <button type="submit" name="go_to_home" value='go_to_home'class="signup">go_to_home</button>
			
		</div>
  </form>
</body>
</html>