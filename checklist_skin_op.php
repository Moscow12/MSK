
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type="text/css" rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap/assets/css.docs.min.css">
        <link type="text/css" rel="stylesheet" href="min.css">


        <title>Regitser</title>
        
    </head>
    <body class="container"> <br><br>
        
            <legend align="center" id="tableh"><h3><u>CHECKLIST FOR SKIN OPERATIONS -RESPONSIBLE STAFF</u> </h3></legend>
            <form action="register.php" method="post" id="tableh"><br><br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">Day before: 
                        </div>
                        <div class="col-md-8">
                            <div class="row form-inline">
                                <label for="name">Name</label> &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="patient_name" id="firstname" onkeyup="myFunction()" style="border: none; padding left: 50px;"class="form-control" placeholder=".........................">
                            </div>                        
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="hb" placeholder="HB &nbsp;&nbsp;&nbsp;&nbsp;.......">
                        </div>                            
                    </div>
                </div>
                <div class="form-group">
                    <div class="row col-md-12"><strong>Clearking doctor</strong>  </div>
                        <div class="row col-md-12">
                            <div class="col-md-4 form-inline">
                                <div class="row">
                                    <label for="weight">Weight</label> &nbsp;&nbsp;&nbsp;
                                    <input type="text" class="form-control" name="patient_weight" id="firstname" style="border: none; padding left: 50px;" placeholder=".........................">
                                </div>                        
                            </div>
                            <div class="col-md-4 form-inline">
                                <label for="Age">Age</label>
                                <input type="text" name="age" class="form-control" style="border: none; padding left: 50px;" placeholder=" &nbsp;&nbsp;&nbsp;&nbsp;.......">
                            </div>
                            <div class="col-md-4 form-inline">
                                <label for="allergies">Allergies</label>
                                <input type="text" class="form-control" name="allergies"  style="border: none; padding left: 50px;" placeholder="............">
                            </div>
                        </div>
                        <div class="row col-md-12 form-inline" style="padding-top: 20px;">
                            <label for="indication_op">Indication for Operation</label>
                            <input type="text" name="indication_op" class="form-control" style="border: none; padding-left: 50px;" placeholder="............">
                        </div>
                        <div class="row col-md-12 form-inline" style="padding-top: 20px;">
                            <label for="op_to_done">Operation to be done</label>
                            <input type="text" name="op_to_be_done" class="form-control" style="border: none; padding left: 50px;" placeholder="............">
                        </div>
                        <div class="row col-md-12 "  style="padding-top: 20px;">
                            <div class="col-md-4" >
                                <label for="consult_approved">Consult approved:</label>
                            </div>
                            <div class="col-md-4">
                                <div class="check-form form-check-inline">
                                    <input type="radio" class="form-input-input" name="conslt_approved" id="radio1" value="Yes" >
                                    <label for="inlineradio1" class="form-radio-label">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="check-form form-check-inline">
                                    <input type="radio" class="form-input-input"name="conslt_approved" id="radio2" value="No">
                                    <label for="inlineradio2" class="form-radio-label">No</label>
                                </div>
                            </div>                        
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-4">
                                <label for="consult_approved">Any essential imaging needed</label>
                            </div>
                            <div class="col-md-4">
                                <div class="check-form form-check-inline">
                                    <input type="radio" class="form-input-input" name="imaging_needed" id="radio3" value="Yes" >
                                    <label for="inlineradio1" class="form-radio-label">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="check-form form-check-inline">
                                    <input type="radio" class="form-input-input"name="imaging_needed" id="radio4" value="No">
                                    <label for="inlineradio2" class="form-radio-label">No</label>
                                </div>
                            </div>                        
                        </div>
                </div>
                <div class="row col-md-12">
                    <h4>DAY BEFORE: DOCTORS PRESCRIBED NO DRUG CHART</h4>
                </div>
                <div class="row col-md-12">
                    (Ward staff to give 1hr pre-op)
                </div>
                <div class="row col-md-12">
                    <table class=" table table-bordered table-condensed table-hover">
                        <thead>
                            <th> Mediation </th>
                            <th> Dose/route </th>
                            <th> Dr's sign </th>
                            <th> Nurse administer sign </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select--</option>
                                        <option value="paracetamol">Paracetamol (15mg/Kg)</option>
                                        <option value="ibunprofen">Ibuprofen (5mg/Kg)</option>
                                        <option value="pethedine">Pethedine (1mg/Kg)</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="dose_route"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select--</option>
                                        <option value="paracetamol">Paracetamol (15mg/Kg)</option>
                                        <option value="ibunprofen">Ibuprofen (5mg/Kg)</option>
                                        <option value="pethedine">Pethedine (1mg/Kg)</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="dose_route"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>                            
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select--</option>
                                        <option value="paracetamol">Paracetamol (15mg/Kg)</option>
                                        <option value="ibunprofen">Ibuprofen (5mg/Kg)</option>
                                        <option value="pethedine">Pethedine (1mg/Kg)</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="dose_route"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><br/>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="consult_approved"><strong>Before inductioction </strong>- morning team breif completed </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="bf_induction_breif_completed" id="radio1" value="Yes" >
                                <label for="bf_induction_breif_completed" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="bf_induction_breif_completed" id="radio2" value="No">
                                <label for="bf_induction_breif_completed" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="conf_patient"><strong>Scrub team: </strong>Confirm patient and concent </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="conf_patient" id="radio1" value="Yes" >
                                <label for="conf_patient" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="conf_patient" id="radio2" value="No">
                                <label for="conf_patient" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="patient_discussed"><strong style="visibility: hidden;">Scrub team: </strong>Patient discussed at as team breif </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="patient_discussed" id="radio1" value="Yes" >
                                <label for="patient_discussed" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="patient_discussed" id="radio2" value="No">
                                <label for="patient_discussed" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="op_confirmed"><strong style="visibility: hidden;">Scrub team: </strong>Operation confirmed (plus site) </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="op_confirmed" id="radio1" value="Yes" >
                                <label for="op_confirmed" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="op_confirmed" id="radio2" value="No">
                                <label for="op_confirmed" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="all_equip_available"><strong style="visibility: hidden;">Scrub team: </strong>All equipment available </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="all_equip_available" id="radio1" value="Yes" >
                                <label for="all_equip_available" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="all_equip_available" id="radio2" value="No">
                                <label for="all_equip_available" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="antibiotics_needed"><strong >Surgeon: </strong>antibiotics needed?(Ward nurses to bring) </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="antibiotics_needed" id="radio1" value="Yes" >
                                <label for="antibiotics_needed" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="antibiotics_needed" id="radio2" value="No">
                                <label for="antibiotics_needed" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="est_blood_loss"><strong style="visibility: hidden;">Surgeon: </strong>Estmated blood loss </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <label for="est_blood_loss" >Mls.</label>
                                <input type="text" name="est_blood_loss" id="radio1" style="border: none;" placeholder="......">
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="est_blood_loss" id="radio2" value="No">
                                <label for="est_blood_loss" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="blood_transfusion_predicted"><strong style="visibility: hidden;">Surgeon: </strong>Blood transfusion predicted? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="blood_transfusion_predicted" id="radio1" value="Yes" >
                                <label for="blood_transfusion_predicted" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="blood_transfusion_predicted" id="radio2" value="No">
                                <label for="blood_transfusion_predicted" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="is_blood_available"><strong style="visibility: hidden;">Surgeon: </strong>is Blood available? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="is_blood_available" id="radio1" value="Yes" >
                                <label for="is_blood_available" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="is_blood_available" id="radio2" value="No">
                                <label for="is_blood_available" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="essential_imaging_disp"><strong style="visibility: hidden;">Surgeon: </strong>Essential imaging displayed? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="essential_imaging_disp" id="radio1" value="Yes" >
                                <label for="essential_imaging_disp" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="essential_imaging_disp" id="radio2" value="No">
                                <label for="essential_imaging_disp" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="drugs_ready"><strong >Anaesthetists: </strong>pulse oximeter /machine/ drugs ready? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="drugs_ready" id="radio1" value="Yes" >
                                <label for="drugs_ready" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="drugs_ready" id="radio2" value="No">
                                <label for="drugs_ready" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="aspiration"><strong style="visibility: hidden;">Anaesthetists: </strong>Aspiration/ airway risk? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="aspiration" id="radio1" value="Yes" >
                                <label for="aspiration" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="aspiration" id="radio2" value="No">
                                <label for="aspiration" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="analgesia"><strong style="visibility: hidden;">Anaesthetists: </strong>analgesia (e.g. morphine 0.1mg/kg, pethedine 1mg/Kg) </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="analgesia" id="radio1" value="Yes" >
                                <label for="analgesia" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="analgesia" id="radio2" value="No">
                                <label for="analgesia" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="swabs_counted"><strong >Operation finishing: </strong>swabs counted? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="swabs_counted" id="radio1" value="Yes" >
                                <label for="swabs_counted" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="swabs_counted" id="radio2" value="No">
                                <label for="swabs_counted" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="equip_problems_addressed"><strong >(Scab equipment) </strong>equipment crub addressed? </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="equip_problems_addressed" id="radio1" value="Yes" >
                                <label for="equip_problems_addressed" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="equip_problems_addressed" id="radio2" value="No">
                                <label for="equip_problems_addressed" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="op_documented_inbook"><strong style="visibility: hidden;">(Scab equipment) </strong>Operation documented in record book?  </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="op_documented_inbook" id="radio1" value="Yes" >
                                <label for="op_documented_inbook" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="op_documented_inbook" id="radio2" value="No">
                                <label for="op_documented_inbook" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="any_paients_concerns"><strong >(Surgeon/anaesthetist) </strong>Any patients concern?  </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="any_paients_concerns" id="radio1" value="Yes" >
                                <label for="any_paients_concerns" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="any_paients_concerns" id="radio2" value="No">
                                <label for="any_paients_concerns" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="hand_over_toward"><strong >Recovery </strong>Hand over to ward   </label>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input" name="hand_over_toward" id="radio1" value="Yes" >
                                <label for="hand_over_toward" class="form-radio-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="check-form form-check-inline">
                                <input type="radio" class="form-input-input"name="hand_over_toward" id="radio2" value="No">
                                <label for="hand_over_toward" class="form-radio-label">No</label>
                            </div>
                        </div>                        
                    </div> 
                    <div class="row col-md-12">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" value="submit">Submit</button>
                        </div>
                    </div>                   
            </form>     
        
        <div >
            <h5 id="right">All rights reserved @ 2019</h5> 
        </div>
       
        <script src="bootstrap/dist/js/bootsrap.js"></script>
        <script src="bootstrap/dist/js/bootsrap.min.js"></script>
        <script src="bootstrap/dist/js/bootsrap.min.js.map"></script>
        <script src="bootstrap/dist/js/bootsrap.js.map"></script>
    </body>
    </html>
<script>
    $(document).ready(function(){
        $("#firstname").on("keyup", function(){
                alert("yes");
                $(this).text(str.charAt(0).toUpperCase + str.substr(1).toLowerCase());
            });
            
    });
    

            function myFunction(){
              var firstname = document.getElementById("firstname");
               firstname.value = firstname.value.charAt(0).toUpperCase() + firstname.value.slice(1);
                
              }
</script>