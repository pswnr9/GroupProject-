<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
  <div class="dropdown">
    <a href="<?php echo base_url(); ?>index.php/forms/f/1"><!-- <button class="Submit" type="button" data-toggle="dropdown"> -->Fill out MyZou Sequrit Request Form
    <!-- </button> --></a>
</div>
        <div class="LogInContainer">
      <button class="Submit" type="button" data-toggle="dropdown">View Submitted Form
    </button>
        </div>

    <button class="logoutButton" type="submit" name="submit"><a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a></button>
</body>
</html>
