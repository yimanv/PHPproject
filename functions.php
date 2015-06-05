
<?php


function insertrecord() {
  
$connection = mysqli_connect('localhost', 'root', '', 'userinfo');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$aaddress=$_POST['address2'];
$atelephone=$_POST['telephone2'];
$aemail=$_POST['email2'];
$iaddress = $address . ',' . $aaddress;
$itelephone = $telephone . ',' . $atelephone;
$iemail= $email . ',' . $aemail;
$query = "INSERT INTO information VALUES ('NULL','$fname','$lname','$iaddress','$iemail','$itelephone')";
mysqli_query($connection,$query) or die('Error, insert query failed');

echo "Hi! $fname. Information has been saved to our database";
}

function displayrecords() {


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,firstname,lastname, addresses, emails, telephones FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo " <tr>  <td>".$row["id"]."</td><td>First name: " . $row["firstname"]. "</td><td> Last Name: " . $row["lastname"]. "</td> <td> Addresses: " . $row["addresses"]. "</td><td> Telephones:" . $row["telephones"]." </td> <td> Emails :" . $row["emails"]."</tr>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
}
function deleterecord(){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";
$id=$_POST['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM information WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
function updaterecord(){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$aaddress=$_POST['address2'];
$atelephone=$_POST['telephone2'];
$aemail=$_POST['email2'];
$iaddress = $address . ',' . $aaddress;
$itelephone = $telephone . ',' . $atelephone;
$iemail= $email . ',' . $aemail;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE information SET firstname='".$fname."' WHERE id=".$id;

$conn->query($sql);


$sql = "UPDATE information SET lastname='".$lname."' WHERE id=".$id;
$conn->query($sql);
$sql = "UPDATE information SET addresses='".$iaddress."' WHERE id=".$id;

$conn->query($sql);


$sql = "UPDATE information SET telephones='".$itelephone."' WHERE id=".$id;

$conn->query($sql);

$sql = "UPDATE information SET emails='".$iemail."' WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>