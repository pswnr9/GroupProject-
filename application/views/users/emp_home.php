<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">

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
    <div class="LogInContainer">
    <button class="Submit" type="submit"><a href="<?php echo base_url(); ?>index.php/forms/g"><!-- <button class="Submit" type="button" data-toggle="dropdown"> -->MyZou Security Request Form
    <!-- </button> --></a></button>


<button class="Submit" type="submit"><a href="<?php echo base_url(); ?>index.php/forms/view_submitted_forms">View Approved Form</a>
<button class="Submit" type="submit"><a href="<?php echo base_url(); ?>index.php/forms/view_denied_forms">View Pending Form(Most Recent)</a>

<button class="Submit" type="submit"><a href="">Conduct Coordinator</a>
<button class="Submit" type="submit"><a href="">MU Connect</a>
<button class="Submit" type="submit"><a href="">OrgSync</a>
<button class="Submit" type="submit"><a href="">Instructor Course Evaluations</a>

<button class="Submit" type="submit" name="submit"><a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a></button>
</div>
</body>
</html>
