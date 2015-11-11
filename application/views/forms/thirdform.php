<html>
<head>
<title>Security Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


  <h1>Admissions Access</h1>


  <a href="#menu" id="menuLink" class="menu-link">
      <!-- Hamburger icon -->
      <span></span>
  </a>

  <form name="form" action="form.php" method="POST">
    <div id="Security">

      <p>Select the Academic Career(s). Please check all that apply.<p>
      <input type="checkbox" name="all" value="all">Access to ALL test scores
      <br>
      <input type="checkbox" name="ACT" value="ACT">ACT
      <input type="checkbox" name="SAT" value="SAT">SAT
      <input type="checkbox" name="GRE" value="GRE">GRE
      <input type="checkbox" name="GMAT" value="GMAT">GMAT
      <input type="checkbox" name="TOFEL" value="TOFEL">TOFEL
      <input type="checkbox" name="IELTS" value="IELTZ">IELTZ
      <input type="checkbox" name="LSAT" value="LSAT">LSAT
      <input type="checkbox" name="MCAT" value="MCAT">MCAT
      <input type="checkbox" name="AP" value="AP">AP
      <input type="checkbox" name="CLEP" value="CLEPT">CLEP
      <input type="checkbox" name="GED" value="GED">GED
      <input type="checkbox" name="MILLERS" value="MILLERS">MILLERS
      <input type="checkbox" name="PRAX" value="PRAX">PRAX
      <input type="checkbox" name="PLA-MU" value="PLA-MU">PLA-MU
      <input type="checkbox" name="BASE" value="BASE">BASE
      <br>
      <hr>

      <button class="button" type="submit" name="submit" >Submit</button>
    </div>


  </form>

</body>
</html>
