<?php

$objCase = new Cases();
$cases = $objCase->getAllCases();

$objLaw = new Laws();

require_once('_header.php');

?>
    <div class="container">
        <ul class="nav nav-tabs"> <!--use nav bars instead -->
            <li class="active"><a data-toggle="tab" href="#home">Home page</a></li>
            <li><a data-toggle="tab" href="#cases">Cases</a></li>
            <li><a data-toggle="tab" href="#legislation">Legislation</a></li>
            <li><a data-toggle="tab" href="#glossary">Articles</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <div class="row">
                    <div class="col-md-12" style="padding: 10px;">
                        <div class="col-md-8">
                            <img src="../homepage.jpg" alt="home-pic" width="720px" height="580px">
                        </div>
                        <div class="col-md-4">

                            <a href="/?page=login" class="btn btn-primary">Login</a>
                            <a href="/?page=register" class="btn btn-success">Register</a>
                            </br>
                            </br>
                            <h1>Our Mission</h1>
                            <br/>
                            <p style="text-align:justify">Founded in 2018, <b>Lex Scripta</b> is a legal database created to enhance the legal sector in Tanzania. We make it possible by creating a platform where law students and lawyers can access legal materials and tools at an affordable price, to ensure that no one is left behind. Founded in 2018, Lex Scripta is a legal database created to enhance the legal sector in Tanzania. We make it possible by creating a platform where law students and lawyers can access legal materials and tools at an affordable price, to ensure that no one is left behind.  </p>
                            </br>

                            </br>
                        </div>
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

                    foreach ($cases as $rows) {
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
                <h1>Laws of Tanzania <?php echo '2002'; ?>-<?php echo date("Y"); ?></h1>
                <?php
                foreach ($laws as $rows) {
                    ?>

                    <p><a href="../acts.php?year=<?php echo $rows['year']; ?>">Laws of
                            Tanzania <?php echo $rows['year']; ?></a></p>
                    <?php
                }

                ?>
            </div>
            <div id="Articles" class="tab-pane fade">
                <p>Glossary</p>
            </div>
        </div>
    </div>
<?php
require_once('_footer.php');
?>