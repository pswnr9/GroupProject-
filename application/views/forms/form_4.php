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
  <h1>Student Financials Access</h1>
  <hr>

</div>
  <form name="form" action="form.php" method="POST" class="pure-form pure-form-stacked">
    <div id="Security">

      <h3>SF General Inquiry: For staff outside of the Cashier's Office</h3>
      <label for="viewgen" class="pure-checkbox">
      <input id="viewgen" type="checkbox" name="viewgen" value="viewgen">View
    </label>
      <h3>SF Cash Group Post: Also known as Cost Centers</h3>
      <label for="viewcash" class="pure-checkbox">
      <input id="viewcash" type="checkbox" name="viewcash" value="viewcash">View
    </label>
    <label for="updatecash" class="pure-checkbox">
      <input id="updatecash" type="checkbox" name="updatecash" value="updatecash">Update
    </label>
      <hr>

      <button class="pure-button pure-button-primary" type="submit" name="submit" >Submit</button>
    </div>


  </form>
</div>
</div>


</body>
</html>
