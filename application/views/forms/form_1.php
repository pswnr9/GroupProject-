<html>
<head>
<title>Security Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  form {
    background-color: white;
    border-style: solid;
  }

  #Smallheader {
    text-align: center;
  }

</style>
</head>
<body>

  <div id="Smallheader">
  <h2>myZou Security Request Form</h2>
  <h2>University of Missouri-Columbia</h2>

  <hr>

  <h3>Instead of sending request directly to Student Information Systems 130 Jesse Hall, simply submit this form.</h3>
  </div>

 <div>
  <form name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="pure-form pure-form-stacked">
    <h3>Enter your information.</h3>
    <div id="Security">
    <div class="pure-g">

    <div class="pure-u-1-3">
      <label for="username">Username</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="username" id="username" class="pure-u-23-24" value="<?php echo isset($username) ? $username : ""; ?>">
    </div>

      <div class="pure-u-1-3">
      <label for="title">Title</title>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="title"  id="title" class="pure-u-23-24" value="<?php echo isset($title) ? $title : ""; ?>">
    </div>

    <div class="pure-u-1-3">
      <label for="department">Department</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="organization" id="department" class="pure-u-23-24" value="<?php echo isset($organization) ? $organization : ""; ?>">
    </div>

    <div class="pure-u-1-3">
      <label for="pawprint">Pawprint</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="pawprint" id="pawprint"  class="pure-u-23-24" value="<?php echo $_SESSION['pawprint']; ?>" disabled>
    </div>

      <div class="pure-u-1-3">
      <label for="emplid">EmplID</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="number" name="empiid" id="emplid" class="pure-u-23-24" value="<?php echo isset($empiid) ? $empiid : ""; ?>">
    </div>

      <div class="pure-u-1-3">
      <label for="campus">Campus Address</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="address" id="campus"  class="pure-u-23-24" value="<?php echo isset($address) ? $address : ""; ?>">
    </div>


      <div class="pure-u-1-3">
      <label for="number">Phone Number</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="phone_num" id="number" class="pure-u-23-24" value="<?php echo isset($phone_num) ? $phone_num : ""; ?>">
    </div>
    </div>
      <hr>

      <h3>Security Information</h3>
      <label for="new" class="pure-checkbox">
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="new" type="radio" name="request_status" value="0" checked="checked"> New Request
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="additional" type="radio" name="request_status" value="1"> Additional Request
    </label>


    <label id="studentworker" for="remember" class="pure-checkbox">
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="studentworker" type="checkbox" name="student_worker" value="1"> Student Worker
    </label>

      <h4>Copy Security of a Staff Member (Choose Current or Former)</h4>
      <div class="pure-u-1-3">
      <label for="current" class="pure-checkbox">
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="current" type="radio" name="if_cur_staff" value="2"> Current
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="former" type="radio" name="if_cur_staff" value="1"> Former
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> id="n_f_c" type="radio" name="if_cur_staff" value="0" checked="checked"> None
      </label>
    </div>


      <br>


       <div class="pure-u-1-3">
      <label for="name">Name:</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="ref_name" id="name" class="pure-u-23-24" value="none">
    </div>

      <div class="pure-u-1-3">
      <label for="position">Position:</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="ref_pos" id="position" class="pure-u-23-24" value="none">
    </div>

      <div class="pure-u-1-3">
      <label for="sso">SSO/Pawprint:</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="text" name="ref_pawprint" id="sso" class="pure-u-23-24" value="none">
    </div>

      <div class="pure-u-1-3">
      <label for="emplid2">EmplID:</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="number" name="ref_empiid" id="emplid2" class="pure-u-23-24" value="0000">
    </div>
      <hr>

      <h3>FERPA Score</h3>
      <p>A passing score of 85% on theFERPA Quiz is required before access to student data is approved. To request
        access to the FERPA tutorial and access the FERPA quiz can be done at http://myzoutraining.missouri.edu/ferpareq.php.
      </p>
      <div class="pure-u-1-3">
      <label for="ferpa">Ferpa Score:</label>
      <input <?php echo isset($adminView) ? "readonly" : "" ; ?> type="number" name="ferpa_score" id="ferpa" class="pure-u-23-24" min="85" max="100">
    </div>
      <hr>

      <p>Select the Academic Career(s). Please check all that apply.<p>
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="checkbox" name="ac[]" value="4">UGRD
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="checkbox" name="ac[]" value="3">GRAD
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="checkbox" name="ac[]" value="2">MED
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="checkbox" name="ac[]" value="1">VET MED
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="checkbox" name="ac[]" value="0">LAW
      <br>
      <hr>

      <p>Which type of access do you need?</p>
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="radio" name="access_type" value="2" <?php echo isset($adminView) ? "" : 'checked="checked"' ; echo isset($access_type)&&$access_type == 2 ? 'checked="checked"' : "" ; ?>>Student Records
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="radio" name="access_type" value="3" <?php echo isset($access_type)&&$access_type == 3 ? 'checked="checked"' : "" ; ?>>Admissions
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="radio" name="access_type" value="4" <?php echo isset($access_type)&&$access_type == 4 ? 'checked="checked"' : "" ; ?>>Student Financials
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="radio" name="access_type" value="5" <?php echo isset($access_type)&&$access_type == 5 ? 'checked="checked"' : "" ; ?>>Student Financial Aid
      <input <?php echo isset($adminView) ? "disabled" : "" ; ?> type="radio" name="access_type" value="6" <?php echo isset($access_type)&&$access_type == 6 ? 'checked="checked"' : "" ; ?>>Reserved Access
      <hr>

      <?php echo isset($adminView) ? "" : '<button class="button" type="submit">Submit</button>' ;?>
    </div>


  </form>
</div>
<div class="err-msg" style="text-align: center;">e: <?php if(isset($format_error)) echo "format not correct " . $format_error; ?></div>
</body>
</html>
