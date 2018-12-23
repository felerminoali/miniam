`       <?php
/**
 * Created by PhpStorm.
 * User: feler
 * Date: 11/21/2016
 * Time: 7:20 PM
 */
require_once('_header'); ?>


<br/>
<br/>
<br/>

<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title" id="myModalLabel"><?php echo __('registered_success', 'default'); ?></h1>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="col-xs-12">

                    <p><?php echo __('thanks_for_register', 'default'); ?><br/>
                        <?php echo __('registration_instruction', 'default'); ?>
                    </p>

                    <p><a href="/?page=exams" class="btn btn-info btn-block"><?php echo __('back','default');?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
