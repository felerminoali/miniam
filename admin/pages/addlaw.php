<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/29/2018
 * Time: 6:27 PM
 */

Login::restrictAdmin();

$objForm = new Form();
$objValid = new Validation($objForm);

$objLaw = new Laws();

if ($objForm->isPost('name')) {

    $objValid->_expected = array(
        'name',
        'year'
    );

    $objValid->_required = array(
        'name',
        'year'
    );

    if ($objValid->isValid()) {
        if ($objLaw->addLaw($objValid->_post)) {
            $objUpload = new Upload();

            if ($objUpload->upload(ROOT_PATH . DS . "cases")) {

                $objLaw->updateLaw(array('url' => "cases".DS.$objUpload->_names[0]), $objLaw->_id);
                Helper::redirect('/admin/?page=listlaw');
            } else {
                Helper::redirect('/admin/?page=error');
            }
        } else {
            Helper::redirect('/admin/?page=error');
        }
    }
}

require_once('template/_header.php')
?>

<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1>Add Case</h1>

    <div class="container">




        <div class="row">


            <div class="col-md-8">


                <form id="caseForm" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="name"
                               class="col-xs-5 col-form-label">Law </label>
                        <div class="col-xs-7">
                            <?php echo $objValid->validate('name'); ?>
                            <input type="text" class="form-control" name="name" id="name"
                                   value="<?php echo $objForm->stickyText('name'); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="summary"
                               class="col-xs-5 col-form-label">Year</label>
                        <div class="col-xs-7">
                            <?php echo $objValid->validate('year'); ?>
                            <input type="text" class="form-control" name="year" id="year"
                                   value="<?php echo $objForm->stickyText('year'); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pdf"
                               class="col-xs-5 col-form-label">PDF</label>
                        <div class="col-xs-7">
                            <?php echo $objValid->validate('pdf'); ?>
                            <input type="file" name="url" id="url" size="30">
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
</main>
<?php
require_once('template/_header.php')
?>
