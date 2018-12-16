<!DOCTYPE html>
<html>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}
th, td {
	padding: 5px;
	text-align: left;
}
</style>
<body>
	<h1>Cases</h1>
	<table>
		<tr>
			<th>Acts</th>
		</tr>
		<?php
		include 'connect.php';

        $year = isset($_GET["year"]) && $_GET["year"] != "" ? $_GET["year"] : null;

		$query = mysqli_query($connection, "SELECT * from laws where `year`=".$year);
		if (mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_array($query)){
				echo '
				<tr>
					<td>
					<a href='.$row["url"]. '>'. $row["name"].'</a></td>
				</tr>';
			}
		}
		?>
	</table>
</body>
</html>
