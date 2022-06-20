<?php 
if(isset($_POST['start'])){
  header('Location: home.php');

 }
 ?>
<!DOCTYPE html>
<html>
<title>sign up page</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
  

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

  <form class="red"method="POST" style="border:1px solid #ccc">
<br><div class='clearfix'>
      <button type="submit" name="start" value='start'class="signup">start</button>
      
    </div>
</form>


</body>
</html>
