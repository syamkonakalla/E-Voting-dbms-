<?php 
include('dbc.php');
  $errors = array('candidate_id'=>'','candidatename'=>'','aadhar'=>'','age'=>'','symbol'=>'','user_id'=>'');
  if(isset($_POST['submit'])){
  	if(empty($_POST['candidate_id'])){
      $errors['candidate_id']= "recuried".'<br/>';
    }
    else{
      $candidate_id=$_POST['candidate_id'];
    
    }
    if(empty($_POST['candidatename'])){
      $errors['candidatename']= "recuried".'<br/>';
    }
      else{
      $candidatename = ($_POST['candidatename']);
    }
    if(empty($_POST['aadhar']) ){
      $errors['aadhar']= "recuried".'<br/>';
    }
      else{
      $aadhar = ($_POST['aadhar']);
    }
    if((empty($_POST['age'])))
    {
      $errors['age']= "recuried".'<br/>';
    }
      else{
        
      $age = ($_POST['age']);
      if($age < "21"){
        $errors['age']= "age is not".'<br/>';
        echo $errors['age'];

      }
    }
    if(empty($_POST['symbol'])){
      $errors['symbol']= "recuried".'<br/>';
    }
      else{
      $symbol = ($_POST['symbol']);
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
      echo "no erros";
      $candidate_id = mysqli_real_escape_string($conn, $_POST['candidate_id']);
      $candidatename = mysqli_real_escape_string($conn, $_POST['candidatename']);
      $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
      $symbol = mysqli_real_escape_string($conn, $_POST['symbol']);
      $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
      $age = mysqli_real_escape_string($conn, $_POST['age']);
      $sql = "INSERT INTO candidate(symbol,candidate_name,candidate_id,aadhar,age,user_id) VALUES('$symbol','$candidatename','$candidate_id','$aadhar','$age','$user_id')";
    }
    if(mysqli_query($conn, $sql)){

        echo "completed";
        header('Location: homeh2.php');
     
      }
      else{
        echo 'query eror :' . mysqli_error($conn);
    }
  }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>candidate regester</title>
 	
 </head>

 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

body
{

background-image:url("v2.jpg");
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

    <h1><center><u><?php echo 'Enter the detials';?></u></center></h1>
	<form class="red"method="POST">
    <div class="container">
    <div>            
		<label>Your candidate ID:</label>
		<input type="text" name="candidate_id"required>
		<div><?php  echo $errors['candidate_id'].'<br/>'; ?></div>
		<label>candidate name:</label>
		<input type="text" name="candidatename"required><br><br>
		<label>Aadhar:</label>
		<input type="text" name="aadhar"required><br><br>
		<label>Age:</label>
		<input type="text" name="age"required><br><br>
		<label>symbol:</label>
		<input type="text" name="symbol"required><br><br>
		<label>user_id:</label>
		<input type="text" name="user_id"required><br><br>
    <p> agree to our <a href="#" style="color:dodgerblue">Terms & Privacy for creation of account</a>.</p>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> TERMS AND CONDITIONS
    </label><br>
    <center>
		<div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">Submit</button>
      
    </div>
		
	</form>
</center>
 </body>
 </html>