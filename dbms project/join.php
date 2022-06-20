<?php 
include('dbc.php');
if(isset($_POST['back'])){
  header('Location: showing.php');

 }
$total = array();
$sql = ("SELECT aadhar ,selected_symbol,user_id FROM voter CROSS JOIN vote USING(user_id) ");
//$sql = ("SELECT aadhar ,selected_symbol,user_id FROM voter INNER JOIN vote ON voter.user_id = vote.user_id");
//candidate_id,candidate_name,selected_symbol
     $result = mysqli_query($conn, $sql);
     

    if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>  
    <tr>  
    <th>user_id</th>  
    <th>aadhar</th>
    <th>selected_symbol</th>  
    </tr>";  
     while($row = mysqli_fetch_assoc($result))
     {
     
     	echo "<tr>";
 
        echo "<td>" . $row['user_id'] . "</td>"; 
        echo "<td>" . $row['aadhar'] . "</td>"; 
        echo "<td>" . $row['selected_symbol'] . "</td>";  
        echo "</tr>";  

    }
}
  
echo "</table>";  
 ?>

<!DOCTYPE html>
<html><style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
 
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
     <div class='clearfix'>
      <button type="submit" name="back" value='back'class="signup">back</button>
      
    </div>
  </form>
</body>
</html>