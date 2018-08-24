<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM holiday ORDER BY date ASC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
	<h2 align="center"> Paid Holidays </h2>
	<style>
	.additem{
		margin-left:240px;
	}
	.table {
     border-collapse:collapse;
     border: 3px solid #0ce8cf; 
	
}
	</style>
</head>
<body >
<hr/>
    <div class="additem"><a  href="addholiday.html">Add New Holidays</a><br/><br/></div>
    <table align="center" width='68%' class="table">

        <tr bgcolor='#18a6f7'>
            <td width="150">Date</td>
            <td width="150">Day</td>
            <td width="600">Event</td>
			<td width="30"></td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array */
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['date']."</td>";
            echo "<td>".$res['day']."</td>";
            echo "<td>".$res['event']."</td>";    
            echo "<td><a href=\"editholiday.php?id=$res[id]\">Edit</a> | <a href=\"deleteholiday.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>