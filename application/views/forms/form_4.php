<html>
<head>
<title>Security Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


  <h1>Student Financials Access</h1>


  <a href="#menu" id="menuLink" class="menu-link">
      <!-- Hamburger icon -->
      <span></span>
  </a>

  <form name="form" action="form.php" method="POST">
    <div id="Security">

      <p>SF General Inquiry: For staff outside of the Cashier's Office<p>
      <input type="checkbox" name="viewgen" value="viewgen">View
      <br>
      <p>SF Cash Group Post: Also known as Cost Centers
      <input type="checkbox" name="viewcash" value="viewcash">View
      <input type="checkbox" name="updatecash" value="updatecash">Update
      <hr>

      <button class="button" type="submit" name="submit" >Submit</button>
    </div>


  </form>

</body>
</html>
