<!DOCTYPE html>
<html>
<head>
    <title>Administration Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style>
     
       
   </style>
</head>
<body>
    <h1>admin home page</h1>
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
                        echo "<tr><td>" . $form->pawprint . "</td><td>" . ($form->approved == 0 ? "<a href='" . base_url() . "index.php/forms/f/" . $form->form_id . "'>" .  $form->form_id . "</a>" : $form->form_id) . "</td><td>" . ($form->approved == 0 ? "pendding" : "approved") . "</td><td>" . $form->create_date . "</td><td>" . ($form->approved == 0 ? "<a href='" . base_url() . "index.php/forms/approve/" . $form->form_id . "'>APPROVE</a>" : "APPROVE") . "</td></tr>";
                    }
                ?>
            </tbody>
          </table>
    </div>


    <a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a>
</body>
</html>
