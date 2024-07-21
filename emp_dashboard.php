<table border="5" align="center" text align="center" width=40% height=20%>
<tr>
<th>Name</th>
<th>Destination</th>
<th>Place_Posting</th>
<th>Grade</th>
<th>Mobile_no</th>
<th>Email</th>
<th>Address</th>
</tr>

<?php
include("config.php");
$sql="SELECT * from employ_master";
 $result = mysqli_query($con, $sql);
while($res=mysqli_fetch_array($result)){
	
echo '<tr>';
echo'<td>' .$res['Name'].'</td>';	
echo'<td>' .$res['Destination'].'</td>';	
echo'<td>' .$res['Place_Posting'].'</td>';	
echo'<td>' .$res['Grade'].'</td>';	
echo'<td>' .$res['Mobile_no'].'</td>';
echo'<td>' .$res['Email'].'</td>';
echo'<td>' .$res['Address'].'</td>';
echo'</tr>';

}
?>
	</table>

