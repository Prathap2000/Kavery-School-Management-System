<?php
$con=mysqli_connect("localhost","root","","kavery");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM faculty");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Qualification</th>
<th>Designation</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] ."</td>";
echo "<td>" . $row['Qualification'] . "</td>";
echo "<td>" . $row['Designation'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>