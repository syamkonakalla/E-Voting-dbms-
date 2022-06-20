<?php 
include('dbc.php');
echo "Finished.......";
  if(isset($_POST['back'])){
    echo " gggggggg";

    header('Location: candvote.php');
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
  <form class="red"method="POST">
    <div class='clearfix'>
      <button type="submit" name="back" value='back'class="signup">back</button>
      
    </div>

    </div>
  </form>
</body>
</html>