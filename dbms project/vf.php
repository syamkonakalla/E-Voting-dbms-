<?php 
include('dbc.php');
echo "voting is finish .......";
if(isset($_POST['result'])){
  header('Location: result.php');

 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>E-VOTING home page one</title>
  
</head>
<body>
  
  <form class="red"method="POST" style="border:1px solid #ccc">

<div class='center'>
      <input type="submit" name="result" value='result'>
      
    </div>
    
  </form>
</center></h1>

</body>
</html>