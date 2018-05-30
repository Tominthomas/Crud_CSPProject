<?php
//read.php
require_once 'login.php';
$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	
$sql = "SELECT * FROM Sabers WHERE Postion='" . $_POST['Postion'] . "'";
$result = $conn->query($sql);

$lastName = $row[0];
$JerseyNumber = $row[1];
$Weight = $row[2];
$Height = $row[3];
$Roster = $row[4];
// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
echo nl2br("<H2>Here is the roster for "." ". $_POST['Postion']."</H2>");

if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	{	echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
		echo "<TABLE><TR><TH>lastName</TH><TH>JerseyNumber</TH><TH>Weight</TH><TH>Height</TH><TH>Roster</TH></TR>";
		// Iterate through all of the returned images, placing them in a table for easy viewing
	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>".$row['lastName']. "</TD><TD>". $row['JerseyNumber']. "</TD><TD>".$row['Weight'] ."</TF><TD>". $row['Height']. "</TD><TD>". $row['Roster']. "</TD>";
			echo "<TD><form action= 'update.php' method = 'post'>";
			echo "<button name = 'update'   type = 'submit' value =".$row['JerseyNumber'].">Update</button></FORM>";
			echo "<TD><form action= 'delete.php' method = 'post'>";
			echo "<button name = 'delete'   type = 'submit' value =".$row['JerseyNumber'].">Delete</button></FORM>";
			echo "</TR>";
		}
	echo "</TABLE>";
	}
	else{
		echo "<br> 0 results";
		}
echo"<br><form action= 'update.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
echo '</body>';
	
?>