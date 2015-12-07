<!DOCTYPE html>
<html>
<head>
<title>Tech Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="formcontainer">
        <div class="alignment">

        <div class="smallheader">
          <h2>Add Administration</h2>
        </div>
        <hr>
      <form class="pure-form pure-form-stacked" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">

        <div class="pure-g">
        <div class="pure-u-1-3">

              <label for="username">Username:</label>
              <input class="pure-u-23-24"  type="text" name="username" id="username" placeholder="Enter Username">
          </div>
          <div class="pure-u-1-3">

              <label for="empid">Employee ID:</label>
              <input class="pure-u-23-24"  type="text" name="empiid" id="empid" placeholder="Enter ID">
          </div>
          <div class="pure-u-1-3">

              <label for="title">Title:</label>
              <input class="pure-u-23-24"  type="text" name="title" id="title" placeholder="Enter Title">
          </div>
          <div class="pure-u-1-3">

              <label for="organization">Organization:</label>
              <input class="pure-u-23-24"  type="text" name="organization" id="organization" placeholder="Enter Organization">
            </div>
            <div class="pure-u-1-3">

              <label for="pawprint">pawprint:</label>
              <input class="pure-u-23-24"  type="text" name="pawprint" id="pawprint" placeholder="Enter pawprint">
            </div>
            <div class="pure-u-1-3">

              <label for="address">Address:</label>
              <input class="pure-u-23-24"  type="text" name="address" id="address" placeholder="Enter address">
            </div>
            <div class="pure-u-1-3">

              <label for="phone_num">Phone Number:</label>
              <input class="pure-u-23-24"  type="text" name="phone_num" id="phone_num" placeholder="XXX-XXX-XXXX">
            </div>
          </div>
            <input id="tech" class="pure-button pure-button-primary" type="submit"></input>
      </form>
    </div>
    </div>

      <p><?php if(isset($format_error)) echo "!@3"; ?></p>
      <div class="center">
      <button class="Submit" type="submit" name="submit"><a href="<?php echo base_url(); ?>index.php/users/logout">Log Out</a></button>

  </div>


</body>
</html>
