<?php
/**
 * Created by PhpStorm.
 * User: feler
 * Date: 11/21/2016
 * Time: 7:20 PM
 */

if (Login::isLogged(Login::$_login_front)) {
    Helper::redirect(Login::$_dashboard_front);
}

$objForm = new Form();
$objValid = new Validation($objForm);
$objUser = new User();

// login form
if ($objForm->isPost('login_email')) {
    if ($objUser->isUser($objForm->getPost('login_email'), $objForm->getPost('login_password'))) {
        Login::loginFront($objUser->_id, Url::getReferrerUrl());
    } else {
        $objValid->add2Errors('login');
    }
}


require_once('_header.php');
?>

<br/>
<br/>
<br/>
<div class="container">

    <div>
        <strong>
            <a href="/" class="btn btn-success"><i class="fa fa-angle-double-left"
                                                   aria-hidden="true"></i>Cancel</a>
        </strong>
    </div>

    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-8">
                        <div class="well">
                            <form id="loginForm" method="POST">
                                <div class="form-group">
                                    <label for="login_email"
                                           class="control-label">Email</label>
                                    <div>
                                        <?php echo $objValid->validate('login'); ?>
                                        <input type="text" class="form-control" id="login_email" name="login_email"
                                               value=""
                                               required="" title="Please enter you username"
                                               placeholder="example@gmail.com">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="login_password"
                                           class="control-label">Password</label>
                                    <input type="password" class="form-control" id="login_password"
                                           name="login_password" value=""
                                           required="" title="Please enter your password">
                                    <span class="help-block"></span>
                                </div>
                                <button type="submit"
                                        class="btn btn-success btn-block">Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
