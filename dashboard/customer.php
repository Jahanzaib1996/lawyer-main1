<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
ul{
  display: flex;
}
li{
  list-style: none;
  margin-left: 30px
}
.container{
  border: 2px solid green;
  height: 70vh;
  width: 80%;
  margin: 10%;

}
</style>
</head>
<body>
    <div>
    </div class="container">
   
    <h1 style="text-align: center">User</h1>
    <div class="nav">
      <ul>
         <li><a href="crud.php">Home</a></li>
         <li><a href="Add.php">Add</a></li>
         <li><a href="crud.php">Update</a></li>
         <li><a href="crud.php">Delete</a></li>
      </ul>
    </div>
    <h1 style="padding-left: 40%">Student Record</h1>

    <?php

    $conn = mysqli_connect("localhost","root","","lawyers");

    $query = "SELECT * FROM customers";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
    ?>


<table id="customers">

  <tr>
    <th>CID</th>
    <th>F_Name</th>
    <th>L_Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>City</th>
    <th>Username</th>
    <th>Password</th>
    <th>Action</th>
    
  </tr>
  <?php while($row = mysqli_fetch_assoc($result))
    {
    ?>
  <tr>
    <td><?php echo $row["C_ID"]; ?></td>
    <td><?php echo $row["F_Name"]; ?></td>
    <td><?php echo $row["L_Name"]; ?></td>
    <td><?php echo $row["Phone"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["City"]; ?></td>
    <td><?php echo $row["Username"]; ?></td>
    <td><?php echo $row["Password"]; ?></td>
    <td>
       <a href="edit.php?id=<?php echo $row["SID"];?>">edit</a>
       <a href="delete.php?id=<?php echo $row["SID"];?>">delete</a>
    </td>
  </tr>
    <?php }?>
</table>
    <?php }?>

</body>
</html>