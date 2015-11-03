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

      <input type="checkbox" name="new" value="New Request">New Request
      <br>
      <input type="checkbox" name="additional" value="Additional Request">Additional Request
      <br>
      <input type="checkbox" name="check" value="Student Worker">Student Worker
      <br>

      <p>Copy Security of a Staff Member</p>
      <input type="checkbox" name="current" value="Current">Current
      <br>
      <input type="checkbox" name="former" value="Former">Former]
      <br>

      <button class="button" type="submit" name="submit" >SUBMIT</button>
    </div>


  </form>

</body>
</html>
