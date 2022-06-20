<?php 
include('dbc.php');
if(isset($_POST['query'])){
header('Location: query.php');
  }
$sql = "SELECT * FROM candidate";
     $result = mysqli_query($conn, $sql);
?>      <right><?php  
     if (mysqli_num_rows($result) > 0) {
      echo "<table border='6'>  
    <tr>  
    <th>candidate_id</th>  
    <th>candidate_name</th>
    <th>symbol</th>  
    </tr>";
     while($row = mysqli_fetch_assoc($result)) {
       // echo "candidate id      : " . $row["candidate_id"]."       candidate name      ".$row["candidate_name"]. "      symbol        ".$row["symbol"]."<br><br>";
       
        echo "<tr>";  
        echo "<td>" . $row['candidate_id'] . "</td>"; 
        echo "<td>" . $row['candidate_name'] . "</td>"; 
        echo "<td>" . $row['symbol'] . "</td>";  
        echo "</tr>";  
    }
  }

$errors = array('choice_id'=>'','voter_id'=>'');
  if(isset($_POST['submit'])){
    if(empty($_POST['choice_id'])){
      $errors['choice_id']= "recuried".'<br/>';
    }
    else{
      $choice_id=$_POST['choice_id'];
    
    }
    if(empty($_POST['voter_id'])){
      $errors['voter_id']= "recuried".'<br/>';
    }
    else{
      $voter_id=$_POST['voter_id'];
    
    }

      $sql = "SELECT * FROM candidate WHERE candidate_id = $choice_id ";
      $result = mysqli_query($conn, $sql);


     if (mysqli_num_rows($result) > 0) {
     	$row = mysqli_fetch_assoc($result);
     	echo "completed";

     	$candidate_name =$row["candidate_name"];
     	$candidate_symbol =$row["symbol"];
     	echo $candidate_name;
     	$out ="SELECT * FROM voter WHERE voter_id = $voter_id ";
     	$result1 = mysqli_query($conn, $out);
     	if (mysqli_num_rows($result1) > 0) {

     	$uout = mysqli_fetch_assoc($result1);
     	echo " user _id out completed";
     	$user_id = $uout["user_id"];
     	echo $user_id;

     	$in = "INSERT INTO vote(selected_symbol,candidate_name,user_id,candidate_id,voter_id) VALUES('$candidate_symbol','$candidate_name','$user_id','$choice_id','$voter_id')";

      if(mysqli_query($conn, $in)){

        echo "completed";
        header('Location: homeh3.php');
        }
      else {
      echo "0 results";
           }

}}}
 ?>
</right>
<!DOCTYPE html>
<html>
<head>
  <title>E-VOTING</title>
  <h1><center> Welcome to voting page   </center></h1>
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
  <h1><center><?php echo 'Enter your vote';?>
  <form class="red"method="POST">
    
    <label>Your voter ID:</label>
    <input type="text" name="voter_id">
    <div><?php  echo $errors['voter_id'].'<br/>'; ?></div>
    <label>Your choice ID:</label>
    <input type="text" name="choice_id">
    <div><?php  echo $errors['choice_id'].'<br/>'; ?></div>
    <div class='clearfix'>
      <button type="submit" name="submit" value='submit'class="signup">submit</button>
      
    </div>
     
    
  </form>
</center></h1>
</body>
</html>

