<html>
<head>
<title>Security Form</title>
</head>
<style>
.Header{
    background-color: #303030;
    color: #FFCC33;
    text-align: center;
    padding: 50px;
    font-size: 40;

}

h1, h2, h3 {
  text-align: center;
}

#Security{
  text-align: justify;
  border-style: solid;
}
</style>
<body>

    <img src="https://myzou.missouri.edu/um_extcopy/myzou/tigermark.gif" alt="tiger" style="float: left">
      <h1 class="Header">myZou SECURITY Request Form
          <p class="header2">
          University of Missouri-Columbia
          </p>
      </h1>

  <h1>myZou Security Request Form</h1>
  <h2>University of Missouri-Columbia</h2>

  <hr>

  <h3>Instead of sending request directly to Student Information Systems 130 Jesse Hall, simply submit this form.</h3>
  <hr>

  <form name="form" action="form.php" method="POST">
    <div id="Security">

      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
      <label for="title">Title:</title>
      <input type="text" name="title" id="title">
      <label for="department">Department:</label>
      <input type="text" name="department" id="department">
      <hr>

      <label for="pawprint">Pawprint:</label>
      <input type="text" name="pawprint" id="pawprint">
      <label for="emplid">EmplID:</label>
      <input type="text" name="emplid" id="emplid">
      <label for="campus">Campus Address:</label>
      <input type="text" name="campus" id="campus">
      <label for="number">Phone Number:</label>
      <input type="text" name="number" id="number">
      <hr>

      <input type="checkbox" name="new" value="new request">New Request
      <br>
      <input type="checkbox" name="additional" value="additional request">Additional Request
      <br>
      <input type="checkbox" name="check" value="student worker">Student Worker
      <br>

      <p>Copy Security of a Staff Member</p>
      <input type="checkbox" name="current" value="current">Current
      <input type="checkbox" name="former" value="former">Former
      <br>

      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
      <label for="position">Position:</label>
      <input type="text" name="position" id="position">
      <label for="sso">SSO/Pawprint:</label>
      <input type="text" name="sso" id="sso">
      <label for="emplid2">EmplID:</label>
      <input type="text" name="emplid2" id="emplid2">
      <hr>

      <p>A passing score of 85% on theFERPA Quiz is required before access to student data is approved. To request
        access to the FERPA tutorial and access the FERPA quiz can be done at http://myzoutraining.missouri.edu/ferpareq.php.
      </p>
      <label for="ferpa">Ferpa Score:</label>
      <input type="text" name="ferpa" id="ferpa">
      <hr>

      <p>Select the Academic Career(s). Please check all that apply.<p>
      <input type="checkbox" name="ugrd" value="ugrd">UGRD
      <input type="checkbox" name="grad" value="grad">GRAD
      <input type="checkbox" name="med" value="med">MED
      <input type="checkbox" name="vet" value="vet med">VET MED
      <input type="checkbox" name="law" value="law">LAW
      <br>
      <hr>

      <p>Which type of access do you need?</p>
      <input type="checkbox" name="student" value="student records">Student Records
      <input type="checkbox" name="admissions" value="admissions">Admissions
      <input type="checkbox" name="studentfin" value="student financials">Student Financials
      <input type="checkbox" name="studentaid" value="student financial aid">Student Financial Aid
      <input type="checkbox" name="reserved" value="reserved access">Reserved Access
      <hr>

      <button class="button" type="submit" name="submit" >SUBMIT</button>
    </div>


  </form>

</body>
</html>
