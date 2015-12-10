<!-- <!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head> -->
<!--<style>
        body{
            text-align: center;
            background-color: white;
        }
        .login1{
            background-color: lightgray;
            width: 50%;
            margin: 0 auto;
            align-items: center;
            border: 3px solid #FFCC33;
            color: black;
            border-radius: 25px;
        }
        .Header{
            background-color: #303030;
            color: #FFCC33;
            text-align: center;
            padding: 50px;
            font-size: 40;

        }

        .button{
            background-color: gainsboro;
            border-radius: 25%;
            border-color: aliceblue;

        }
        .header2{
            font-size: 26;
        }-->
<!-- </style> -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
<body>
  <div class="formcontainer">
  <div class="alignment">
  <div class="smallheader">
    <h1> Register </h1>
    <hr>

    <form name="Register" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- <input type="hidden" name="action" value="register"> -->
        <div class="login1">
          <div class="pure-g">
            <div class="pure-u-1-3">
                <label for="pawprint">Pawprint</label>
                <input class="pure-u-23-24" type="text" name="pawprint" id="pawprint" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="usernamereg">Username</label>
                <input class="pure-u-23-24" type="text" name="username" id="usernamereg" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="passwordreg">Password</label>
                <input class="pure-u-23-24" type="password" name="password" id="passwordreg" required>
            </div>
            <div class="pure-u-1-3">
                <label for="repasswordreg">Retype Password</label>
                <input class="pure-u-23-24" type="password" name="password_retype" id="repasswordreg" required>
            </div>
            <div class="pure-u-1-3">
                <label for="empiid">Employee ID</label>
                <input class="pure-u-23-24" type="text" name="empiid" id="empiid" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="title">Title</label>
                <input class="pure-u-23-24" type="text" name="title" id="title" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="organization">Organization</label>
                <input class="pure-u-23-24" type="text" name="organization" id="organization" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="address">Address</label>
                <input class="pure-u-23-24"  type="text" name="address" id="address" value="" required>
            </div>
            <div class="pure-u-1-3">
                <label for="phone_num">Phone Number</label>
                <input class="pure-u-23-24" type="text" name="phone_num" id="phone_num" value="" required>
            </div>
        </div>
        <button id="registerbutton" class="pure-button pure-button-primary" type="submit" >Register</button>
    </form>
    <p><?php if(isset($format_error)) {
                if($format_error == "phone_num"){
                    echo "Phone Number Format Wrong";
                }
                if($format_error == "empiid"){
                    echo "Emp id wrong";
                    
                }
            } ?></p>
    <p><?php echo isset($db_error) ? "Account has already existed." : ""; ?></p>
    <div>
        <p >Already have an account? <a style = "color:blue;" href="<?php echo base_url() ?>index.php/users/login">Login</a> or <a style = "color:blue;" href="<?php echo base_url() ?>index.php/users/login">back</a></p>
    </div>
  </div>
</div>
</body>
<!--
</html> -->
