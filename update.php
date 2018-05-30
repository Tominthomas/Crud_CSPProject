<HTML>
    <head></head>
    <body>
<?php
//update_delete.php

if ($_GET['action'] == 'Go Back') 
    {
             //action for No
        header('Location: template.html');
        exit;   
    }
else
    {
        echo $JerseyNumber;
        
        echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
    
        require_once 'login.php';
        $conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
            if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }

	
        $sql = "SELECT * FROM Sabers WHERE JerseyNumber='" . $_POST['update'] . "'";
        $result = $conn->query($sql);

        $lastName = $row[0];
        $JerseyNumber = $row[1];
        $Weight = $row[2];
        $Height = $row[3];
        $Roster = $row[4];
        
        if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	        {print "LOL";
                while($row = $result->fetch_assoc())
		            {
                        // HTML to display the form on this page.
                        echo"Edit the information for".$row['JerseyNumber'].".";
	                    echo "<TABLE><TR><TH>lastName</TH><TH>JerseyNumber</TH><TH>Weight</TH><TH>Height</TH><TH>Postion</TH><TH>Roster</TH></TR>";
                        echo "<TR>";
                        echo "<TD>".$row['lastName']. "</TD><TD>". $row['JerseyNumber']. "</TD><TD>".$row['Weight'] ."</TF><TD>". $row['Height']. "</TD><TD>". $row['position']. "</TD><TD>". $row['Roster']. "</TD>";
	                    echo "<form action='changeItem.php' method = 'post'>";
	                    //echo "<TR><TD><input type='text' name = studentID value=".$row['studentID']." class='field left' readonly></TD>";
                        echo "<TR><TD><input type='text' placeholder='Full Name' name='lastName' class='advancedSearchTextBox'></TD>";
                        echo "<TD><input type='text' placeholder=' Jersey Number' name= 'JerseyNumber' class='advancedSearchTextBox'></TD>";
                        echo "<TD><input type='text' placeholder=' Weight' name= 'Weight' class='advancedSearchTextBox'></TD>";
                        echo "<TD><input type='text' placeholder=' Height' name= 'Height' class='advancedSearchTextBox'></TD>";
                        echo "<TD><select id='select' name='Postion'>";
                        echo "<option value='Safety' >Safety</option>";
                        echo "<option value='Linebacker' >Linebacker</option>";
                        echo "<option value='Cornerback' >Cornerback</option>";
                        echo "<option value='D-line' >D-line</option>";
                        echo "<option value='O-line' >O-line</option>";
                        echo "<option value='QB' >QB</option>";
                        echo "<option value='Runningback' >Runningback</option>";
                        echo "<option value='WR' >WR</option>";
                        echo "</select></TD>";
                        echo "<TD><select id='select' name='Roster'>";
                        echo "<option value='Shakopee Sabers' >Sabers</option>";
                        echo "</select></TD></TR></TABLE>";
                        echo "<input name = 'changeItemz' type = 'submit' value = 'Submit Changes'>";
                        echo "</form>";
                        
	                    
	                    
                    } 
                 echo "</body>";   
	        }
    }
?>

</HTML>
