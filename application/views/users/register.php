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

<body>
    <form name="Register" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- <input type="hidden" name="action" value="register"> -->
        <p class="register"> Register </p>
        <div class="login1">
            <div>
                <label for="pawprint">pawprint:</label>
                <input type="text" name="pawprint" id="pawprint" value="" required>
            </div>
            <div>
                <label for="usernamereg">USER NAME:</label>
                <input type="text" name="username" id="usernamereg" value="" required>
            </div>
            <div>
                <label for="passwordreg">PASSWORD:</label>
                <input type="password" name="password" id="passwordreg" required>
            </div>
            <div>
                <label for="repasswordreg">retype PASSWORD:</label>
                <input type="password" name="password_retype" id="repasswordreg" required>
            </div>
            <div>
                <label for="empiid">empiid:</label>
                <input type="text" name="empiid" id="empiid" value="" required>
            </div>
            <div>
                <label for="title">title:</label>
                <input type="text" name="title" id="title" value="" required>
            </div>
            <div>
                <label for="organization">organization:</label>
                <input type="text" name="organization" id="organization" value="" required>
            </div>
            <div>
                <label for="address">address:</label>
                <input type="text" name="address" id="address" value="" required>
            </div>
            <div>
                <label for="phone_num">phone number:</label>
                <input type="text" name="phone_num" id="phone_num" value="" required>
            </div>
        </div>
        <button class="button" type="submit" >Register</button>
    </form>
    <p><?php echo isset($format_error) ? "format error: " . $format_error : ""; ?></p>
    <p><?php echo isset($db_error) ? "db error: " . $db_error . " or the account has existed." : ""; ?></p>
    <div>
        <p>already got an account?</p>
        <p>goes here <a href="<?php echo base_url() ?>index.php/users/login">login</a></p>
    </div>
</body>
<!--
</html> -->
