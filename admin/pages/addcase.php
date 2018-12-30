<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/29/2018
 * Time: 6:27 PM
 */
if (Login::isLogged(Login::$_login_admin)) {
    Helper::redirect(Login::$_dashboard_admin);
}

$objForm = new Form();
$objValid = new Validation($objForm);

require_once('template/_header.php')
?>

<div class="container">

    <div class="row">


        <div class="col-md-8">


            <form id="caseForm" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="name"
                           class="col-xs-5 col-form-label">Case Name</label>
                    <div class="col-xs-7">
                        <?php echo $objValid->validate('name'); ?>
                        <input type="text" class="form-control" name="name" id="name"
                               value="<?php echo $objForm->stickyText('name'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="last_name"
                           class="col-xs-5 col-form-label">PDF</label>
                    <div class="col-xs-7">
                        <?php echo $objValid->validate('pdf'); ?>
                        <input type="pdf" name="pdf" id="pdf" size="30">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="submit" class="col-xs-5 col-form-label"></label>
                    <div class="col-xs-7">
                        <button type="submit" name="submit"
                                class="btn btn-success btn-block">Register
                        </button>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
<?php
require_once('template/_header.php')
?>
