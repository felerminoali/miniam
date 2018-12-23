<?php
/**
 * Created by PhpStorm.
 * User: feler
 * Date: 11/21/2016
 * Time: 7:20 PM
 */

//if (Login::isLogged(Login::$_login_front)) {
//    Helper::redirect(Login::$_dashboard_front);
//}

$objForm = new Form();
//$objValid = new Validation($objForm);
//$objUser = new User();

// login form
//if ($objForm->isPost('login_email')) {
//    if ($objUser->isUser($objForm->getPost('login_email'), $objForm->getPost('login_password'))) {
//        Login::loginFront($objUser->_id, Url::getReferrerUrl());
//    } else {
//        $objValid->add2Errors('login');
//    }
//}


require_once('_header.php');
 ?>

<br/>
<br/>
<br/>
<!--<div class="container">-->
<!---->
<!--    <div>-->
<!--        <strong>-->
<!---->
<!--        </strong>-->
<!--    </div>-->
<!---->
<!--    <div id="login-overlay" class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h4 class="modal-title" id="myModalLabel">--><?php //echo __('login', 'default'); ?><!--</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="col-xs-12 col-md-6">-->
<!--                        <div class="well">-->
<!--                            <form id="loginForm" method="POST">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="login_email"-->
<!--                                           class="control-label">--><?php //echo __('username', 'default'); ?><!--</label>-->
<!--                                    <div>-->
<!--                                        --><?php //echo $objValid->validate('login'); ?>
<!--                                        <input type="text" class="form-control" id="login_email" name="login_email"-->
<!--                                               value=""-->
<!--                                               required="" title="Please enter you username"-->
<!--                                               placeholder="example@gmail.com">-->
<!--                                        <span class="help-block"></span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label for="login_password"-->
<!--                                           class="control-label">--><?php //echo __('password', 'default'); ?><!--</label>-->
<!--                                    <input type="password" class="form-control" id="login_password"-->
<!--                                           name="login_password" value=""-->
<!--                                           required="" title="Please enter your password">-->
<!--                                    <span class="help-block"></span>-->
<!--                                </div>-->
<!--                                <button type="submit"-->
<!--                                        class="btn btn-success btn-block">--><?php //echo __('login', 'default'); ?><!--</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="hidden-xs hidden-sm">-->
<!--                    <div class="col-md-6">-->
<!--                        <p class="lead">--><?php //echo __('register', 'default'); ?><!--</p>-->
<!--                        <ul class="list-unstyled" style="line-height: 2">-->
<!--                            <li><span class="fa fa-check text-success"></span> --><?php //echo __('easy', 'default'); ?><!--</li>-->
<!--                            <li><span class="fa fa-check text-success"></span> --><?php //echo __('fast', 'default'); ?><!--</li>-->
<!--                            <li><span class="fa fa-check text-success"></span> --><?php //echo __('free', 'default'); ?><!--</li>-->
<!--                        </ul>-->
<!--                        <p><a href="/?page=register"-->
<!--                              class="btn btn-info btn-block">--><?php //echo __('register_now', 'default'); ?><!--</a></p>-->
<!--                    </div>-->
<!--                        </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</body>
</html>
