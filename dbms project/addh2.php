<?php 
include('dbc.php');
if(isset($_POST['back'])){
  header('Location: homeh2.php');

 }
 if(isset($_POST['change'])){
  header('Location: change2.php');

 }
  $errors = array('USSER_id'=>'','Password'=>'');
  if(isset($_POST['submit'])){
    if(empty($_POST['USSER_id'])){
      echo "usser";
      $errors['USSER_id']= "recuried".'<br/>';
    }
    else{
      $USSER_id=$_POST['USSER_id'];
    
    }
    if(empty($_POST['Password'])){
      $errors['Password']= "recuried".'<br/>';
    }
      else{
      $Password = ($_POST['Password']);
    }
    if(array_filter($errors)){
      echo 'errors in the form';
      echo $errors['USSER_id'];
      echo $errors['Password'];
    }
    else{
      $USSER_id = mysqli_real_escape_string($conn, $_POST['USSER_id']);
      $Password = mysqli_real_escape_string($conn, $_POST['Password']);

      $sql = "SELECT * FROM user WHERE user_id = '$USSER_id'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "completed";

        echo "your are not registered";
        echo "please register";
        
       }
        //foreach ($users as $user) {
        if($row['category'] == 'candidate' && $Password == $row['password']){
          header('Location: cand.php');
         // echo "not open";

        }
        if($row['category'] == 'admin' && $Password == $row['password']){
          header('Location: al.php');

        }
        if($row['category'] == 'voter' && $Password == $row['password']){
          //header('Location: voter.php');
          echo "not open";
          ?>

         <script>{
          alert("voting Not opened!");
          }
         </script>
         <?php

        }
      //}

       // header('Location: index.php');
    }
  }


 ?>

<!DOCTYPE html>
<html><style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
  
body
{

background-image:url("a5.jpeg");
background-size: 1600px 800px;
background-repeat: no-repeat;
}
input[type=text], input[type=password], input[type=number]{
  width: 10%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
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
    <div class="container">
    <div>
     <h1><center><u> Welcome to online voting </u>  </center></h1>
     <h1>Sign In</h1>
    <hr> 
     <?php echo 'Enter the detials';?><br> <br>          
    <label>Your USSER ID:</label>
    <input type="text" name="USSER_id">
    <div><?php  echo $errors['USSER_id'].'<br/>'; ?></div>
    <label>Your Password:</label>
    <input type="text" name="Password">
    <div><?php  echo $errors['Password'] .'<br/>'; ?></div>
        <p> agree to our <a href="#" style="color:dodgerblue">Terms & Privacy for creation of account</a>.</p>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> TERMS AND CONDITIONS
    </label><br>

    <br><br><br>
    <div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">Submit</button>
      
    </div>
    <br><br>
    <div class='clearfix'>
      <button type="submit" name="back" value='back'class="signup">back</button>
      
    </div>
    <br><br>
    <div class='clearfix'>
      <button type="submit" name="change" value='change'class="signup">change</button>
      
    </div>
  </form>


</body>
</html>