<?php

//if (Login::isLogged(Login::$_login_admin)) {
//    Helper::redirect(Login::$_dashboard_admin);
//}
//
//$objForm = new Form();
//$objValid = new Validation($objForm);
//
//// login form
//if ($objForm->isPost('login_email')) {
//
//    $objAdmin = new Admin();
//
//    if ($objAdmin->isUser($objForm->getPost('login_email'), $objForm->getPost('login_password'))) {
//        Login::loginAdmin($objAdmin->_id, Url::getCurrentUrl());
//    } else {
//        $objValid->add2Errors('login');
//    }
//}
//

require_once('template/_header.php')
?>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
<!--    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="float: right;">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">


            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Laws</a>
                </li>
            </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Dashboard</h1>

            <section class="row text-center placeholders">
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <div class="text-muted">Something else</div>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </section>

            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>libero</td>
                        <td>Sed</td>
                        <td>cursus</td>
                        <td>ante</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>dapibus</td>
                        <td>diam</td>
                        <td>Sed</td>
                        <td>nisi</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>Nulla</td>
                        <td>quis</td>
                        <td>sem</td>
                        <td>at</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>nibh</td>
                        <td>elementum</td>
                        <td>imperdiet</td>
                        <td>Duis</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>sagittis</td>
                        <td>ipsum</td>
                        <td>Praesent</td>
                        <td>mauris</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>Fusce</td>
                        <td>nec</td>
                        <td>tellus</td>
                        <td>sed</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>augue</td>
                        <td>semper</td>
                        <td>porta</td>
                        <td>Mauris</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>massa</td>
                        <td>Vestibulum</td>
                        <td>lacinia</td>
                        <td>arcu</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>eget</td>
                        <td>nulla</td>
                        <td>Class</td>
                        <td>aptent</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>taciti</td>
                        <td>sociosqu</td>
                        <td>ad</td>
                        <td>litora</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>torquent</td>
                        <td>per</td>
                        <td>conubia</td>
                        <td>nostra</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>per</td>
                        <td>inceptos</td>
                        <td>himenaeos</td>
                        <td>Curabitur</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>sodales</td>
                        <td>ligula</td>
                        <td>in</td>
                        <td>libero</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!--<br/>-->
<!--<br/>-->
<!--<br/>-->
<!--<div class="container">-->
<!---->
<!--    <div>-->
<!--        <strong>-->
<!--            <a href="/?page=exams" class="btn btn-success"><i class="fa fa-angle-double-left"-->
<!--                                                              aria-hidden="true"></i> --><?php //echo __('cancel', 'default'); ?>
<!--            </a>-->
<!--        </strong>-->
<!--    </div>-->
<!---->
<!--    <div id="login-overlay" class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h4 class="modal-title" id="myModalLabel">--><?php //echo __('admin', 'default'); ?><!--</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="col-xs-12">-->
<!---->
<!--                        <form id="loginForm" method="POST">-->
<!--                            <div class="form-group">-->
<!--                                <label for="login_email"-->
<!--                                       class="control-label">--><?php //echo __('username', 'default'); ?><!--</label>-->
<!--                                <div>-->
<!--                                    --><?php //echo $objValid->validate('login'); ?>
<!--                                    <input type="text" class="form-control" id="login_email" name="login_email"-->
<!--                                           value=""-->
<!--                                           required="" title="Please enter you username"-->
<!--                                           placeholder="example@gmail.com">-->
<!--                                    <span class="help-block"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="login_password"-->
<!--                                       class="control-label">--><?php //echo __('password', 'default'); ?><!--</label>-->
<!--                                <input type="password" class="form-control" id="login_password"-->
<!--                                       name="login_password" value=""-->
<!--                                       required="" title="Please enter your password">-->
<!--                                <span class="help-block"></span>-->
<!--                            </div>-->
<!--                            <button type="submit"-->
<!--                                    class="btn btn-success btn-block">--><?php //echo __('login', 'default'); ?><!--</button>-->
<!--                        </form>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php
require_once('template/_footer.php')
?>
