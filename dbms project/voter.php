<?php 
include('dbc.php');
  $errors = array('voter_id'=>'','aadhar'=>'','age'=>'','user_id'=>'','category'=>'','password'=>'');
  if(isset($_POST['submit'])){
    if(empty($_POST['voter_id'])){
      $errors['voter_id']= "recuried".'<br/>';
    }
    else{
      $voter_id=$_POST['voter_id'];
    
    }
    if(empty($_POST['aadhar'])){
      $errors['aadhar']= "recuried".'<br/>';
    }
      else{
      $aadhar = ($_POST['aadhar']);
    }
    if(empty($_POST['age'])){
      $errors['age']= "recuried".'<br/>';
    }
      else{
        
      $age = ($_POST['age']);
      if($age < "18"){
        $errors['age']= "age is not enough to vote".'<br/>';
        echo $errors['age'];

      }
    }
    if(empty($_POST['user_id'])){
      $errors['user_id']= "recuried".'<br/>';
    }
      else{
      $user_id = ($_POST['user_id']);
    }
    if(array_filter($errors)){
      echo 'errors in the form';
    }
    else{
      $voter_id = mysqli_real_escape_string($conn, $_POST['voter_id']);
      $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
      $age = mysqli_real_escape_string($conn, $_POST['age']);
      $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
      $sql = "INSERT INTO voter(voter_id,aadhar,age,user_id) VALUES('$voter_id','$aadhar','$age','$user_id')";
      if(mysqli_query($conn, $sql)){

        echo "completed";
        header('Location: votebox.php');
      }
      else{
        echo 'query eror :' . mysqli_error($conn);
    }
      }}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>voter regetraction</title>
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
<h1><center><?php echo 'Fill your detials';?></center></h1>
  <form class="red"method="POST">
    <label>Your Voter ID:</label>
    <input type="text" name="voter_id"><br><br>
    <div><?php  echo $errors['voter_id'].'<br/>'; ?></div>
    <label>Aadhar:</label>
    <input type="text" name="aadhar"><br><br>
    <label>Age:</label>
    <input type="text" name="age"><br><br>
    <label>user-id:</label>
    <input type="text" name="user_id"><br><br>
    <center><div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">submit</button>
      
    </div>
    
  </form>
</center></h1>

</body>
</html>