<?php
    include('header.php');
    require_once ("connection.php");
    
            $id=$_GET['id'];

            $names_diabetic = "SELECT * FROM patients_diabetic WHERE id =$id ";
            $name_result = mysqli_query($query, $names_diabetic);

            $regural_checkup  = "SELECT * from regural_check where patient_id =$id";
            $chackup_result = mysqli_query($query, $regural_checkup);

            $funcdoscopy = "SELECT * from fundoscopy where patient_id = $id";
            $fundoscopy_result = mysqli_query($query, $funcdoscopy);

            $diabete_education = "SELECT * from diabetes_education where patient_id = $id";
            $diabete_education_result = mysqli_query($query, $diabete_education);

            $admisions = "SELECT * from  admission where patient_id = $id";
            $admission_result = mysqli_query($query, $admisions);
            
            $follow_up_visits = "SELECT * from  follow_up_visit where patient_id = $id";
            $followup_result = mysqli_query($query, $follow_up_visits);
            
            
   
?>
<body class="container"><br>
    
            <div class="col-md-2">
                <a href="index.php" class="btn  btn-info"><< Back</a>
            </div>
        <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden><input type="text" value="<?php echo $patient_name; ?>" name="patient_name" hidden>
            <div class="row col-md-12">
                <table class="table table-borderedless" id="tabled">           
                    <thead>
                        <tr >
                            <th colspan="11" ><h4>Regular Checkup</h4></th>
                        </tr>
                        <tr>
                            <th><h4>Date</h4></th>
                            <th>Hb</th>
                            <th>HbA1c</th>
                            <th>Microalb</th>
                            <th>BUN</th>
                            <th>Crea</th>
                            <th colspan="2">ESR</th>
                        </tr>                
                    </thead>
                    <tbody>
                        <?php while($row =mysqli_fetch_assoc($chackup_result)){?>
                        <tr>
                            <td><?php echo $row['date_check_up']; ?></td>
                            <td><?php echo $row['hb']; ?></td> 
                            <td><?php echo $row['hba1c']; ?></td>
                            <td><?php echo $row['microalb']; ?></td>
                            <td><?php echo $row['bun']; ?></td>
                            <td><?php echo $row['crea']; ?></td>
                            <td><?php echo $row['esr']; ?></td>
                            <td><button type="submit" class="btn btn-success" >Edit</button></td>   
                        </tr>
                        <?php  } ?>
                        <tr>
                            <td><input type="date" class="form-control" name="date_check_up"></td>
                            <td><input type="text" class="form-control" name="hb"></td> 
                            <td><input type="text" class="form-control" name="hba1c"></td>
                            <td><input type="text" class="form-control" name="microalb"></td>
                            <td><input type="text" class="form-control" name="bun"></td>
                            <td><input type="text" class="form-control" name="crea"></td>
                            <td><input type="text" class="form-control" name="esr"></td>                                     
                            <td><button type="submit" class="btn btn-success" name="checkup">Save</button></td>
                        </tr>
                    
                    </tbody>
                </table>
            </div> 
        </form>
        <hr>   
    
       
            <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
                <div class="row col-md-12">
                    <table class="table table-borderedless" id="tabled">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th colspan="2">Fundoscopy, Vibration test and other special investigation</th>
                            </tr>               
                        </thead>
                        <tbody id="btn">
                            <?php while($fundo =mysqli_fetch_assoc($fundoscopy_result)){?>
                            <tr> 
                                <td><input type="Date" class="form-control" name="vb_test_date" value="<?php echo $fundo['vb_test_date'];?>" disabled></td>
                                <td><input type="text" class="form-control" name="fundoscopy_test"  colspan="2" value="<?php echo $fundo['fundoscopy_test'];?>" disabled></td>
                            </tr>
                            <?php } ?>
                            <tr> 
                                <td><input type="Date" class="form-control" name="vb_test_date"></td>
                                <td><input type="text" class="form-control" name="fundoscopy_test"></td>
                                <td><button class="btn btn-success btn-block" type="submit" title="save input field" name="vbTest">save</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        
    <br><hr><br>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead>
                    <tr id="tabled"><th colspan="11">DIABETES EDUCATION</th></tr>
                    <tr id="tabled">                    
                        <th>Date</th>
                        <th>General</th>
                        <th>Diet</th>
                        <th>Insulin/Injection Technique</th>
                        <th>Urine Testing</th>
                        <th>Hyper -Hypoglycemic</th>
                        <th>Foot Care</th>
                        <th>Late Complications</th>
                        <th colspan="2">Drugs</th>                        
                    </tr>                
                </thead>
                <tbody>
                    <?php while($rows =mysqli_fetch_assoc($diabete_education_result)){?>
                        <tr>
                            <td><input type="date" class="form-control" name="diabete_date" value="<?php echo $rows['diabete_date'];?>" disabled ></td>
                            <td><textarea type="text" class="form-control" name="general" value="<?php echo $rows['general'];?>" disabled></textarea></td>
                            <td><input type="text" class="form-control" name="diet" value="<?php echo $rows['diet'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="injection_technique" value="<?php echo $rows['injection_technigue'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="urine_testing" value="<?php echo $rows['urine_testing'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="hyper_hypoglycemic" value="<?php echo $rows['hyper_hypoglycemic'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="foot_care" value="<?php echo $rows['foot_care'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="late_complication" value="<?php echo $rows['late_complication'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="drugs" value="<?php echo $rows['drugs'];?>" disabled></td>                            
                        </tr>
                    <?php }?>
                    <tr>
                        <td><input type="date" class="form-control" name="diabete_date"></td>
                        <td><textarea type="text" class="form-control" name="general"></textarea></td>
                        <td><input type="text" class="form-control" name="diet"></td>
                        <td><input type="text" class="form-control" name="injection_technique"></td>
                        <td><input type="text" class="form-control" name="urine_testing"></td>
                        <td><input type="text" class="form-control" name="hyper_hypoglycemic"></td>
                        <td><input type="text" class="form-control" name="foot_care"></td>
                        <td><input type="text" class="form-control" name="late_complication"></td>
                        <td><input type="text" class="form-control" name="drugs"></td>
                        <td><button type="submit" class="btn btn-success" name="diabetes">Save</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </form>
    <hr>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead> 
                    <tr ><th colspan="3" id="tabled">ADIMISSION</th> </tr>                                        
                        <tr>
                            <th>Date</th>
                            <th colspan="2">Diagnosis</th>
                        </tr>                   
                </thead>
                <tbody>
                <?php while($rowss =mysqli_fetch_assoc($admission_result)){?>
                    <tr>
                        <td><input type="date" class="form-control" name="admission_date" value="<?php echo $rowss['admission_date'];?>" disabled></td>
                        <td><textarea type="text" class="form-control" name="diagnosis" value="<?php echo $rowss['diagnosis'];?>" disabled></textarea></td>
                        
                    </tr>
                <?php } ?>
                    <tr>
                        <td><input type="date" class="form-control" name="admission_date"></td>
                        <td><textarea type="text" class="form-control" name="diagnosis"></textarea></td>
                        <td><button type="submit" class="btn btn-success btn-block" name="admission">Save</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
    <hr>
    <form action="regular_check_db.php" method="post"><input type="text" value="<?php echo $id; ?>" name="patient_id" hidden>   
        <div class="row col-md-12">
            <table class="table table-bordered" id="tabled">
                <thead >
                    <tr id="tabled">
                        <th colspan="6" style="align-content: center;"><h4>Follow-up Visits</h4></th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Bwt</th>
                        <th>BP</th>
                        <th>RBG</th>
                        <th colspan="2">Clinical Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rowes =mysqli_fetch_assoc($followup_result)){?>
                        <tr>
                            <td><input type="date" class="form-control" name="follow_up_date" value="<?php echo $rowes['follow_up_date'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="bwt" value="<?php echo $rowes['bwt'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="bp" value="<?php echo $rowes['bp'];?>" disabled></td>
                            <td><input type="text" class="form-control" name="rbg" value="<?php echo $rowes['rbg'];?>" disabled></td>
                            <td><textarea type="text" class="form-control" name="clinical_notes" value="<?php echo $rowes['clinical_notes'];?>" disabled></textarea></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td><input type="date" class="form-control" name="follow_up_date"></td>
                        <td><input type="text" class="form-control" name="bwt"></td>
                        <td><input type="text" class="form-control" name="bp"></td>
                        <td><input type="text" class="form-control" name="rbg"></td>
                        <td><textarea type="text" class="form-control" name="clinical_notes"></textarea></td>
                        <td><button  class="btn btn-success" type="submit" name="followup">Save</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
   
</body>
