<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SWE Group Project</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
  <script src="<?php echo base_url(); ?>assets/javascripts/main.js"></script>
  <style type="text/css">
    input[type="radio"] {
        display: inline-block;
        width: 20px;
        height: auto;
        margin-left: 10px;

    }

    .TextBoxContainer span {
        margin-left: 30px;
        font-family: "roboto condensed", sans-serif;
    }

    input[type="submit"] {
        cursor: pointer;
    }

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
    <div class="ContentContainer">
        <form class="LogInContainer" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <h1 class="LogInHeading">Login</h1>
            <div class="TextBoxContainer">
                <div class="TextBoxLabel">
                  PawPrint
                </div>
                <input type="text" name="pawprint" class="Input" required>
            </div>
            <div class="TextBoxContainer">
                <div class="TextBoxLabel">
                    Password
                </div>
                <input type="password" name="password" class="Input" required>
            </div>
             <div class="TextBoxContainer">
                <div class="TextBoxLabel">
                    type
                </div>
                <span>employee</span><input type="radio" name="user_type" class="Input" checked="checked" value="employee">
                <span>admin</span><input type="radio" name="user_type" class="Input" value="admin">
                <span>tech</span><input type="radio" name="user_type" class="Input" value="tech">
            </div>
            <input type="submit" value="Submit" class="Submit">
        </form>
    </div>
</body>
</html>
