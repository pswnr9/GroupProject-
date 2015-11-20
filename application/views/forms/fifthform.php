<html>
<head>
<title>Security Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css?v=1">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

</head>
<body>

  <div class='formcontainer'>
  <div class='alignment'>
  <div class='smallheader'>
  <h1>Student Financial Aid Access</h1>
  <hr>

  </div>

  <form name="form" action="form.php" method="POST" class="pure-form pure-form-stacked">
    <div id="Security">

      <h3>FA Cash: View a student's fincancial aid awards and budget</h3>
      <label for="viewaid" class="pure-checkbox">
      <input id="viewaid" type="checkbox" name="viewaid" value="viewaid">View
      <label>
      <br>
      <h3>FA Non Financial Aid Staff: Also known as Cost Centers</h3>
        <label for="viewnon" class="pure-checkbox">
      <input id="viewnon" type="checkbox" name="viewnon" value="viewnon">View
    </label>
      <hr>

      <button class="pure-button pure-button-primary"  type="submit" name="submit" >Submit</button>
    </div>


  </form>
</div>
</div>

</body>
</html>
