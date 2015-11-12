

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <style>
            .table-width{
                width:70%;
            }
	    .first_col_width{
          	}
            .right_two_cols{
                text-align: center;
                width: 8%;
            }
        </style>
 <div class="container table-width">
          <?php  echo form_open('');  ?>
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
              
                <td class = "right_two_cols"><?php echo form_checkbox('Immunization_view_view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Immunization_view_edit','1',FALSE); ?></td>
                
                                <td>Accommodate (Student Health)</td>
              
                <td class = "right_two_cols"></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Accommodate_edit','1',FALSE); ?></td>
            </tr>
                <tr>
                <td>Transfer Credit Admission</td>
              
                <td class = "right_two_cols"><?php echo form_checkbox('Transfer_Credit_Admission_view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Transfer_Credit_Admission_edit','1',FALSE); ?></td>
                    
                                    <td>Support Staff (Registrar's Office)</td>
              
                <td class = "right_two_cols"><?php echo form_checkbox('Support_Staff_view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Support_Staff_edit','1',FALSE); ?></td>
            </tr>
                <tr>
                <td>Relationships</td>
              
                <td class = "right_two_cols"><?php echo form_checkbox('Relationships_view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Relationships_edit','1',FALSE); ?></td>
                    
                    
                    
                                    <td>Advance Standing Report</td>
              
                <td class = "right_two_cols"><?php echo form_checkbox('Advance_Standing_Report_view','1',FALSE); ?></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Advance_Standing_Report_edit','1',FALSE); ?></td>
            </tr>
                <tr>
                <td>Student Groups</td>
              
                <td class = "right_two_cols"></td>
                <td class = "right_two_cols"><?php echo form_checkbox('Student_Groups_edit','1',FALSE); ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>

 


                
                
            </tbody>
          </table>

   <?php  echo form_close(); ?>
        </div>
