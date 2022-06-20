<?php 
include('dbc.php');
  $errors = array('admin_id'=>'','code'=>'');
  if(isset($_POST['submit'])){
    if(empty($_POST['admin_id'])){
      echo "usser";
      $errors['admin_id']= "recuried".'<br/>';
    }
    else{
      $admin_id=$_POST['admin_id'];
    
    }
    if(empty($_POST['code'])){
      $errors['code']= "recuried".'<br/>';
    }
      else{
      $code = ($_POST['code']);
    }
    if(array_filter($errors)){
      echo 'errors in the form';
      echo $errors['admin_id'];
      echo $errors['code'];
    }
    else{
      $admin_id = mysqli_real_escape_string($conn, $_POST['admin_id']);
      $code = mysqli_real_escape_string($conn, $_POST['code']);
      $sql = "SELECT code FROM admin WHERE admin_id = '$admin_id' ";
      $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_assoc($result)) {
        
        if($code == $row['code'])
        {
          header('Location: ap.php');
          echo "admin page";
        }
        }
        }
      else {
      echo "0 results";
           }

    }
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

background-image:url("down.jpg");
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
  <h1><center> Welcome to admin login</center></h1>
  <?php echo 'Enter the detials';?>

  <form class="red"method="POST" style="border:3px solid #ccc">

    <div class="container">
    <h1>Admin</h1>
   
    <hr>

    
    <label>Your admin ID:</label>
    <input type="text" name="admin_id">
    <div><?php  echo $errors['admin_id'].'<br/>'; ?></div>
    <label>Your code:</label>
    <input type="text" name="code">
    <div><?php  echo $errors['code'] .'<br/>'; ?></div>
    <div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">Submit</button>
      
    </div>

    </div>
  </form>
</body>
</html>