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

$objCase = new Cases();

if ($objForm->isPost('name')) {

    $objValid->_expected = array(
        'name',
        'summary'
    );

    $objValid->_required = array(
        'name',
        'summary'
    );

    if ($objValid->isValid()) {
        if ($objCase->addCase($objValid->_post)) {
            $objUpload = new Upload();

            if ($objUpload->upload(UPLOAD_PATH)) {

//                $fp = fopen(ROOT_PATH . DS . "log" . DS . "error.log", 'a');
//                fwrite($fp, $objUpload->_names[0]);
//                fclose($fp);

//                $objCase->updateCase(array('pdf' => $objUpload->_names[0]), $objCase->_id);
//                Helper::redirect('/');
//            } else {
//                Helper::redirect('/admin/?page=error');
            }
        } else {
            Helper::redirect('/admin/?page=error');
        }
    }
}

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
                    <label for="summary"
                           class="col-xs-5 col-form-label">Summary</label>
                    <div class="col-xs-7">
                        <?php echo $objValid->validate('summary'); ?>
                        <input type="text" class="form-control" name="summary" id="summary"
                               value="<?php echo $objForm->stickyText('summary'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pdf"
                           class="col-xs-5 col-form-label">PDF</label>
                    <div class="col-xs-7">
                        <?php echo $objValid->validate('pdf'); ?>
                        <input type="file" name="pdf" id="pdf" size="30">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="submit" class="col-xs-5 col-form-label"></label>
                    <div class="col-xs-7">
                        <button type="submit" name="submit"
                                class="btn btn-success btn-block">Submit
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
