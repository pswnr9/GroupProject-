

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
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


    </style>
<body>


  <form name="Register" action="register.php" method="POST">
                <input type="hidden" name="action" value="register">
                <p class="register"> Register </p>
                <div class="login1">
                    <p>

                        <label for="usernamereg">USER NAME:</label>
                        <input type="text" name="usernamereg" id="usernamereg" value="">
                    </p>
                    <p>
                        <label for="passwordreg">PASSWORD:</label>
                        <input type="password" name="passwordreg" id="passwordreg">
                    </p>
                </div>
                   <p>
                    <button class="button" type="submit" name="register" >Register</button>
                    </p>

    </form>

</body>
</html>
