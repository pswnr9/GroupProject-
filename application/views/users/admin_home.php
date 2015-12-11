<!DOCTYPE html>
<html>
<head>
    <title>Administration Page </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style>


   </style>
</head>
<body>
  <div class="header">
         <div class="LeftLogoContainer">
             <div class="Logo"></div>
         </div>
         <div class="TigerPic"></div>
         <div class="MainHeading">University of Missouri -            Columbia
         </div>
     </div>

     <div class="formcontainer">
     <div class="alignment">
      <div class="smallheader">
    <h1>Admin Home Page</h1>
  </div>
  <hr>
    <div class="container">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Pawprint</th>
                <th>Form ID</th>
                <th>Approved</th>
                <th>Created Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($pending_forms as $form) {
                        echo "<tr><td>" . $form->pawprint . "</td><td>" . ($form->approved == 0 ? "<a href='" . base_url() . "index.php/forms/f/" . $form->form_id . "'>" .  $form->form_id . "</a>" : $form->form_id) . "</td><td>" . ($form->approved == 0 ? "pending" : "approved") . "</td><td>" . $form->create_date . "</td><td>" . ($form->approved == 0 ? "<a href='" . base_url() . "index.php/forms/approve/" . $form->form_id . "'>APPROVE</a>" : "APPROVE") ."</td><td>" . ($form->approved == 0 ? "<a href='" . base_url() . "index.php/forms/deny/" . $form->form_id . "'>DENY</a>" : "DENY") . "</td><td><a href='" . base_url() . "index.php/forms/downloadPDF/" . $form->form_id . "'>View</a>" . "</td></tr>";
                    }
                ?>
            </tbody>
          </table>
    </div>
  </div>
</div>

<div class="center">
<button class="Submit" type="submit" name="submit"><a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a></button>
</div>
</body>
</html>
