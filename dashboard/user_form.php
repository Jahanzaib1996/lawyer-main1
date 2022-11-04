<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1 style="padding-left:44%; color: lig blue;">userForm</h1>

<div>
  <form action="savedata.php" method="POST">
    <label for="fname">F_Name</label>
    <input type="text" id="fname" name="F_Name" placeholder=" Your First Name...">

    <label for="lname">L_Name</label>
    <input type="text" id="lname" name="L_Name" placeholder=" Your Last Name...">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="Email" placeholder=" Your Email...">

    <label for="lname">Phone</label>
    <input type="text" id="lname" name="Phone" placeholder="Your Phone...">

    <label for="lname">City</label>
    <input type="text" id="lname" name="City" placeholder="Your city...">

    <label for="lname">service</label>
    <input type="text" id="lname" name="Service" placeholder=" service...">

    <label for="fname">Meeting place</label>
    <input type="text" id="fname" name="Meeting_place" placeholder="  Meeting place...">

    <label for="lname">Role</label>
    <input type="text" id="lname" name="Role" placeholder=" Role...">

    <label for="lname">	Lawyer Details</label>
    <input type="text" id="lname" name="Lawyer_Details" placeholder=" Lawyer Details...">

    <label for="lname">Username</label>
    <input type="text" id="lname" name="Username" placeholder="Username..">

    <label for="lname">Password</label>
    <input type="text" id="lname" name="Password" placeholder="Password...">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>