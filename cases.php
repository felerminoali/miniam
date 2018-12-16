<?php
include 'connect.php';

$query = mysql_query("SELECT case_name, case_link, summary_link FROM cases");

if(mysql_num_rows($query) > 0){
	while($rows = mysql_fetch_array($query)){
		echo '
			<tr>
				<td><a href='.$rows["case_link"]. '>'.$rows["case_name"].'</a></td>
				<td><a href='.$rows["summary_link"]. '>'.$rows["case_name"].' Summary</a></td>
			</tr>';
	}
}
?>