

<?php

$conn = mysqli_connect('localhost','root','','cms');

if(!$conn){

    die("connection problem".mysqli_connect_error());

}


$query = mysqli_query($conn,"SELECT * FROM other_task");
$query2 = mysqli_query($conn,"SELECT * FROM work");


    while(($rows = mysqli_fetch_array($query)) && ($rows2 = mysqli_fetch_array($query2))){

        $id = $rows['otask_name'];
        $name2= $rows2['task_name'];
        
        echo "<br>".$name2. "<br>".$id;
        
        
     }

   


?>