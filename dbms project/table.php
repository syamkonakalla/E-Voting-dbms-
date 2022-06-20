<?php 
include('dbc.php');
$sql = ("SELECT user_id,admin_id,f_name, FROM admin CROSS JOIN user USING(user_id)");
     $result = mysqli_query($conn , $sql);
     if (mysqli_num_rows ($result > 0)) {
      echo "<table border='1'> 
      '<br>''<br>'
    <tr>  
    <th>user_id</th>  
    <th>admin_id</th>
    <th>f_name</th>  
    </tr>";
     while($row = mysqli_fetch_assoc($result)) {
       // echo "candidate id      : " . $row["candidate_id"]."       candidate name      ".$row["candidate_name"]. "      symbol        ".$row["symbol"]."<br><br>";
        echo "<tr>";  
        echo "<td>" . $row['user_id'] . "</td>"; 
        echo "<td>" . $row['admin_id'] . "</td>"; 
        echo "<td>" . $row['f_name'] . "</td>";  
        echo "</tr>";  
    }
  }
?>
