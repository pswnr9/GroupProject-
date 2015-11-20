<html>
<head>
<title>Security Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css?v=1">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">\
</head>
<body>

  <div class='formcontainer'>
  <div class='alignment'>
  <div class='smallheader'>
  <h1>Admissions Access</h1>
  <hr>
  </div>

  <form name="form" action="form.php" method="POST" class="pure-form pure-form-stacked">
    <div id="Security">

      <h3>Select the Academic Career(s). Please check all that apply.</h3>
      <hr>
      <br>
    <label for="ACT" class="pure-checkbox">
      <input id="ACT" type="checkbox" name="ACT" value="ACT"> ACT
    </label>
    <label for="SAT" class="pure-checkbox">
      <input id="SAT" type="checkbox" name="SAT" value="SAT"> SAT
    </label>
    <label for="GRE" class="pure-checkbox">
      <input id="GRE" type="checkbox" name="GRE" value="GRE"> GRE
    </label>
    <label for="GMAT" class="pure-checkbox">
      <input id="GMAT"type="checkbox" name="GMAT" value="GMAT"> GMAT
    </label>
    <label for="TOFEL" class="pure-checkbox">
      <input id="TOFEL" type="checkbox" name="TOFEL" value="TOFEL"> TOFEL
    </label>
    <label for="IELTZ" class="pure-checkbox">
      <input id="IELTZ" type="checkbox" name="IELTZ" value="IELTZ"> IELTZ
    </label>
    <label for="LSAT" class="pure-checkbox">
      <input id="LSAT" type="checkbox" name="LSAT" value="LSAT"> LSAT
    </label>
    <label for="MCAT" class="pure-checkbox">
      <input id="MCAT" type="checkbox" name="MCAT" value="MCAT"> MCAT
    </label>
    <label for="AP" class="pure-checkbox">
      <input id="AP" type="checkbox" name="AP" value="AP"> AP
    </label>
    <label for="CLEP" class="pure-checkbox">
      <input id="CLEP" type="checkbox" name="CLEP" value="CLEPT"> CLEP
    </label>
    <label for"GED" for="ugrd" class="pure-checkbox">
      <input id="GED" type="checkbox" name="GED" value="GED"> GED
    </label>
    <label for="MILLERS" class="pure-checkbox">
      <input id="MILLERS "type="checkbox" name="MILLERS" value="MILLERS"> MILLERS
    </label>
    <label for="PRAX" class="pure-checkbox">
      <input id="PRAX" type="checkbox" name="PRAX" value="PRAX"> PRAX
    </label>
    <label for="PLA-MU" class="pure-checkbox">
      <input id="PLA-MU" type="checkbox" name="PLA-MU" value="PLA-MU"> PLA-MU
    </label>
    <label for="BASE" class="pure-checkbox">
      <input id="BASE" type="checkbox" name="BASE" value="BASE"> BASE
    </label>
      <br>
      <hr>

      <button class="pure-button pure-button-primary" type="submit" name="submit">Submit</button>
    </div>


  </form>
</div>
</div>
</body>
</html>
