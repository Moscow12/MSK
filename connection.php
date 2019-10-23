<?php 
  
    $query = mysqli_connect('localhost', 'root', '', 'ehms');

    if(!$query){
        die("Unable to connect to database" .mysqli_connect_error());
    }
    mysqli_select_db($query, 'ehms');
?>