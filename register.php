<?php 
    require_once ("connection.php");

    
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);
        $hb = mysqli_real_escape_string($query, $_POST["hb"]);
        $patient_weight = mysqli_real_escape_string($query, $_POST["patient_weight"]);
        $age = mysqli_real_escape_string($query, $_POST["age"]);
        $allergies = mysqli_real_escape_string($query, $_POST["allergies"]);
        $indication_op = mysqli_real_escape_string($query,  $_POST["indication_op"]);
        $op_to_be_done = mysqli_real_escape_string($query, $_POST["op_to_be_done"]);
        $conslt_approved = mysqli_real_escape_string($query, $_POST["conslt_approved"]);
        $imaging_needed = mysqli_real_escape_string($query, $_POST['imaging_needed']);
        $mediation = mysqli_real_escape_string($query, $_POST['mediation']);
        $dose_route = mysqli_real_escape_string($query, $_POST['dose_route']);
        $bf_induction_breif_completed = mysqli_real_escape_string($query, $_POST['bf_induction_breif_completed']);
        $conf_patient = mysqli_real_escape_string($query, $_POST['conf_patient']);
        $patient_discussed = mysqli_real_escape_string($query, $_POST['patient_discussed']);
        $op_confirmed = mysqli_real_escape_string($query, $_POST['op_confirmed']);
        $all_equip_available = mysqli_real_escape_string($query, $_POST['all_equip_available']);
        $antibiotics_needed = mysqli_real_escape_string($query, $_POST['antibiotics_needed']);
        $est_blood_loss = mysqli_real_escape_string($query, $_POST['est_blood_loss']);
        $blood_transfusion_predicted = mysqli_real_escape_string($query, $_POST['blood_transfusion_predicted']);
        $is_blood_available = mysqli_real_escape_string($query, $_POST['is_blood_available']);
        $essential_imaging_disp = mysqli_real_escape_string($query, $_POST['essential_imaging_disp']);
        $drugs_ready = mysqli_real_escape_string($query, $_POST['drugs_ready']);
        $aspiration = mysqli_real_escape_string($query, $_POST['aspiration']);
        $analgesia = mysqli_real_escape_string($query, $_POST['analgesia']);
        $swabs_counted = mysqli_real_escape_string($query, $_POST['swabs_counted']);
        $equip_problems_addressed = mysqli_real_escape_string($query, $_POST['equip_problems_addressed']);
        $op_documented_inbook = mysqli_real_escape_string($query, $_POST['op_documented_inbook']);
        $any_paients_concerns = mysqli_real_escape_string($query, $_POST['any_paients_concerns']);
        $hand_over_toward = mysqli_real_escape_string($query, $_POST['hand_over_toward']);
        $hb = mysqli_real_escape_string($query, $_POST['hb']);
        



        $sql = "INSERT into skin_operations (patient_name, hb, patient_weight, age, allergies, indication_op,
         op_to_be_done, conslt_approved, imaging_needed, mediation, dose_route,  bf_induction_breif_completed, conf_patient, patient_discussed, op_confirmed,
         all_equip_available, antibiotics_needed, 	est_blood_loss, blood_transfusion_predicted, is_blood_available, essential_imaging_disp,
         drugs_ready, aspiration, analgesia, swabs_counted, equip_problems_addressed, op_documented_inbook, any_paients_concerns,
          hand_over_toward
         )
         VALUES ('$patient_name', '$hb', '$patient_weight', '$age', '$allergies', '$indication_op', '$op_to_be_done','$conslt_approved', '$imaging_needed',
          '$mediation', '$dose_route', '$bf_induction_breif_completed','$conf_patient', '$patient_discussed', '$op_confirmed','$all_equip_available', '$antibiotics_needed', 
          '$est_blood_loss', '$blood_transfusion_predicted', '$is_blood_available', '$essential_imaging_disp', '$drugs_ready', 
          '$aspiration', '$analgesia', '$swabs_counted','$equip_problems_addressed', '$op_documented_inbook', '$any_paients_concerns', '$hand_over_toward')";
        $result = mysqli_query($query,$sql);
        if(!$result){
            die("could not insert data" .mysqli_error($query));
            
        }else{
            header('location: skin_operations_names.php');
        }
        
        $preview = "SELECT patient_name FROM skin_operations ";
        $preview_result = mysqli_query($query, $preview);
        //output data of each row
        if(mysqli_num_rows($preview_result)>0 ){
            while($row =mysqli_fetch_assoc($preview_result)){
                header('location: skin_operation.php');
            }

         }else{
                echo "Result not found";
        }
        //$view_result = "SELECT * FROM skin_operations WHERE $id = 'id' ";
        //$By_name_result = mysqli_query($query, $view_result);
    
   
?>
 <?php mysqli_close($query); ?>