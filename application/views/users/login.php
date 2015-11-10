

<!-- <html>
<head>
    <title>Login Page</title>
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


<!--     </style> -->
<body>


  <form name="login" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="do_login">
                <p class="login"> LOGIN </p>
                <div class="login1">
                    <div>

                        <label for="pawprint">pawprint:</label>
                        <input type="text" name="pawprint" id="pawprint" value="" required>
                    </div>
                    <div>
                        <label for="password">password:</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label>employee</label>
                        <input type="radio" name="usertype" checked="checked">
                        <label>admin</label>
                        <input type="radio" name="usertype">
                        <label>tech</label>
                        <input type="radio" name="usertype">
                    </div>
                </div>

                <button class="button" type="submit" name="submit" >SUBMIT</button>
    </form>
    <div>
        <p>dont have an acount?</p>
        <p>employees go to <a href="<?php echo base_url() ?>index.php/users/register">register page</a></p>
        <p>admins go asking tech people</p>
    </div>

</body>
<!-- </html>  -->
