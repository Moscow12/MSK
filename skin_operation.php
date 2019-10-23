<?php
    require_once ("connection.php");

    $preview = "SELECT patient_name,id FROM skin_operations ";
    $preview_result = mysqli_query($query, $preview);
    //output data of each row
    if(mysqli_num_rows($preview_result)>0 ){
        while($row =mysqli_fetch_assoc($preview_result)){
            $id=$row['id'];
            $patient_name=$row['patient_name'];
           echo  "<a href='skin_operation_names.php?id=$id&patient_name=$patient_name'>$patient_name</a><br>";
        }

        }else{
            echo "Result not found";
    }
?>