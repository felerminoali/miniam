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
            <li><a data-toggle="tab" href="#glossary">Glossary</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="col-md-6">-->
<!--                            <img src="../homepage.jpg" alt="home-pic" width="500px" height="200px">-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!---->
<!--                            <a href="/?page=login" class="btn btn-primary">Login</a>-->
<!--                            <a href="/?page=register" class="btn btn-success">Register</a>-->
<!--                            </br>-->
<!--                            </br>-->
<!--                            <h1>Vision</h1>-->
<!--                            <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>-->
<!--                            <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>-->
<!--                            <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>-->
<!--                            </br>-->
<!---->
<!--                            <h1>Mission</h1>-->
<!--                            <p>dcnskjhckskjchbskjhkj kjahbkjahkdhka </p>-->
<!--                            </br>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Header with Background Image -->
                <header class="business-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="../homepage.jpg" alt="home-pic">
                                <h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8">
                            <h2 class="mt-4">What We Do</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                            <p>
                                <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="mt-4">Contact Us</h2>
                            <address>
                                <strong>Start Bootstrap</strong>
                                <br>3481 Melrose Place
                                <br>Beverly Hills, CA 90210
                                <br>
                            </address>
                            <address>
                                <abbr title="Phone">P:</abbr>
                                (123) 456-7890
                                <br>
                                <abbr title="Email">E:</abbr>
                                <a href="mailto:#">name@example.com</a>
                            </address>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-sm-4 my-4">
                            <div class="card">
                                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Find Out More!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 my-4">
                            <div class="card">
                                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Find Out More!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 my-4">
                            <div class="card">
                                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Find Out More!</a>
                                </div>
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
            <div id="glossary" class="tab-pane fade">
                <p>Glossary</p>
            </div>
        </div>
    </div>
<?php
require_once('_footer.php');
?>