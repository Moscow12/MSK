<?php 
    
    require_once ("connection.php"); 

        if(isset($_POST['checkup'])){
        $date_check_up = mysqli_real_escape_string($query,  $_POST["date_check_up"]);
        $hb = mysqli_real_escape_string($query,  $_POST["hb"]);
        $hba1c = mysqli_real_escape_string($query,  $_POST["hba1c"]);
        $microalb = mysqli_real_escape_string($query,  $_POST["microalb"]);
        $bun = mysqli_real_escape_string($query,  $_POST["bun"]);
        $crea = mysqli_real_escape_string($query,  $_POST["crea"]);
        $esr = mysqli_real_escape_string($query,  $_POST["esr"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);


        
        $send_checkup = "INSERT INTO regural_check (date_check_up,hb,hba1c,microalb,bun,crea,esr, patient_id) 
        VALUES ('$date_check_up', '$hb', '$hba1c', '$microalb', '$bun', '$crea', '$esr', $patient_id)";

        $result = mysqli_query($query, $send_checkup) or die(mysqli_error($query));

        if(!$result){
            die( "Couldn't insert data".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }
    }
    
    //post query that post name of patient for diabetic clinic 
    if(isset($_POST['patient'])){
        $sirname = mysqli_real_escape_string($query,  $_POST["sirname"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);
        $dob = mysqli_real_escape_string($query,  $_POST["dob"]);
        $sex = mysqli_real_escape_string($query,  $_POST["sex"]);
        $married = mysqli_real_escape_string($query,  $_POST["married"]);
        $tribe = mysqli_real_escape_string($query,  $_POST["tribe"]);
        $place_of_residence = mysqli_real_escape_string($query,  $_POST["place_of_residence"]);
        $closest_hospital = mysqli_real_escape_string($query,  $_POST["closest_hospital"]);
       
        $send_diabetes_patient = "INSERT INTO patients_diabetic (sirname, patient_name, sex, married, tribe, place_of_residence, closest_hospital, dob ) 
        VALUES ('$sirname', '$patient_name', '$sex', '$married','$tribe', '$place_of_residence', '$closest_hospital', '$dob')";

        $result = mysqli_query($query, $send_diabetes_patient);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header('location: index.php');
        }

    }

    //query to post Fundoscopy or vibration test.
    if(isset($_POST['vbTest'])){
        $vb_test_date = mysqli_real_escape_string($query,  $_POST["vb_test_date"]);
        $fundoscopy_test = mysqli_real_escape_string($query,  $_POST["fundoscopy_test"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);

        $send_test = "INSERT INTO fundoscopy(vb_test_date, fundoscopy_test, patient_id ) VALUES('$vb_test_date', '$fundoscopy_test', '$patient_id')";

        $result = mysqli_query($query, $send_test);

        if(!$result){
            die( "Couldn't insert data".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }
    }


    //Query to post diabetes result 
    if(isset($_POST['diabetes'])){
        $diabete_date = mysqli_real_escape_string($query,  $_POST["diabete_date"]);
        $general = mysqli_real_escape_string($query,  $_POST["general"]);
        $diet = mysqli_real_escape_string($query,  $_POST["diet"]);
        $injection_technique = mysqli_real_escape_string($query,  $_POST["injection_technique"]);
        $urine_testing = mysqli_real_escape_string($query,  $_POST["urine_testing"]);
        $hyper_hypoglycemic = mysqli_real_escape_string($query,  $_POST["hyper_hypoglycemic"]);
        $foot_care = mysqli_real_escape_string($query,  $_POST["foot_care"]);
        $late_complication = mysqli_real_escape_string($query,  $_POST["late_complication"]);
        $drugs = mysqli_real_escape_string($query,  $_POST["drugs"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);

        $send_diabetes_education = "INSERT INTO diabetes_education (diabete_date, general,diet, injection_technique, urine_testing, hyper_hypoglycemic, foot_care, late_complication, drugs ) 
        VALUES ('$diabete_date', '$general', '$diet', '$injection_technique','$urine_testing', '$hyper_hypoglycemic', '$foot_care', '$late_complication', '$drugs')";

        $result = mysqli_query($query, $send_diabetes_education);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }

    }

    //query for posting admissions 
    if(isset($_POST['admission'])){
        $admission_date = mysqli_real_escape_string($query,  $_POST["admission_date"]);
        $diagnosis = mysqli_real_escape_string($query,  $_POST["diagnosis"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);

        $send_admisions_diagnosis = "INSERT INTO admission (admission_date, diagnosis, patient_id ) VALUES('$admission_date', '$diagnosis', '$patient_id')";

        $result = mysqli_query($query, $send_admisions_diagnosis);

        if(!$result){
            die( "Couldn't insert data".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }
    }

    if(isset($_POST['followup'])){
        $follow_up_date = mysqli_real_escape_string($query,  $_POST["follow_up_date"]);
        $bwt = mysqli_real_escape_string($query,  $_POST["bwt"]);
        $bp = mysqli_real_escape_string($query,  $_POST["bp"]);
        $rbg = mysqli_real_escape_string($query,  $_POST["rbg"]);
        $clinical_notes = mysqli_real_escape_string($query,  $_POST["clinical_notes"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);
       
        $send_follow_up_visit = "INSERT INTO follow_up_visit (follow_up_date, bwt, bp, rbg, clinical_notes, patient_id) 
        VALUES ('$follow_up_date', '$bwt', '$bp', '$rbg','$clinical_notes', $patient_id)";

        $result = mysqli_query($query, $send_follow_up_visit);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }

    }


    //query to post date for diabetes clinic
    if(isset($_POST['clinic'])){
        $hospital_no = mysqli_real_escape_string($query,  $_POST["hospital_no"]);
        $clinic_type = mysqli_real_escape_string($query,  $_POST["clinic_type"]);
        $year_of_diagnosis = mysqli_real_escape_string($query,  $_POST["year_of_diagnosis"]);
        $occupation = mysqli_real_escape_string($query,  $_POST["occupation"]);
        $physical_activity = mysqli_real_escape_string($query,  $_POST["physical_activity"]);
        $kind_of_treatment = mysqli_real_escape_string($query,  $_POST["kind_of_treatment"]);
        $self_injecting = mysqli_real_escape_string($query,  $_POST["self_injecting"]);
        $body_weight = mysqli_real_escape_string($query,  $_POST["body_weight"]);
        $height = mysqli_real_escape_string($query,  $_POST["height"]);

        $bim = mysqli_real_escape_string($query,  $_POST["bim"]);
        $rbg = mysqli_real_escape_string($query,  $_POST["rbg"]);
        $bp = mysqli_real_escape_string($query,  $_POST["bp"]);
        $dead = mysqli_real_escape_string($query,  $_POST["dead"]);
        $other_diagnosis = mysqli_real_escape_string($query,  $_POST["other_diagnosis"]);
        $since = mysqli_real_escape_string($query,  $_POST["since"]);
        $treatment = mysqli_real_escape_string($query,  $_POST["treatment"]);
        $special_needs = mysqli_real_escape_string($query,  $_POST["special_needs"]);
        $patient_id = mysqli_real_escape_string($query,  $_POST["patient_id"]);
        $patient_name = mysqli_real_escape_string($query,  $_POST["patient_name"]);


        $send_diabet_scinic = "INSERT INTO  diabetic_clinic (hospital_no, clinic_type,year_of_diagnosis, occupation, physical_activity, kind_of_treatment, self_injecting, body_weight, height,
        bim, rbg,bp, dead, other_diagnosis, since, treatment, special_needs, patient_id ) 
        VALUES ('$hospital_no', '$clinic_type', '$year_of_diagnosis', '$occupation','$physical_activity', '$kind_of_treatment', '$self_injecting', '$body_weight', '$height',
        '$bim', '$rbg', '$bp', '$dead','$other_diagnosis', '$since', '$treatment', '$special_needs', '$patient_id')";

        $result = mysqli_query($query, $send_diabet_scinic);
        if(!$result){
            die("Couldn't insert data ".mysqli_error($query));
        }else{
            header("location: regural_checkup_form.php?id=$patient_id&patient_name=$patient_name");
        }

    }
?>