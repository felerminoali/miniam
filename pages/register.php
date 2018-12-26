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

if ($objForm->isPost('first_name')) {

    $objValid->_expected = array(
        'first_name',
        'last_name',
        'address_1',
        'address_2',
        'town',
        'county',
        'country',
        'email',
        'password',
        'confirm_password'
    );

    $objValid->_required = array(
        'first_name',
        'last_name',
        'address_1',
        'town',
        'county',
        'country',
        'email',
        'password',
        'confirm_password'
    );

    $objValid->_special = array(
        'email' => 'email'
    );

    $objValid->_post_remove = array(
        'confirm_password'
    );

    $objValid->_post_format = array(
        'password' => 'password'
    );

    // validate password
    $_pass_1 = $objForm->getPost('password');
    $_pass_2 = $objForm->getPost('confirm_password');

    if (!empty($_pass_1) && !empty($_pass_2) && $_pass_1 != $_pass_2) {
        $objValid->add2Errors('password_mismatch');
    }

    $email = $objForm->getPost('email');
    $user = $objUser->getByEmail($email);

    if (!empty($user)) {
        $objValid->add2Errors('email_duplicate');
    }

    if ($objValid->isValid()) {

        // add hash for activatinf account
        $objValid->_post['hash'] = mt_srand() . date('YmdHis') . mt_srand();
        // add registration date
        $objValid->_post['date'] = Helper::setDate();

        if ($objUser->addUser($objValid->_post, $objForm->getPost('password'))) {
            Helper::redirect('/?page=registered');
        } else {
            Helper::redirect('/?page=registered-failed');
        }
    }

}

require_once('_header.php'); ?>

<br/>
<br/>
<br/>
<!--<div class="container">-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        <div class="col-md-2">-->
<!--            <strong>-->
<!--                <a href="/" class="btn btn-success"><i class="fa fa-angle-double-left"-->
<!--                                                                               aria-hidden="true"></i>Cancel</a>-->
<!--            </strong>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-8">-->
<!---->
<!--            <div id="login-overlay" class="modal-dialog">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h4 class="modal-title" id="myModalLabel">Register</h4>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!---->
<!---->
<!--                        <div class="row">-->
<!---->
<!--                            <div class="col-md-12">-->
<!---->
<!--                                <form id="registerForm" method="POST">-->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="first_name"-->
<!--                                               class="col-xs-5 col-form-label">First Name</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('first_name'); ?>
<!--                                            <input type="text" class="form-control" name="first_name" id="first_name"-->
<!--                                                   value="--><?php //echo $objForm->stickyText('first_name'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="last_name"-->
<!--                                               class="col-xs-5 col-form-label">Last Name</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('last_name'); ?>
<!--                                            <input type="text" class="form-control" name="last_name" id="last_name"-->
<!--                                                   value="--><?php //echo $objForm->stickyText('last_name'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="address_1"-->
<!--                                               class="col-xs-5 col-form-label">Address 1</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('address_1'); ?>
<!--                                            <input type="text" class="form-control" name="address_1" id="address_1"-->
<!--                                                   value="--><?php //echo $objForm->stickyText('address_1'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="address_2"-->
<!--                                               class="col-xs-5 col-form-label">Address 2</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('address_2'); ?>
<!--                                            <input type="text" class="form-control" name="address_2" id="address_2"-->
<!--                                                   value="--><?php //echo $objForm->stickyText('address_2'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="town"-->
<!--                                               class="col-xs-5 col-form-label">Town</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('town'); ?>
<!--                                            <input type="text" class="form-control" name="town" id="town" value="--><?php //echo $objForm->stickyText('town'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="county"-->
<!--                                               class="col-xs-5 col-form-label">County</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('county'); ?>
<!--                                            <input type="text" class="form-control" name="county" id="county" value="--><?php //echo $objForm->stickyText('county'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="country"-->
<!--                                               class="col-xs-5 col-form-label">Country</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('country'); ?>
<!--                                            --><?php //echo $objForm->getCountriesSelect(149); ?>
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="email"-->
<!--                                               class="col-xs-5 col-form-label">Email</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('email'); ?>
<!--                                            --><?php //echo $objValid->validate('email_duplicate'); ?>
<!--                                            <input type="text" class="form-control" name="email" id="email" value="--><?php //echo $objForm->stickyText('email'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="password"-->
<!--                                               class="col-xs-5 col-form-label">Password</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('password'); ?>
<!--                                            --><?php //echo $objValid->validate('password_mismatch'); ?>
<!--                                            <input type="password" class="form-control" name="password" id="password"-->
<!--                                                   value="--><?php //echo $objForm->stickyText('password'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="confirm_password"-->
<!--                                               class="col-xs-5 col-form-label">Confirm Password</label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            --><?php //echo $objValid->validate('confirm_password'); ?>
<!--                                            <input type="password" class="form-control" name="confirm_password"-->
<!--                                                   id="confirm_password" value="--><?php //echo $objForm->stickyText('confirm_password'); ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="submit" class="col-xs-5 col-form-label"></label>-->
<!--                                        <div class="col-xs-7">-->
<!--                                            <button type="submit" name="submit"-->
<!--                                                    class="btn btn-success btn-block">Register</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->


</body>
</html>