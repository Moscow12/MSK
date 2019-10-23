<?php
    require_once ("connection.php");
    
    $id=$_GET['id'];
    $view_result = "SELECT * FROM skin_operations WHERE id='$id' ";
        $By_name_result = mysqli_query($query, $view_result);
        
            while($row =mysqli_fetch_assoc($By_name_result)){
                $id=$row['id'];
                $patient_name=$row['patient_name'];
                $patient_weight = $row['patient_weight'];
                $age = $row['age'];
                $allergies = $row['allergies'];
                $indication_op = $row['indication_op'];
                $op_to_be_done = $row['op_to_be_done'];
                $conslt_approved = $row['conslt_approved'];
                $imaging_needed = $row['imaging_needed'];
                $bf_induction_breif_completed = $row['bf_induction_breif_completed'];
                $conf_patient = $row['conf_patient'];
                $patient_discussed = $row['patient_discussed'];
                $op_confirmed = $row['op_confirmed'];
                $all_equip_available = $row['all_equip_available']; 
                $antibiotics_needed = $row['antibiotics_needed'];
                $est_blood_loss = $row['est_blood_loss'];
                $blood_transfusion_predicted = $row['blood_transfusion_predicted'];
                $is_blood_available = $row['is_blood_available'];
                $essential_imaging_disp = $row['essential_imaging_disp'];
                $drugs_ready = $row['drugs_ready'];
                $aspiration = $row['aspiration'];
                $analgesia = $row['analgesia'];
                $swabs_counted = $row['swabs_counted'];
                $equip_problems_addressed = $row['equip_problems_addressed'];
                $op_documented_inbook = $row['op_documented_inbook'];
                $any_paients_concerns = $row['any_paients_concerns'];
                $hand_over_toward = $row['hand_over_toward'];
                $hb = $row['hb'];

            }
      
            $htm = "

                                <form action='register.php' method='post'>
                                    <div class='form-group'>
                                        <div class='row'>
                                            <div class='col-md-2'>Day before: 
                                            </div>
                                            <div class='col-md-8'>
                                                <div class='row'>
                                                    <label for='name'>Name: </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class='form-group'>                          
                                                              $patient_name;                                                    
                                                    </div>
                                                </div>                        
                                            </div>
                                            <div class='col-md-2'>
                                                <div class='form-group'>HB:
                                                <strong style='padding-left: 5%;'>
                                                    
                                                          $hb;                                            
                                                   
                                                </strong>
                                                        
                                                </div>
                                            </div>                            
                                        </div>
                                    </div>
                                                   
                                    <div class='form-group'>
                                        <div class='row col-md-12'><strong>Clearking doctor</strong>  </div>
                                            <div class='row col-md-12'>
                                                <div class='col-md-4'>
                                                    <div class='row'>
                                                        <label for='weight'>Weight</label> &nbsp;&nbsp;&nbsp;
                                                        <div class='form-group' style='padding-left: 10%;'>
                                                            $patient_weight;                                           
                                                            
                                                        </div>  
                                                    </div>                        
                                                </div>
                                                <div class='col-md-4'>
                                                    <label for='Age'>Age</label>
                                                        <strong style='padding-left: 10%;'>
                                                         $age;                                            
                                                        
                                                        </strong>
                                                    
                                                </div>
                                                <div class='col-md-4'>
                                                    <label for='allergies'>Allergies</label>
                                                    <strong class='form-group' style='padding-left: 10%;'>
                                                          $allergies;                                            
                                                        
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class='row col-md-12'>
                                                <label for='indication_op'>Indication for Operation</label>
                                                <strong class='form-group' style='padding-left: 10%;'>
                                                          $indication_op;                                            
                                                        
                                                </strong>
                                            </div>
                                            <div class='row col-md-12'>
                                                <label for='op_to_done'>Operation to be done</label>
                                                <strong class='form-group' style='padding-left: 10%;'>
                                                        
                                                            $op_to_be_done;                                            
                                                        
                                                </strong>
                                            </div>";
       
                                            $htm .="<div class='row col-md-12'>
                                                <div class='col-md-4'>
                                                    <label for='consult_approved'>Consult approved:</label>
                                                </div>
                                                <div class='col-md-4'>
                                                    <div class='check-form form-check-inline'>";
                                                       
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($conslt_approved=="Yes"){
                                                                $checked_yes="checked='checked'";
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                        
                                                    $htm .="  <input type='radio' class='form-input-input' disabled='disabled' $checked_yes name='conslt_approved' id='radio1' >
                                                        <label for='inlineradio1' class='form-radio-label'>Yes</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-4'>
                                                    <div class='check-form form-check-inline'>
                                                        <input type='radio' class='form-input-input' name='conslt_approved' disabled $checked_no id='radio2' value=' $conslt_approved '>
                                                        <label for='inlineradio2' class='form-radio-label'>No</label>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <div class='row col-md-12'>
                                                <div class='col-md-4'>
                                                    <label for='consult_approved'>Any essential imaging needed</label>
                                                </div>
                                                <div class='col-md-4'>
                                                    <div class='check-form form-check-inline'>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($imaging_needed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                                        $htm .="<input type='radio' class='form-input-input' name='imaging_needed'  $checked_yes  disabled='disabled' id='radio3'  >
                                                        <label for='inlineradio1' class='form-radio-label'>Yes</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-4'>
                                                    <div class='check-form form-check-inline'>
                                                        <input type='radio' class='form-input-input'name='imaging_needed' id='radio4' disabled='disabled'  $checked_no  >
                                                        <label for='inlineradio2' class='form-radio-label'>No</label>
                                                    </div>
                                                </div>                        
                                            </div>
                                    </div>
                                    <div class='row col-md-12'>
                                        <h4>DAY BEFORE: DOCTORS PRESCRIBED NO DRUG CHART</h4>
                                    </div>
                                    <div class='row col-md-12'>
                                        (Ward staff to give 1hr pre-op)
                                    </div>
                                    <div class='row col-md-12'>
                                        <table class=' table table-bordered table-condensed table-hover'>
                                            <thead>
                                                <th> Mediation </th>
                                                <th> Dose/route </th>
                                                <th> Dr's sing </th>
                                                <th> Nurse administer sign </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Paracetamol (15mg/Kg)</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Ibuprofen (5mg/Kg)</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>                            
                                                    <td>Pethedine (1mg/Kg)</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br/>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='consult_approved'><strong>Before inductioction </strong>- morning team breif completed </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($bf_induction_breif_completed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                       
                                                   $htm .=" <input type='radio' class='form-input-input' name='bf_induction_breif_completed' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='bf_induction_breif_completed' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='bf_induction_breif_completed' id='radio2'   $checked_no  disabled='disabled'>
                                                    <label for='bf_induction_breif_completed' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='conf_patient'><strong>Scrub team: </strong>Confirm patient and concent </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                       
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($conf_patient=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                                    $htm .="<input type='radio' class='form-input-input' name='conf_patient' id='radio1'   $checked_yes  disabled='disabled' >
                                                    <label for='conf_patient' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='conf_patient' id='radio2'   $checked_no  disabled='disabled'>
                                                    <label for='conf_patient' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='patient_discussed'><strong style='visibility: hidden;'>Scrub team: </strong>Patient discussed at as team breif </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($patient_discussed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                                   $htm .=" <input type='radio' class='form-input-input' name='patient_discussed' id='radio1'   $checked_yes  disabled='disabled' >
                                                    <label for='patient_discussed' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='patient_discussed' id='radio2'   $checked_no  disabled='disabled'>
                                                    <label for='patient_discussed' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='op_confirmed'><strong style='visibility: hidden;'>Scrub team: </strong>Operation confirmed (plus site) </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                       
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($patient_discussed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                       
                                                    $htm .="<input type='radio' class='form-input-input' name='op_confirmed' id='radio1'   $checked_yes  disabled='disabled' >
                                                    <label for='op_confirmed' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='op_confirmed' id='radio2'   $checked_no  disabled='disabled'>
                                                    <label for='op_confirmed' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='all_equip_available'><strong style='visibility: hidden;'>Scrub team: </strong>All equipment available </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($all_equip_available=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                                   $htm .=" <input type='radio' class='form-input-input' name='all_equip_available' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='all_equip_available' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='all_equip_available' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='all_equip_available' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='antibiotics_needed'><strong >Surgeon: </strong>antibiotics needed?(Ward nurses to bring) </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($antibiotics_needed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                       
                                                    $htm .="<input type='radio' class='form-input-input' name='antibiotics_needed' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='antibiotics_needed' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='antibiotics_needed' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='antibiotics_needed' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='est_blood_loss'><strong style='visibility: hidden;'>Surgeon: </strong>Estmated blood loss </label>
                                            </div>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($est_blood_loss=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                           $htm .=" <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <label for='est_blood_loss' >Mls.</label>
                                                    <?php 
                                                        echo $est_blood_loss;
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='est_blood_loss' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='est_blood_loss' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='blood_transfusion_predicted'><strong style='visibility: hidden;'>Surgeon: </strong>Blood transfusion predicted? </label>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>";
                                                         
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($blood_transfusion_predicted=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                       
                                                    $htm .="<input type='radio' class='form-input-input' name='blood_transfusion_predicted' id='radio1'   $checked_yes  disabled='disabled' >
                                                    <label for='blood_transfusion_predicted' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='blood_transfusion_predicted' id='radio2'   $checked_no  disabled='disabled'>
                                                    <label for='blood_transfusion_predicted' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='is_blood_available'><strong style='visibility: hidden;'>Surgeon: </strong>is Blood available? </label>
                                                        ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($is_blood_available=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                        $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='is_blood_available' id='radio1'   $checked_yes  disabled='disabled'>
                                                    <label for='is_blood_available' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='is_blood_available' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='is_blood_available' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='essential_imaging_disp'><strong style='visibility: hidden;'>Surgeon: </strong>Essential imaging displayed? </label>";
                                                        
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($essential_imaging_disp=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                        
                                            $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='essential_imaging_disp' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='essential_imaging_disp' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='essential_imaging_disp' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='essential_imaging_disp' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='drugs_ready'><strong >Anaesthetists: </strong>pulse oximeter /machine/ drugs ready? </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($drugs_ready=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                       
                                            $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='drugs_ready' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='drugs_ready' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='drugs_ready' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='drugs_ready' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='aspiration'><strong style='visibility: hidden;'>Anaesthetists: </strong>Aspiration/ airway risk? </label>
                                                "; 
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($aspiration=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                                $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='aspiration' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='aspiration' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='aspiration' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='aspiration' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='analgesia'><strong style='visibility: hidden;'>Analgesia </strong>analgesia (e.g. morphine 0.1mg/kg, pethedine 1mg/Kg) </label>
                                                "; 
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($analgesia=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                        
                                $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='analgesia' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='analgesia' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='analgesia' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='analgesia' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='swabs_counted'><strong >Operation finishing: </strong>swabs counted? </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($swabs_counted=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                        
                                $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='swabs_counted' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='swabs_counted' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='swabs_counted' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='swabs_counted' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='equip_problems_addressed'><strong >(Scab equipment) </strong>equipment crub addressed? </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($equip_problems_addressed=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                        
                                 $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='equip_problems_addressed' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='equip_problems_addressed' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='equip_problems_addressed' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='equip_problems_addressed' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='op_documented_inbook'><strong style='visibility: hidden;'>(Scab equipment) </strong>Operation documented in record book?  </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($op_documented_inbook=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                       
                        $htm .="</div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='op_documented_inbook' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='op_documented_inbook' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='op_documented_inbook' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='op_documented_inbook' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='any_paients_concerns'><strong >(Surgeon/anaesthetist) </strong>Any patients concern?  </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($any_paients_concerns=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'";
                                                            }
                                                       
                        $htm .=" </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='any_paients_concerns' id='radio1'  $checked_yes  disabled='disabled' >
                                                    <label for='any_paients_concerns' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='any_paients_concerns' id='radio2'  $checked_no  disabled='disabled'>
                                                    <label for='any_paients_concerns' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div>
                                        <div class='row col-md-12'>
                                            <div class='col-md-6'>
                                                <label for='hand_over_toward'><strong >Recovery </strong>Hand over to ward   </label>
                                                ";
                                                            $checked_yes="";
                                                            $checked_no="";
                                                            if($hand_over_toward=="Yes"){
                                                                $checked_yes="checked='checked'" ;
                                                            }else{
                                                                $checked_no="checked='checked'" ;
                                                            }
                                                        
                            $htm .=" </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input' name='hand_over_toward' id='radio1'  $checked_yes;  disabled='disabled' >
                                                    <label for='hand_over_toward' class='form-radio-label'>Yes</label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='check-form form-check-inline'>
                                                    <input type='radio' class='form-input-input'name='hand_over_toward' id='radio2' $checked_no  disabled='disabled' >
                                                    <label for='hand_over_toward' class='form-radio-label'>No</label>
                                                </div>
                                            </div>                        
                                        </div> 
                                                       
                                </form>     
                            </fieldset>
                            
                        
                        </body>
                        </html>";
        

// echo $htm;
// die("");
//this is for wrinting pdf file
$htm1 ="<table class='table table-bordered'>
<tr >
        <td>user</td>
        <td>data</td>
        <td>colmmm</td>
        <td>muuuu</td>
</tr>
</table>";
require "mpdf/mpdf.php";
$mpdf = new mPDF();

 $stylesheet = file_get_contents('style.css');
 $stylesheet1 = file_get_contents('bootstrap.css');
 $stylesheet2 = file_get_contents('bootstrap.min.css');
 $stylesheet3 = file_get_contents('bootstrap/assets/css/docs.min.css');

 /*$mpdf = WriteHTML($stylesheet);
 $mpdf = WriteHTML($stylesheet1, 2);
 $mpdf = WriteHTML($stylesheet2, 3);
 $mpdf = WriteHTML($stylesheet3, 4);*/
// $mPDF->WriteHTML($stylesheet, \mPDF\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($stylesheet3,1);
$mpdf->WriteHTML($htm,2);

$mpdf->Output();
?>