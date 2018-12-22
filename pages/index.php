<?php

$objCase = new Cases();

if(empty($objCase)){
    echo '<h1>Empty</h1>';
}
$objLaw = new Laws();

require_once('_header.php');
?>
    <div class="container">
        <ul class="nav nav-tabs"> <!--use nav bars instead -->
            <li class="active"><a data-toggle="tab" href="#home">Home page</a></li>
            <li><a data-toggle="tab" href="#cases">Cases</a></li>
            <li><a data-toggle="tab" href="#legislation">Legislation</a></li>
            <li><a data-toggle="tab" href="#glossary">Glossary</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div style="overflow: auto; padding: 10px;">
                    <div style="float: left;">
                        <img src="../homepage.jpg" alt="home-pic" width="720px" height="580px">
                    </div>
                    <div style="float: left;">
                        <h1>Vision</h1>
                        <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>
                        </br>

                        <h1>Mission</h1>
                        <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>
                        </br>
                    </div>
                </div>

            </div>
            <div id="cases" class="tab-pane fade">
                <h1>Cases</h1>
                <table>
                    <tr>
                        <th>Case</th>
                        <th>Case Summary</th>
                    </tr>
                    <?php

                    $cases = $objCase->getAllCases();

                    foreach ($rows as $cases) {
                        echo '
							<tr>
								<td><a href=' . $rows["url"] . '>' . $rows["name"] . '</a></td>
								<td><a href=' . $rows["summary"] . '>' . $rows["name"] . ' Summary</a></td>
							</tr>';
                    }

                    ?>
                </table>
            </div>
            <div id="legislation" class="tab-pane fade">

                <?php

                $laws = $objLaw->getAllLaws();


                ?>
                <h1>Laws of Tanzania <?php echo '2012'; ?>-<?php echo date("Y"); ?></h1>
                <?php
                foreach ($rows as $laws) {
                    ?>

                    <p><a href="../acts.php?year=<?php echo $rows['year']; ?>">Laws of
                            Tanzania <?php echo $rows['year']; ?></a></p>

                    <?php
                }

                ?>
            </div>
            <div id="glossary" class="tab-pane fade">
                <p>Glossary</p>
            </div>
        </div>
    </div>
<?php
require_once('_footer.php');
?>