<html>
<head>
<title>Security Form</title>

    </head>
<body>
    
        <style>
            .table-width{
                width:70%;
            }
	    .first_col_width{
		width:20%;
         	}
            .right_two_cols{
                text-align: center;
                width: 40px;
            }
        </style>
    
	<?php
		/*
			$form_info : array(
				"prepare_form" => array,
				"admission_access" => array,
				"financial_access" => array,
				"financial_aid_access" => array,
				"reserved_access" => array
			)
		 */
	/*	foreach ($form_info as $key => $value) {
			if(count($value) > 0) {
				echo "<h2>" . $key . "</h2>";
				foreach ($value as $k => $v) {
					echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
				}
			}
		}
		echo "<br>";*/
	//	print_r(var_dump($result));

$student_record_access = array();
$admission_access = array();
$financial_access = array();
$financial_aid_access = array();
$reserved_access = array();

foreach($result as $result_v){
    foreach ($result_v as $key => $value){
                if(count($value) > 0) {
                    echo "<h2>" . $key . "</h2>";
         
                
                foreach ($value as $k => $v) {
                        //    echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                       
                }
                        
                    
                    
                    if($key == "student_record_access"){
                        
                        foreach ($value as $k => $v) {
                           // echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $student_record_access[$k] = $v;
                        }
                        
                    }else if($key == "admission_access"){
                        foreach ($value as $k => $v) {
                            echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $admission_access[$k] = $v;
                         //   echo $admission_access['act'] . "  this is " . $k . "<br>";
                         //   echo $admission_access['$k'];
                        }
                        
                        
                    }else if($key == "financial_access"){
                        foreach ($value as $k => $v) {
                            echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $financial_access[$k] = $v;
                        }
                        
                    }else if($key == "financial_aid_access"){
                        echo "<br>it is inside financial_aid_access<br>";
                        foreach ($value as $k => $v) {
                            $financial_aid_access[$k] = $v;
                            echo $financial_aid_access[$k] . $k . "<br>";
                        }
                        
                    }else if($key == "reserved_access"){
                        
                        foreach ($value as $k => $v) {
                            echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $reserved_access[$k] = $v;
                        }
                        
                        
                    }else {
                        
                    }
                }
            }
    
}
//finish entering value into arrays


//print_r(var_dump($admission_access));

if($student_record_access != array()){
    
    
}
if($admission_access != array()) {?>
    
            <div id = "form3">
              <div class='smallheader'>
              <hr>
              <h1>Admissions Access</h1>
            </div>

                  <h3>Select the Academic Career(s). Please check all that apply.</h3>
                  <hr>
                      <br>
                      <input type="checkbox" name="act" value="1"  <?php if($admission_access['act']==1){?>checked <?php } ?>  >ACT
                      <input type="checkbox" name="sat" value="1" <?php if($admission_access['sat']==1){?>checked <?php } ?> >SAT
                      <input type="checkbox" name="gre" value="1" <?php if($admission_access['gre']==1){?>checked <?php } ?> >GRE
                    <input type="checkbox" name="gmat" value="1" <?php if($admission_access['gmat']==1){?>checked <?php } ?> >GMAT
                      <input type="checkbox" name="tofel" value="1" <?php if($admission_access['tofel']==1){?>checked <?php } ?> >TOFEL
                      <input type="checkbox" name="lelts" value="1" <?php if($admission_access['lelts']==1){?>checked <?php } ?> >IELTZ
                      <input type="checkbox" name="lsat" value="1" <?php if($admission_access['lsat']==1){?>checked <?php } ?> >LSAT
                      <input type="checkbox" name="mcat" value="1" <?php if($admission_access['mcat']==1){?>checked <?php } ?> >MCAT
                      <input type="checkbox" name="ap" value="1" <?php if($admission_access['ap']==1){?>checked <?php } ?> >AP
                      <input type="checkbox" name="clep" value="1" <?php if($admission_access['clep']==1){?>checked <?php } ?> >CLEP
                      <input type="checkbox" name="ged" value="1" <?php if($admission_access['act']==1){?>checked <?php } ?> >GED
                      <input type="checkbox" name="millers" value="1" <?php if($admission_access['millers']==1){?>checked <?php } ?> >MILLERS
                      <input type="checkbox" name="prax" value="1" <?php if($admission_access['rpax']==1){?>checked <?php } ?> >PRAX
                      <input type="checkbox" name="pla-mu" value="1" <?php if($admission_access['pla-mu']==1){?>checked <?php } ?> >PLA-MU
                      <input type="checkbox" name="base" value="1" <?php if($admission_access['base']==1){?>checked <?php } ?> >BASE
                      <br>
                      <hr>
            </div>
    
<?php }

if($financial_access != array()){ ?>
    <p>ni ma bi</p>
               <div id = "form4">
                <div  >

                      <p>SF General Inquiry: For staff outside of the Cashier's Office<p>
                      <input type="checkbox" name="general_inquiry" value="1" <?php
                             if($financial_access['general_inquiry'] == 0){ ?>
                             checked
                             <?php }else{ ?>
                                
                             <?php } ?> >View
                      <br>
                      <p>SF Cash Group Post: Also known as Cost Centers
                      <input type="checkbox" name="cash_group_post[]" value="1" <?php
                             if($financial_access['cash_group_post'] == 10 || $financial_access['cash_group_post'] == 1){ ?>
                             checked
                             <?php }else{ ?>
                                
                             <?php } ?>>View
                      <input type="checkbox" name="cash_group_post[]" value="0" <?php
                             if($financial_access['cash_group_post'] == 0 || $financial_access['cash_group_post'] == 01){ ?>
                             checked
                             <?php }else{ ?>
                                
                             <?php } ?>>Update
                      <hr>

                    </div>

            </div>
    
<?php }

if($financial_aid_access != array()){ ?>
  
    <p>inside $financial_aid_access down</p>
    <div id = "form5">
                <div>
                      <p>FA Cash: View a student's fincancial aid awards and budget<p>
                      <input type="checkbox" name="fa_cash" value="1"<?php if($financial_aid_access['fa_cash']==1){ ?>checked<?php } ?>>View
                      <br>
                      <p>FA Non Financial Aid Staff: Also known as Cost Centers
                      <input type="checkbox" name="fa_non_financial_aid_stuff" value="1" <?php if($financial_aid_access['fa_non_financial_aid_stuff']==1){ ?>checked <?php } ?>>View
                      <hr>

                    </div>


            </div>
    
<?php }

if($reserved_access != array()){ ?>
    
    
    
    <div id = "form6">
                       <table class="table table-bordered table-hover" >

                            <tbody>

                              <tr>
                                  <td class = "first_col_width">Role</td>
                                 <td class = "right_two_cols">View</td>
                                <td class = "right_two_cols">Update</td>
                                <td class = "first_col_width">Role</td>
                                 <td class = "right_two_cols">View</td>
                                <td class = "right_two_cols">Update</td>
                              </tr>
                            <tr>
                                <td>Immunization view</td>

                                <td class = "right_two_cols"><?php if($reserved_access['immunization_view'] == 10 || $reserved_access['immunization_view'] == 1){
                                        echo form_checkbox('immunization_view[]','1',TRUE); 
                                    }else{
                                        echo form_checkbox('immunization_view[]','1',FALSE);
                                    }
                                    ?></td>
                                <td class = "right_two_cols"><?php if($reserved_access['immunization_view'] == 00 || $reserved_access['immunization_view'] == 0){
                                        echo form_checkbox('immunization_view[]','0',FALSE); 
                                    }else {
                                        echo form_checkbox('immunization_view[]','0',TRUE); 
                                    }
                                    
                                    ?></td>

                            <td>Accommodate (Student Health)</td>

                                <td class = "right_two_cols"></td>
                                <td class = "right_two_cols"><?php 
                                    if($reserved_access['accommodate'] == 0){
                                        echo form_checkbox('accommodate','1',FALSE); 
                                    }else{
                                        echo form_checkbox('accommodate','1',TRUE); 
                                    }
                                    ?></td>
                            </tr>
                                <tr>
                                <td>Transfer Credit Admission</td>

                                <td class = "right_two_cols"><?php 
if($reserved_access['transfer_credit_admission'] == 00 || $reserved_access['transfer_credit_admission'] == 01){
echo form_checkbox('transfer_credit_admission[]','1',FALSE); 
}else{
   echo form_checkbox('transfer_credit_admission[]','1',TRUE); 
 
} 
                                    ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['transfer_credit_admission'] == 10 || $reserved_access['transfer_credit_admission'] == 00){
    echo form_checkbox('transfer_credit_admission[]','0',FALSE);
}else{
        echo form_checkbox('transfer_credit_admission[]','0',TRUE);

}
                                    ?></td>

                                                    <td>Support Staff (Registrar's Office)</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['support_staff'] == 01 || $reserved_access['support_staff'] == 00){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['support_staff'] == 00 || $reserved_access['support_staff'] == 10){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                            </tr>
                                <tr>
                                <td>Relationships</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['relationships'] == 01 || $reserved_access['relationships'] == 00){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['relationships'] == 00 || $reserved_access['relationships'] == 10){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>



                                       <td>Advance Standing Report</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['advance_standing_report'] == 01 || $reserved_access['advance_standing_report'] == 00){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['advance_standing_report'] == 01 || $reserved_access['advance_standing_report'] == 00){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                            </tr>
                                <tr>
                                <td>Student Groups</td>

                                <td class = "right_two_cols"></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['student_groups'] == 0){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </tr>


                            </tbody>
                          </table>
            </div>
    
                
    
<?php }else{

        }
	echo "<br>";
	?>
    
    
	<div><br><a href="<?php echo base_url(); ?>index.php/users/home">Back to home</a></div>
    
    
    
    
    
    
    
</body>
</html>