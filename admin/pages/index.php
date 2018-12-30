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

//Login::restrictFront();

require_once('template/_header.php')
?>


        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Dashboard</h1>

            <a href="/admin/?page=addcase" class="btn btn-success" style="float: right;"><i class="fa fa-angle-double-left"
                                                   aria-hidden="true"></i>Add Case</a>

            <table id="test_table" class="display" style="width: 100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Summary</th>
                </tr>
                </thead>
            </table>

        </main>
    </div>
</div>

<?php
require_once('template/_footer.php')
?>

