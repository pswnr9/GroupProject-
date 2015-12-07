<html>
<head>
<title>Security Form</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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


$student_record_access = array();
$admission_access = array();
$financial_access = array();
$financial_aid_access = array();
$reserved_access = array();

foreach($result as $result_v){
    foreach ($result_v as $key => $value){
                if(count($value) > 0) {
             
                    if($key == "student_record_access"){
                        
                        foreach ($value as $k => $v) {
                        //    echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $student_record_access[$k] = $v;
                        }
                        
                    }else if($key == "admission_access"){
                        foreach ($value as $k => $v) {
                        //    echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $admission_access[$k] = $v;
                         //   echo $admission_access['act'] . "  this is " . $k . "<br>";
                        }
                        
                        
                    }else if($key == "financial_access"){
                        foreach ($value as $k => $v) {
                        //    echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $financial_access[$k] = $v;
                        }
                        
                    }else if($key == "financial_aid_access"){
                     //   echo "<br>it is inside financial_aid_access<br>";
                        foreach ($value as $k => $v) {
                            $financial_aid_access[$k] = $v;
                         //   echo $financial_aid_access[$k] . $k . "<br>";
                        }
                        
                    }else if($key == "reserved_access"){
                        
                        foreach ($value as $k => $v) {
                    //        echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                            $reserved_access[$k] = $v;
                        }
                        
                        
                    }else {
                        
                    }
                }
            }
    
}
//finish entering value into arrays

?>
    <h1 style="text-align:center;">MU Request Form</h1>
    <?php
if($student_record_access != array()){?>
    
    <div class="container table-width">
           <table class="table table-bordered table-hover">

            <tbody>
              <tr>
                  <td span = 2></td>
                <td> </td>
                <td span = 2>access type</td>
                <td> </td>
              </tr>
              <tr>
                  <td class = "first_col_width">Role</td>
                <td>Role Description</td>
                <td>View</td>
                <td>Update</td>
              </tr>
              <tr>
                  <td>Basic Inquiry</td>
                <td>Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info, degree information, programs, honors and awards, service indicators (holds) and previous schools.</td>
                <td class = "right_two_cols"><?php 
    if($student_record_access['basic_inquiry'] == 1){
        echo form_checkbox('basic_inquiry','1',TRUE);
    }else {
        echo form_checkbox('basic_inquiry','1',FALSE);
    } ?></td>
                <td class = "right_two_cols"></td>
              </tr>
            <tr>
                <td>Advanced Inquiry</td>
                <td>Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['advanced_inquiry'] == 1 || $student_record_access['advanced_inquiry'] == 10){
                        echo form_checkbox('advanced_inquiry','1',TRUE);
                    }else {
                        echo form_checkbox('advanced_inquiry','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['advanced_inquiry'] == 01 || $student_record_access['advanced_inquiry'] == 1){
                        echo form_checkbox('advanced_inquiry','1',TRUE);
                    }else {
                        echo form_checkbox('advanced_inquiry','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>3Cs</td>
                    <td>Checklists, Comments, Communications</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['3Cs'] == 1 || $student_record_access['3Cs'] == 10){
                        echo form_checkbox('3Cs','1',TRUE);
                    }else {
                        echo form_checkbox('3Cs','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['3Cs'] == 01 || $student_record_access['3Cs'] == 1){
                        echo form_checkbox('3Cs','1',TRUE);
                    }else {
                        echo form_checkbox('3Cs','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Advisor Update</td>
                    <td>Adding an advisor to a student's record</td>
                <td class = "right_two_cols"></td>
                <td class = "right_two_cols"><?php 
    if($student_record_access['advisor_update'] == 1){
        echo form_checkbox('advisor_update','1',TRUE);
    }else {
        echo form_checkbox('advisor_update','1',FALSE);
    } ?></td>
              </tr>
                <tr>
                <td>Department SOC Update</td>
                    <td>Scheduling courses, assigning faculty to course, generating permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php 
    if($student_record_access['department_SOC_update'] == 1){
        echo form_checkbox('department_SOC_update','1',TRUE);
    }else {
        echo form_checkbox('department_SOC_update','1',FALSE);
    } ?></td>
              </tr>
                <tr>
                <td>Service Indicators (Holds)</td>
                    <td>Administrative users with proper security can assign or remove service indicators from a student's record</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['service_indicators'] == 1 || $student_record_access['service_indicators'] == 10){
                        echo form_checkbox('service_indicators','1',TRUE);
                    }else {
                        echo form_checkbox('service_indicators','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['service_indicators'] == 01 || $student_record_access['service_indicators'] == 1){
                        echo form_checkbox('service_indicators','1',TRUE);
                    }else {
                        echo form_checkbox('service_indicators','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Student Group View</td>
                    <td>View groups a student is associated with</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['student_group_view'] == 1){
                        echo form_checkbox('student_group_view','1',TRUE);
                    }else {
                        echo form_checkbox('student_group_view','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>View Study List</td>
                    <td>View a student's class schedule</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['view_study_list'] == 1){
                        echo form_checkbox('view_study_list','1',TRUE);
                    }else {
                        echo form_checkbox('view_study_list','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Registrar Enrollment</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['registrar_enrollment'] == 1 || $student_record_access['registrar_enrollment'] == 10){
                        echo form_checkbox('registrar_enrollment','1',TRUE);
                    }else {
                        echo form_checkbox('registrar_enrollment','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['registrar_enrollment'] == 01 || $student_record_access['registrar_enrollment'] == 1){
                        echo form_checkbox('registrar_enrollment','1',TRUE);
                    }else {
                        echo form_checkbox('registrar_enrollment','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Advisor Student Center</td>
                    <td>Access to students study list, advisor, program/plan, demographic data, e-mail address</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['advisor_student_center'] == 1){
                        echo form_checkbox('advisor_student_center','1',TRUE);
                    }else {
                        echo form_checkbox('advisor_student_center','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
            <tr>
                <td>Class Permission</td>
                <td>Creating general or student specific class permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['class_permission'] == 1){
                        echo form_checkbox('class_permission','1',TRUE);
                    }else {
                        echo form_checkbox('class_permission','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Class Permission View</td>
                    <td>View class permission numbers which have been created for a course</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['class_permission_view'] == 1){
                        echo form_checkbox('class_permission_view','1',TRUE);
                    }else {
                        echo form_checkbox('class_permission_view','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"></td>
              </tr>
                <tr>
                <td>Class Roster</td>
                    <td>View students enrolled, dropped or withdrawn in a course</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['class_roster'] == 1){
                        echo form_checkbox('class_roster','1',TRUE);
                    }else {
                        echo form_checkbox('class_roster','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Block Enrollments</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['block_enrollment'] == 1 || $student_record_access['block_enrollment'] == 10){
                        echo form_checkbox('block_enrollment','1',TRUE);
                    }else {
                        echo form_checkbox('block_enrollment','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['block_enrollment'] == 01 || $student_record_access['block_enrollment'] == 1){
                        echo form_checkbox('block_enrollment','1',TRUE);
                    }else {
                        echo form_checkbox('block_enrollment','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Report Manager</td>
                    <td>Assists in running various reports</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['report_manager'] == 1){
                        echo form_checkbox('report_manager','1',TRUE);
                    }else {
                        echo form_checkbox('report_manager','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Self Service Advisor</td>
                    <td>View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['self_service_advisor'] == 1){
                        echo form_checkbox('self_service_advisor','1',TRUE);
                    }else {
                        echo form_checkbox('self_service_advisor','1',FALSE);
                    } ?></td>
              </tr>
                <tr>
                <td>Fiscal Officer</td>
                    <td>View enrollment summary, term statistics, and UM term statistics</td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['fiscal_officer'] == 1){
                        echo form_checkbox('fiscal_officer','1',TRUE);
                    }else {
                        echo form_checkbox('fiscal_officer','1',FALSE);
                    } ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Academic Advising Profile</td>
                    <td>Allows printing of the Academic Advising Profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php 
                    if($student_record_access['academic_advising_profile'] == 1){
                        echo form_checkbox('academic_advising_profile','1',TRUE);
                    }else {
                        echo form_checkbox('academic_advising_profile','1',FALSE);
                    } ?></td>
              </tr>

            </tbody>
          </table>



 <?php   
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
                   <h1>financial access</h1>
                <div  >

                      <p>SF General Inquiry: For staff outside of the Cashier's Office<p>
                      <input type="checkbox" name="general_inquiry" value="1" <?php
                             if($financial_access['general_inquiry'] == 1){ ?>
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
                             if($financial_access['cash_group_post'] == 1 || $financial_access['cash_group_post'] == 01){ ?>
                             checked
                             <?php }else{ ?>
                                
                             <?php } ?>>Update
                      <hr>

                    </div>

            </div>
    
<?php }

if($financial_aid_access != array()){ ?>
  
    <div id = "form5">
        <h1>financial aid access</h1>
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
        <h1>reserved access</h1>
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
                                <td class = "right_two_cols"><?php if($reserved_access['immunization_view'] == 0 || $reserved_access['immunization_view'] == 0){
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
if($reserved_access['transfer_credit_admission'] == 0 || $reserved_access['transfer_credit_admission'] == 01){
echo form_checkbox('transfer_credit_admission[]','1',FALSE); 
}else{
   echo form_checkbox('transfer_credit_admission[]','1',TRUE); 
 
} 
                                    ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['transfer_credit_admission'] == 10 || $reserved_access['transfer_credit_admission'] == 0){
    echo form_checkbox('transfer_credit_admission[]','0',FALSE);
}else{
        echo form_checkbox('transfer_credit_admission[]','0',TRUE);

}
                                    ?></td>

                                                    <td>Support Staff (Registrar's Office)</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['support_staff'] == 01 || $reserved_access['support_staff'] == 0){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['support_staff'] == 0 || $reserved_access['support_staff'] == 10){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                            </tr>
                                <tr>
                                <td>Relationships</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['relationships'] == 01 || $reserved_access['relationships'] == 0){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['relationships'] == 0 || $reserved_access['relationships'] == 10){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>



                                       <td>Advance Standing Report</td>

                                <td class = "right_two_cols"><?php
if($reserved_access['advance_standing_report'] == 01 || $reserved_access['advance_standing_report'] == 0){
echo form_checkbox('support_staff[]','1',FALSE); 
}else{
echo form_checkbox('support_staff[]','1',TRUE); 
                             
} ?></td>
                                <td class = "right_two_cols"><?php
if($reserved_access['advance_standing_report'] == 01 || $reserved_access['advance_standing_report'] == 0){
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