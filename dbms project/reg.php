<?php 
include('dbc.php');
if(isset($_POST['back'])){
  header('Location: home.php');

 }
  $errors = array('user_id'=>'','firstname'=>'','lastname'=>'','e_mail'=>'','category'=>'','password'=>'','aadhar'=>'');
  if(isset($_POST['submit'])){
    if(empty($_POST['user_id'])){
      $errors['user_id']= "recuried".'<br/>';
    }
    else{
      $user_id=$_POST['user_id'];
    
    }
    if(empty($_POST['firstname'])){
      $errors['firstname']= "recuried".'<br/>';
    }
      else{
      $firstname = ($_POST['firstname']);
    }
    if(empty($_POST['lastname'])){
      $errors['lastname']= "recuried".'<br/>';
    }
      else{
      $lastname = ($_POST['lastname']);
    }
    if(empty($_POST['e_mail'])){
      $errors['e_mail']= "recuried".'<br/>';
    }
      else{
      $e_mail = ($_POST['e_mail']);
    }
    if(empty($_POST['category'])){
      $errors['category']= "recuried".'<br/>';
    }
      else{
        if($_POST['category'] == "voter" or $_POST['category'] == "candidate" or $_POST['category'] == "admin"){
      $category = ($_POST['category']);
        }
        else{
      $errors['category']= "wrong name".'<br/>';

    }}
    if(empty($_POST['password'])){
      $errors['password']= "recuried".'<br/>';
    }
      else{
      $password = ($_POST['password']);
    }
    if(empty($_POST['aadhar'])){
      $errors['aadhar']= "recuried".'<br/>';
    }
      else{
        if($_POST['aadhar'] > 99999999999){
      $aadhar = ($_POST['aadhar']);
        }
        else{
      
      $errors['phone1']= "aadhar no is min 12 digits".'<br/>';
    }
      
    }
    if(empty($_POST['phone1'])){
      $errors['phone1']= "recuried".'<br/>';
    }
      else{
        if($_POST['phone1'] > 999999999){
      $phone1 = ($_POST['phone1']);
        }
        else{
      
      $errors['phone1']= "phone no is min 10 digits".'<br/>';
    }}
     $phone2 = ($_POST['phone2']);
    if(array_filter($errors)){
      echo 'errors in the form';
       ?>

         <script>{
          alert("errors in the form !!!");
          }
         </script>
         <?php
    }
    else{
      $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
      $e_mail = mysqli_real_escape_string($conn, $_POST['e_mail']);
      $category = mysqli_real_escape_string($conn, $_POST['category']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
      $sql = "INSERT INTO user(user_id,f_name,l_name,email,category,password,aadhar) VALUES('$user_id','$firstname','$lastname','$e_mail','$category','$password',$aadhar)";
      $mult="INSERT INTO mu(user_id,phone1,phone2) VALUES('$user_id','$phone1','$phone2')";

      if(mysqli_query($conn, $sql)){

        echo "completed";
        if(mysqli_query($conn, $mult)){

        echo "completed mu";
        header('Location: home.php');
        

      }
      else{
        echo 'query eror :' . mysqli_error($conn);
        echo "user id is alredy used";
    }
      

      }
      else{
        echo 'query eror :' . mysqli_error($conn);
    }
      }}
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
    <div class="container">
    <div style="background-image: url('a5.jpeg');
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>            
    <label>Your USSER ID:</label>
    <input type="text" name="user_id"required><br>
    <label>first name:</label>
    <input type="text" name="firstname"required><br>
    <label>last name:</label>
    <input type="text" name="lastname"required><br>
    <label>E-mail:</label>
    <input type="text" name="e_mail"required><br>
    <label>category:</label>
    <input type="text" name="category"required><br>
    <label>password:</label>
    <input type="text" name="password"required><br>
    <label>Aadhar:</label>
    <input type="text" name="aadhar"required><br>
    <label>phone1:</label>
    <input type="text" name="phone1"required><br>
    <label>phone2:</label>
    <input type="text" name="phone2"><br>
    <p> agree to our <a href="#" style="color:dodgerblue">Terms & Privacy for creation of account</a>.</p>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> TERMS AND CONDITIONS
    </label>
    <br><div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">Submit</button>
      
    </div>


    </div>
  </div>

    
  </form>


</body>
</html>