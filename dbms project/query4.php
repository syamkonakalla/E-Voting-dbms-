<?php 
include('dbc.php');
  if(isset($_POST['submit'])){
    //echo " hiiiiii";
    if(empty($_POST['user_id'])){
      echo "usser";
      
    }
    else{
      $user_id=$_POST['user_id'];
      echo $user_id;
      

    }
    if(empty($_POST['query'])){
      //echo "usser";
      
    }
    else{
      $query=$_POST['query'];
      echo $query;
      

    }
    
    if($query == "how")
    {
      //$answer = "follow the steps";
      $admin_id="100";
    }
    else if($query == "what")
    {
      //$answer = "follow the steps";
      $admin_id="101";
    }
    else{
     $admin_id="102"; 
    }

      $sql = "INSERT INTO query(user_id,query,admin_id) VALUES('$user_id','$query','$admin_id')";
        if(mysqli_query($conn, $sql)){

        echo "completed";
        //header('Location: add.php');
        header('Location: homeh4.php');
        

      }
      else{
        echo 'query eror :' . mysqli_error($conn);
    }


    

    }

 ?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
 <h1><center><?php echo 'querys page';?></center>
  <div class="container">
  <form class="red"method="POST">
        <div class="row">
      <div class="col-25">
        <label for="user id">user id</label>
      </div>
      <div class="col-75">
        <input type="text" id="user_id" name="user_id" placeholder="Your id">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="query">query</label>
      </div>
      <div class="col-75">
        <input type="text" name="query" placeholder="Write something.." style="height:200px">
      </div>
    </div>
    <div class="row">
      <input type="submit"  name="submit" value="submit">
    </div>
  </form>
</div>
 </body>
 </html>