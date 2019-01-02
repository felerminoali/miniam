<?php

Login::restrictAdmin();

require_once('template/_header.php')
?>


<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1>Manage Laws</h1>

    <a href="/admin/?page=addlaw" class="btn btn-success" style="float: right;"><i class="fa fa-angle-double-left"
                                                                                    aria-hidden="true"></i>Add law</a>
    <div id="alert_message"></div>
    <table id="law_table" class="display" style="width: 100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>URL</th>
            <th>year</th>
            <th></th>
        </tr>
        </thead>
    </table>

</main>
</div>
</div>

<?php
require_once('template/_footer.php')
?>

