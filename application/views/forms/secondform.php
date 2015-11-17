<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css?v=1">
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
   <div class="formcontainer">
          <?php  echo form_open('');  ?>
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
                <td class = "right_two_cols"><?php echo form_checkbox('1view','1',FALSE); ?></td>
                <td class = "right_two_cols"></td>
              </tr>
            <tr>
                <td>Advanced Inquiry</td>
                <td>Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups</td>
                <td class = "right_two_cols"><?php echo form_checkbox('2view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('2edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>3Cs</td>
                    <td>Checklists, Comments, Communications</td>
                <td class = "right_two_cols"><?php echo form_checkbox('3view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('3edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Advisor Update</td>
                    <td>Adding an advisor to a student's record</td>
                <td class = "right_two_cols"></td>
                <td class = "right_two_cols"><?php echo form_checkbox('4edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Department SOC Update</td>
                    <td>Scheduling courses, assigning faculty to course, generating permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('5edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Service Indicators (Holds)</td>
                    <td>Administrative users with proper security can assign or remove service indicators from a student's record</td>
                <td class = "right_two_cols"><?php echo form_checkbox('6view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('6edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Student Group View</td>
                    <td>View groups a student is associated with</td>
                <td class = "right_two_cols"><?php echo form_checkbox('7view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>View Study List</td>
                    <td>View a student's class schedule</td>
                <td class = "right_two_cols"><?php echo form_checkbox('8view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Registrar Enrollment</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php echo form_checkbox('9view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('9edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Advisor Student Center</td>
                    <td>Access to students study list, advisor, program/plan, demographic data, e-mail address</td>
                <td class = "right_two_cols"><?php echo form_checkbox('10view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
            <tr>
                <td>Class Permission</td>
                <td>Creating general or student specific class permission numbers</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('11edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Class Permission View</td>
                    <td>View class permission numbers which have been created for a course</td>
                <td class = "right_two_cols"><?php echo form_checkbox('12view','1',FALSE); ?></td>
                <td class = "right_two_cols"></td>
              </tr>
                <tr>
                <td>Class Roster</td>
                    <td>View students enrolled, dropped or withdrawn in a course</td>
                <td class = "right_two_cols"><?php echo form_checkbox('13view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Block Enrollments</td>
                    <td>Adding and dropping a course utilizing Enrollment Request</td>
                <td class = "right_two_cols"><?php echo form_checkbox('14view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('14edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Report Manager</td>
                    <td>Assists in running various reports</td>
                <td class = "right_two_cols"><?php echo form_checkbox('15view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Self Service Advisor</td>
                    <td>View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('16edit','1',FALSE); ?></td>
              </tr>
                <tr>
                <td>Fiscal Officer</td>
                    <td>View enrollment summary, term statistics, and UM term statistics</td>
                <td class = "right_two_cols"><?php echo form_checkbox('17view','1',FALSE); ?></td>
                <td class = "right_two_cols"> </td>
              </tr>
                <tr>
                <td>Academic Advising Profile</td>
                    <td>Allows printing of the Academic Advising Profile</td>
                <td class = "right_two_cols"> </td>
                <td class = "right_two_cols"><?php echo form_checkbox('18edit','1',FALSE); ?></td>
              </tr>

            </tbody>
          </table>

   <?php  echo form_close(); ?>
        </div>
      </div>
