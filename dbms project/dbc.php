<?php 
  //connecting data base
  $conn = mysqli_connect('localhost','syam sai','19070','finalproject');
  //check the connection
  if(!$conn){
  	echo 'error in connection'.mysqli_connect_error();

  }
  ?>