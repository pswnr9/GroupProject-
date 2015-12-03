<html>
<head>
<title>Security Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<style>
  /*form {
    background-color: white;
    border-style: solid;
  }

  #Smallheader {
    text-align: center;
  }*/

</style>


</head>
<body>
  <div class="formcontainer">
  <div class="alignment">
  <div class="smallheader">
  <h2>myZou Security Request Form</h2>
  <h2>University of Missouri-Columbia</h2>

  <hr>

  <h3>Instead of sending request directly to Student Information Systems 130 Jesse Hall, simply submit this form.</h3>
  <hr>
  </div>

 <div>
  <form name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="pure-form pure-form-stacked">




        <h3>Enter your information</h3>
    <div>
        <div id="Security">
        <div class="pure-g">

        <div class="pure-u-1-3">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="pure-u-23-24" value="<?php echo isset($username) ? $username : ""; ?>">
        </div>

          <div class="pure-u-1-3">
          <label for="title">Title</title>
          <input type="text" name="title"  id="title" class="pure-u-23-24" value="<?php echo isset($title) ? $title : ""; ?>">
        </div>

        <div class="pure-u-1-3">
          <label for="department">Department</label>
          <input type="text" name="organization" id="department" class="pure-u-23-24" value="<?php echo isset($organization) ? $organization : ""; ?>">
        </div>

        <div class="pure-u-1-3">
          <label for="pawprint">Pawprint</label>
          <input type="text" name="pawprint" id="pawprint"  class="pure-u-23-24" value="<?php echo $_SESSION['pawprint']; ?>" disabled  >
        </div>

          <div class="pure-u-1-3">
          <label for="emplid">EmplID</label>
          <input type="number" name="empiid" id="emplid" class="pure-u-23-24" value="<?php echo isset($empiid) ? $empiid : ""; ?>">
        </div>

          <div class="pure-u-1-3">
          <label for="campus">Campus Address</label>
          <input type="text" name="address" id="campus"  class="pure-u-23-24" value="<?php echo isset($address) ? $address : ""; ?>">
        </div>


          <div class="pure-u-1-3">
          <label for="number">Phone Number</label>
          <input type="text" name="phone_num" id="number" class="pure-u-23-24" value="<?php echo isset($phone_num) ? $phone_num : ""; ?>">
        </div>
        </div>
          <hr>

          <h3>Security Information</h3>
          <label for="new" class="pure-checkbox">
          <input id="new" type="radio" name="request_status" value="1" checked="checked"> New Request
          <input id="additional" type="radio" name="request_status" value="0"> Additional Request
        </label>



        <label id="studentworker" for="remember" class="pure-checkbox">
          <input id="studentworker" type="checkbox" name="student_worker" value="student worker"> Student Worker
        </label>

          <h4>Copy Security of a Staff Member (Choose Current or Former)</h4>
          <div class="pure-u-1-3">
          <label for="current" class="pure-checkbox">
          <input id="current" type="radio" name="if_cur_staff" value="2"> Current
          <input id="former" type="radio" name="if_cur_staff" value="1"> Former
          <input id="none_staff" type="radio" name="if_cur_staff" value="0" checked="checked"> None
          </label>
        </div>


          <br>


           <div class="pure-u-1-3">
          <label for="name">Name:</label>
          <input type="text" name="ref_name" id="name" class="pure-u-23-24" value="N/A">
        </div>

          <div class="pure-u-1-3">
          <label for="position">Position:</label>
          <input type="text" name="ref_pos" id="position" class="pure-u-23-24" value="N/A">
        </div>

          <div class="pure-u-1-3">
          <label for="sso">SSO/Pawprint:</label>
          <input type="text" name="ref_pawprint" id="sso" class="pure-u-23-24" value="N/A">
        </div>

          <div class="pure-u-1-3">
          <label for="emplid2">EmplID:</label>
          <input type="number" name="ref_empiid" id="emplid2" class="pure-u-23-24" value="0000">
        </div>
          <hr>

          <h3>FERPA Score</h3>
          <p>A passing score of 85% on theFERPA Quiz is required before access to student data is approved. To request
            access to the FERPA tutorial and access the FERPA quiz can be done at http://myzoutraining.missouri.edu/ferpareq.php.
          </p>
          <div class="pure-u-1-3">
          <label for="ferpa">Ferpa Score:</label>
          <input type="number" name="ferpa_score" id="ferpa" class="pure-u-23-24" max="100" min="85">
        </div>
          <hr>

          <h3>Select the Academic Career(s). Please check all that apply.</h3>
        <label for="ugrd" class="pure-checkbox">
          <input id="ugrd" type="checkbox" name="ac[]" value="4"> UGRD
        </label>
        <label for="grad" class="pure-checkbox">
          <input id="grad" type="checkbox" name="ac[]" value="3"> GRAD
        </label>
        <label for="med" class="pure-checkbox">
          <input id="med" type="checkbox" name="ac[]" value="2"> MED
        </label>
        <label for="vetmed" class="pure-checkbox">
          <input id="vetmed" type="checkbox" name="ac[]" value="1"> VET MED
        </label>
        <label for="law" class="pure-checkbox">
          <input id="law" type="checkbox" name="ac[]" value="0"> LAW
        </label>
          <br>
          <hr>

          <h3>Which type of access do you need?</h3>
        <label for="access_type2" class="pure-checkbox">
          <input type="checkbox" name="access_type2" id = "access_type2" value="2"> Student Records
        </label>
        <label for="access_type3" class="pure-checkbox">
          <input type="checkbox" name="access_type3"  id = "access_type3" value="3"> Admissions
        </label>
        <label for="access_type4" class="pure-checkbox">
          <input type="checkbox" name="access_type4" id = "access_type4"  value="4"> Student Financials
        </label>
        <label for="access_type5" class="pure-checkbox">
          <input type="checkbox" name="access_type5" id = "access_type5"  value="5"> Student Financial Aid
        </label>
        <label for="access_type6" class="pure-checkbox">
          <input type="checkbox" name="access_type6"  id = "access_type6" value="6"> Reserved Access
        </label>
          <hr>


        <button class="button pure-button pure-button-primary" type="button" name="button" onclick = "get();">Get Forms</button>
        </div>


            <div id = "form2">
                <hr><hr><hr><hr><hr><hr>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


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
                <td class = "right_two_cols"><?php echo form_checkbox('basic_inquiry','1',FALSE); ?></td>
                <td class = "right_two_cols"></td>
              </tr>
            <tr>
                <td>Advanced Inquiry</td>
                <td>Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups</td>
                <td class = "right_two_cols"><?php echo form_checkbox('advanced_inquiry[]','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('advanced_inquiry[]','0',FALSE); ?></td>
              </tr>
                <tr>
                <td>3Cs</td>
                    <td>Checklists, Comments, Communications</td>
                <td class = "right_two_cols"><?php echo form_checkbox('3Cs[]','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('3Cs[]','0',FALSE); ?></td>
              </tr>
                <tr>
                <td>Advisor Update</td>
                    <td>Adding an advisor to a student's record</td>
                <td class = "right_two_cols"></td>
                <td class = "right_two_cols"><?php echo form_checkbox('advisor_update','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Department SOC Update</td>
                    <td>Scheduling courses, assigning faculty to course, generating permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('department_SOC_update','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Service Indicators (Holds)</td>
                    <td>Administrative users with proper security can assign or remove service indicators from a student's record</td>
                <td class = "right_two_cols"><?php echo form_checkbox('service_indicators[]','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('service_indicators[]','0',FALSE); ?></td>
              </tr>
                <tr>
                <td>Student Group View</td>
                    <td>View groups a student is associated with</td>
                <td class = "right_two_cols"><?php echo form_checkbox('student_group_view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>View Study List</td>
                    <td>View a student's class schedule</td>
                <td class = "right_two_cols"><?php echo form_checkbox('view_study_list','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Registrar Enrollment</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php echo form_checkbox('registrar_enrollment[]','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('registrar_enrollment[]','0',FALSE); ?></td>
              </tr>
                <tr>
                <td>Advisor Student Center</td>
                    <td>Access to students study list, advisor, program/plan, demographic data, e-mail address</td>
                <td class = "right_two_cols"><?php echo form_checkbox('advisor_student_center ','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
            <tr>
                <td>Class Permission</td>
                <td>Creating general or student specific class permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('class_permission','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Class Permission View</td>
                    <td>View class permission numbers which have been created for a course</td>
                <td class = "right_two_cols"><?php echo form_checkbox('class_permission_view','1',FALSE); ?></td>
                <td class = "right_two_cols"></td>
              </tr>
                <tr>
                <td>Class Roster</td>
                    <td>View students enrolled, dropped or withdrawn in a course</td>
                <td class = "right_two_cols"><?php echo form_checkbox('class_roster','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Block Enrollments</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php echo form_checkbox('block_enrollment[]','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('block_enrollment[]','0',FALSE); ?></td>
              </tr>
                <tr>
                <td>Report Manager</td>
                    <td>Assists in running various reports</td>
                <td class = "right_two_cols"><?php echo form_checkbox('report_manager','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Self Service Advisor</td>
                    <td>View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('self_service_advisor','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Fiscal Officer</td>
                    <td>View enrollment summary, term statistics, and UM term statistics</td>
                <td class = "right_two_cols"><?php echo form_checkbox('fiscal_officer','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Academic Advising Profile</td>
                    <td>Allows printing of the Academic Advising Profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('academic_advising_profile','1',FALSE); ?></td>
              </tr>

            </tbody>
          </table>

        </div>

            </div>
            <!-- end of form2 -->
            <div id = "form3">
              <div class='smallheader'>
              <hr>
              <h1>Admissions Access</h1>
              <hr>
            </div>

                  <h3>Select the Academic Career(s). Please check all that apply.</h3>
                  <hr>
                      <input type="checkbox" name="all" value="all">Access to ALL test scores
                      <br>
                      <input type="checkbox" name="act" value="1">ACT
                      <input type="checkbox" name="sat" value="1">SAT
                      <input type="checkbox" name="gre" value="1">GRE
                      <input type="checkbox" name="gmat" value="1">GMAT
                      <input type="checkbox" name="tofel" value="1">TOFEL
                      <input type="checkbox" name="lelts" value="1">IELTZ
                      <input type="checkbox" name="lsat" value="1">LSAT
                      <input type="checkbox" name="mcat" value="1">MCAT
                      <input type="checkbox" name="ap" value="1">AP
                      <input type="checkbox" name="clep" value="1">CLEP
                      <input type="checkbox" name="ged" value="1">GED
                      <input type="checkbox" name="millers" value="1">MILLERS
                      <input type="checkbox" name="prax" value="1">PRAX
                      <input type="checkbox" name="pla-mu" value="1">PLA-MU
                      <input type="checkbox" name="base" value="1">BASE
                      <br>
                      <hr>

            </div>
            <div id = "form4">
                <div  >

                      <p>SF General Inquiry: For staff outside of the Cashier's Office<p>
                      <input type="checkbox" name="general_inquiry" value="1">View
                      <br>
                      <p>SF Cash Group Post: Also known as Cost Centers
                      <input type="checkbox" name="cash_group_post[]" value="1">View
                      <input type="checkbox" name="cash_group_post[]" value="0">Update
                      <hr>

                    </div>

            </div>
            <div id = "form5">
                <div>

                      <p>FA Cash: View a student's fincancial aid awards and budget<p>
                      <input type="checkbox" name="fa_cash" value="1">View
                      <br>
                      <p>FA Non Financial Aid Staff: Also known as Cost Centers
                      <input type="checkbox" name="fa_non_financial_aid_stuff" value="1">View
                      <hr>

                    </div>


            </div>
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

                                <td class = "right_two_cols"><?php echo form_checkbox('immunization_view[]','1',FALSE); ?></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('immunization_view[]','0',FALSE); ?></td>

                                                <td>Accommodate (Student Health)</td>

                                <td class = "right_two_cols"></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('accommodate','1',FALSE); ?></td>
                            </tr>
                                <tr>
                                <td>Transfer Credit Admission</td>

                                <td class = "right_two_cols"><?php echo form_checkbox('transfer_credit_admission[]','1',FALSE); ?></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('transfer_credit_admission[]','0',FALSE); ?></td>

                                                    <td>Support Staff (Registrar's Office)</td>

                                <td class = "right_two_cols"><?php echo form_checkbox('support_staff[]','1',FALSE); ?></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('support_staff[]','0',FALSE); ?></td>
                            </tr>
                                <tr>
                                <td>Relationships</td>

                                <td class = "right_two_cols"><?php echo form_checkbox('relationships[]','1',FALSE); ?></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('relationships[]','0',FALSE); ?></td>



                                                    <td>Advance Standing Report</td>

                                <td class = "right_two_cols"><?php echo form_checkbox('advance_standing_report[]','1',FALSE); ?></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('advance_standing_report[]','0',FALSE); ?></td>
                            </tr>
                                <tr>
                                <td>Student Groups</td>

                                <td class = "right_two_cols"></td>
                                <td class = "right_two_cols"><?php echo form_checkbox('student_groups','1',FALSE); ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </tr>






                            </tbody>
                          </table>
            </div>
            <!-- end of form 6-->
            <input type="hidden" name = "access2" id = "access2" value = "">

                        <input type="hidden" name = "access3" id = "access3" value = "">

                        <input type="hidden" name = "access4" id = "access4" value = "">

                        <input type="hidden" name = "access5" id = "access5" value = "">

                        <input type="hidden" name = "access6" id = "access6" value = "">
            <hr>
            <input id="clean" class="pure-button pure-button-primary" type="submit" value="Submit">

</div>


  </form>
</div>
</div>
</div>
<div class="err-msg" style="text-align: center;">e: <?php if(isset($format_error)) echo "format not correct " . $format_error; ?></div>

          <script>
            document.getElementById("form2").style.display = "none";
        document.getElementById("form3").style.display = "none";
        document.getElementById("form4").style.display = "none";
        document.getElementById("form5").style.display = "none";
        document.getElementById("form6").style.display = "none";
              function get(){
                  if(document.getElementById('access_type2').checked){
                      document.getElementById("form2").style.display = "";
                      $("#form2").val("2");
                  }
                  if(document.getElementById('access_type3').checked){
                      document.getElementById("form3").style.display = "";
                      $("#form3").val("3");
                  }
                  if(document.getElementById('access_type4').checked){
                      document.getElementById("form4").style.display = "";
                      $("#form4").val("4");
                  }
                  if(document.getElementById('access_type5').checked){
                      document.getElementById("form5").style.display = "";
                      $("#form5").val("5");
                  }
                  if(document.getElementById('access_type6').checked){
                      document.getElementById("form6").style.display = "";
                      $("#form6").val("6");
                  }


              }

              $(document).ready(function() {
                $("#form3 input[name='all']").click( function(){
                   if( $(this).is(':checked') )  {
                      $("#form3 input[type='checkbox']").prop('checked', 'true');
                   } else {
                      $("#form3 input").each(function() {
                        $(this).prop("checked", false);
                      });
                   }
                });
              });


</script>
</body>
</html>
