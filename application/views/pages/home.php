

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
  

  <form name="Login" action="login.php" method="POST">
                <input type="hidden" name="action" value="do_login">
                <p class="login"> LOGIN </p>
                <div class="login1">
                    <p>

                        <label for="username">USER NAME:</label>
                        <input type="text" name="username" id="username" value="">
                    </p>
                    <p>
                        <label for="password">PASSWORD:</label>
                        <input type="password" name="password" id="password">
                    </p>
                </div>
                   <p>
                    <button class="button" type="submit" name="submit" >SUBMIT</button>
                    </p>

    </form>

</body>
</html>
