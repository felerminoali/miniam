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

Login::restrictFront();

require_once('template/_header.php')
?>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
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

            <table id="test_table" class="display" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
            </table>

        </main>
    </div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/datatables.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    $('document').ready(function()
    {
        $.ajax({
            type : 'POST',
            url  : '/mod/test.php',
            dataType: 'json',
            cache: false,
            success :  function(result)
            {
                //pass data to datatable
                console.log(result); // just to see I'm getting the correct data.
                $('#test_table').DataTable({
                    "searching": false, //this is disabled because I have a custom search.
                    "aaData": [result], //here we get the array data from the ajax call.
                    "aoColumns": [
                        { "sTitle": "ID" },
                        { "sTitle": "Name" },
                        { "sTitle": "Email" }
                    ] //this isn't necessary unless you want modify the header
                      //names without changing it in your html code.
                      //I find it useful tho' to setup the headers this way.
                });
            }
        });
    });
</script>
<?php
//require_once('template/_footer.php')
//?>



</body>
</html>

