<!DOCTYPE html>
<html>
<head>
<title>Tech Page</title>
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
      <form class="AddAdmin" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
        <h1>Add Administration</h1>
          <div>
              <label for="username">Username:</label>
              <input type="text" name="username" id="username" placeholder="Enter Username">
          </div>
          <div>
              <label for="empid">Employee ID:</label>
              <input type="text" name="empiid" id="empid" placeholder="Enter ID">
          </div>
          <div>
              <label for="title">Title:</label>
              <input type="text" name="title" id="title" placeholder="Enter Title">
          </div>
            <div>
              <label for="organization">Organization:</label>
              <input type="text" name="organization" id="organization" placeholder="Enter Organization">
            </div>
            <div>
              <label for="pawprint">pawprint:</label>
              <input type="text" name="pawprint" id="pawprint" placeholder="Enter pawprint">
            </div>
            <div>
              <label for="address">Address:</label>
              <input type="text" name="address" id="address" placeholder="Enter address">
            </div>
            <div>
              <label for="phone_num">Phone Number:</label>
              <input type="text" name="phone_num" id="phone_num" placeholder="XXX-XXX-XXXX">
            </div>
            <input class="SubmitButton" type="submit" ></input>
      </form>

    </div>

    <p><?php if(isset($format_error)) echo "!@3"; ?></p>
    <button class="logoutButton" type="submit" name="submit" >Log Out</button>
    <a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a>
</body>
</html>
