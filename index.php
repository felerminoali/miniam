<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- background="homepage.jpg"-->
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
	<div class="container">
  		<ul class="nav nav-tabs"> <!--use nav bars instead -->
    		<li class="active"><a data-toggle="tab" href="#home">Home page</a></li>
   			<li><a data-toggle="tab" href="#cases">Cases</a></li>
    		<li><a data-toggle="tab" href="#legislation">Legislation</a></li>
    		<li><a data-toggle="tab" href="#glossary">Glossary</a></li>
 		</ul>

 		<div class="tab-content">
 			<div id="home" class="tab-pane fade in active">
 				<p>Home contents</p>
 			</div>
 			<div id="cases" class="tab-pane fade">
 				<h1>Cases</h1>
 				<table>
 					<tr>
 						<th>Case</th>
 						<th>Case Summary</th>
 					</tr>
 					<?php
 					include 'connect.php';

					$query = mysqli_query($connection, "SELECT `name`, url, summary FROM cases");

					if(mysqli_num_rows($query) > 0){
						while($rows = mysqli_fetch_array($query)){
							echo '
							<tr>
								<td><a href='.$rows["url"]. '>'.$rows["name"].'</a></td>
								<td><a href='.$rows["summary"]. '>'.$rows["name"].' Summary</a></td>
							</tr>';
						}
					}
 					?>
 				</table>
 			</div>
 			<div id="legislation" class="tab-pane fade">

                	<?php
                    $query = mysqli_query($connection, "SELECT `year` from laws group by `year`");

                    if( mysqli_num_rows($query) > 0){


                        ?>
                        <h1>Laws of Tanzania <?php echo '2012';?>-<?php echo date("Y");?></h1>
                <?php
                    while($rows = mysqli_fetch_array($query)) {
                        ?>

                        <p><a href="acts.php/?year=<?php echo $rows['year'];?>">Laws of Tanzania <?php echo $rows['year'];?></a></p>

                        <?php
                    }
                    }
                ?>
 			</div>
 			<div id="glossary" class="tab-pane fade">
 				<p>Glossary</p>
 			</div>
 		</div>
	</div>
</body>
</html>