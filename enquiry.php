
<html>
<head>
<?php include 'back_header.php';?>
<style>

th, td {
    text-align: left;
    padding: 5px;
	
}
.enq
{
	text-align:center;
	color:106f59;
}
</style>
</head>
<?php
//including the database connection file
include 'config.php';


$result = mysqli_query($conn, "SELECT * FROM contact ORDER BY id ASC"); // using mysqli_query instead
?>
<h1 class="enq">Enquiry from the customer</h1>
<hr/>
    <table align="center" width='75%' border= px;>
        <tr bgcolor='#c5d3c6'>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Message</td>
			<td>City</td>
			<td>Remove</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['mobile']."</td>";  
			echo "<td>".$res['message']."</td>";  
			echo "<td>".$res['city']."</td>";  
            echo "<td> <a href=\"contactdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>