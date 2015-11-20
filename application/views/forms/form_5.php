<html>
<head>
<title>Security Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


  <h1>Student Financial Aid Access</h1>


  <a href="#menu" id="menuLink" class="menu-link">
      <!-- Hamburger icon -->
      <span></span>
  </a>

  <form name="form" action="form.php" method="POST">
    <div id="Security">

      <p>FA Cash: View a student's fincancial aid awards and budget<p>
      <input type="checkbox" name="viewaid" value="viewaid">View
      <br>
      <p>FA Non Financial Aid Staff: Also known as Cost Centers
      <input type="checkbox" name="viewnon" value="viewnon">View
      <hr>

      <button class="button" type="submit" name="submit" >Submit</button>
    </div>


  </form>

</body>
</html>
