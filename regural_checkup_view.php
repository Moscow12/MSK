<?php
    include('header.php');
?>
<body><br>
    
        <form action="regular_check_db.php" method="post">
            <div class="row col-md-12">
                <table class="table table-bordered" id="tabled">           
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
    
       
            <form action="regular_check_db.php" method="post">
                <div class="row col-md-12">
                    <table class="table table-bordered" id="tabled">
                        <thead>
                            <tr>
                                <th><h4>Date</h4></th>
                                <th colspan="2"><h5>Fundoscopy, Vibration test and other special investigation</h5></th>
                            </tr>               
                        </thead>
                        <tbody id="btn">
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
    <form action="regular_check_db.php" method="post">
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
                    <tr>
                        <td><input type="date" class="form-control" name="date_diabetes"></td>
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
    <form action="regular_check_db.php" method="post">
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
    <form action="regular_check_db.php" method="post">
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

