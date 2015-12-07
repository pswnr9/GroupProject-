<html>
<head>
<title>Security Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css?v=1">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="formcontainer">
  <div class="alignment">
  <div class="smallheader">
  <h2>myZou Security Request Form</h2>
  <h2>University of Missouri-Columbia</h2>

  <hr>

  <h3>Instead of sending request directly to Student Information Systems 130 Jesse Hall, simply submit this form.</h3>
  <hr>
  </div>


  <form name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="pure-form pure-form-stacked">
    <h3>Enter your information.</h3>

    <div class="pure-g">

    <div class="pure-u-1-3">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="pure-u-23-24" value="<?php echo isset($username) ? $username : ""; ?>">
    </div>

      <div class="pure-u-1-3">
      <label for="title">Title</title>
      <input type="text" name="title"  id="title" class="pure-u-23-24" value="<?php echo isset($title) ? $title : ""; ?>">
    </div>

    <div class="pure-u-1-3">
      <label for="department">Department</label>
      <input type="text" name="department" id="department" class="pure-u-23-24" value="<?php echo isset($organization) ? $organization : ""; ?>">
    </div>

    <div class="pure-u-1-3">
      <label for="pawprint">Pawprint</label>
      <input type="text" name="pawprint" id="pawprint"  class="pure-u-23-24" value="<?php echo $_SESSION['pawprint']; ?>">
    </div>

      <div class="pure-u-1-3">
      <label for="emplid">EmplID</label>
      <input type="text" name="emplid" id="emplid" class="pure-u-23-24" value="<?php echo isset($empiid) ? $empiid : ""; ?>">
    </div>

      <div class="pure-u-1-3">
      <label for="campus">Campus Address</label>
      <input type="text" name="campus" id="campus"  class="pure-u-23-24" value="<?php echo isset($address) ? $address : ""; ?>">
    </div>


      <div class="pure-u-1-3">
      <label for="number">Phone Number</label>
      <input type="text" name="number" id="number" class="pure-u-23-24" value="<?php echo isset($phone_num) ? $phone_num : ""; ?>">
    </div>
    </div>
      <hr>

      <h3>Security Information</h3>
      <label for="new" class="pure-checkbox">
      <input id="new" type="radio" name="request_status" value="1"> New Request
      <input id="additional" type="radio" name="request_status" value="0"> Additional Request
    </label>

    <label id="studentworker" for="remember" class="pure-checkbox">
      <input id="studentworker" type="checkbox" name="studentworker" value="student worker"> Student Worker
    </label>

      <h4>Copy Security of a Staff Member (Choose Current or Former)</h4>
      <div class="pure-u-1-3" c>
      <label for="current" class="pure-checkbox">
      <input id="current" type="radio" name="currentformer" value="current"> Current
      </label>
    </div>

    <div class="pure-u-1-3">
    <label for="former" class="pure-checkbox">
      <input id="former" type="radio" name="currentformer" value="former"> Former
      <label for="remember" class="pure-checkbox">
    </div>
      <br>


       <div class="pure-u-1-3">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="pure-u-23-24">
    </div>

      <div class="pure-u-1-3">
      <label for="position">Position:</label>
      <input type="text" name="position" id="position" class="pure-u-23-24">
    </div>

      <div class="pure-u-1-3">
      <label for="sso">SSO/Pawprint:</label>
      <input type="text" name="sso" id="sso" class="pure-u-23-24">
    </div>

      <div class="pure-u-1-3">
      <label for="emplid2">EmplID:</label>
      <input type="text" name="emplid2" id="emplid2" class="pure-u-23-24">
    </div>
      <hr>

      <h3>FERPA Score</h3>
      <p>A passing score of 85% on the FERPA Quiz is required before access to student data is approved. To request
          access to the FERPA tutorial and access the FERPA quiz can be done <a href="http://myzoutraining.missouri.edu/ferpareq.php.">here</a>
      </p>
      <div class="pure-u-1-3">
      <label for="ferpa">Ferpa Score:</label>
      <input type="text" name="ferpa" id="ferpa" class="pure-u-23-24">
    </div>
      <hr>

      <h3>Select the Academic Career(s). Please check all that apply.</h3>
      <label for="ugrd" class="pure-checkbox">
        <input id="ugrd" type="checkbox" name="ugrd" value="ugrd"> UGRD
      </label>
      <label for="grad" class="pure-checkbox">
        <input id="grad" type="checkbox" name="grad" value="grad"> GRAD
      </label>
      <label for="med" class="pure-checkbox">
        <input id="med" type="checkbox" name="med" value="med"> MED
      </label>
      <label for="vetmed" class="pure-checkbox">
        <input id="vetmed" type="checkbox" name="vet" value="vetmed"> VET MED
      </label>
      <label for="law" class="pure-checkbox">
        <input id="law" type="checkbox" name="law" value="law"> LAW
      </label>
      <br>
      <hr>

      <p>Which type of access do you need?</p>
      <input type="radio" name="access_type" value="2">Student Records
      <input type="radio" name="access_type" value="3">Admissions
      <input type="radio" name="access_type" value="4">Student Financials
      <input type="radio" name="access_type" value="5">Student Financial Aid
      <input type="radio" name="access_type" value="6">Reserved Access

      <hr>

      <button class="pure-button pure-button-primary" type="submit" name="submit" >Submit</button>


  </form>
</div>
</div>
<div class="err-msg" style="text-align: center;">e: <?php if(isset($format_error)) echo "format not correct " . $format_error; ?></div>
</body>
</html>
