<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
include 'functions.php';
deleterecord();

?>
<table>
<?php

displayrecords();
?>
</table>

To delete a record, enter the id of the record:
<form action="delete.php" method="post">
  id: <input type="text" name="id"><br>
 <input type="submit" value="Submit">

</form>


To update a record, enter the following information: 
<form action="update.php" method="post">
  Id:<input type="text" name="id"><br>
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  Address: <input type="text" name="address"><br>
  Telephone: <input type="text" name="telephone"><br>
  Email:<input type="text" name ="email"> <br>
  Alternate Address: <input type="text" name="address2"><br>
  Alternate Telephone: <input type="text" name="telephone2"><br>
  Alternate Email:<input type="text" name ="email2"> <br>
  <input type="submit" value="Submit">

</form>

</body>
</html>

