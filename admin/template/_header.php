
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Dashboard Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datatables.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<!--    <link href="dashboard.css" rel="stylesheet">-->
<!--    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/3D2BD7C9-A21D-5B4B-BADB-315F5013C30C/main.js" charset="UTF-8"></script></head>-->

<body>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
    <a class="navbar-brand" href="/admin/">Dashboard</a>
        </div>
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="/admin/?page=logout">Logout</a>-->
<!--            </li>-->
<!--        </ul>-->
        <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="/admin/?page=logout">Logout</a></li>
        </ul>
    </div>
    </div>
</nav>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">


            <ul class="nav nav-pills nav-fill flex-column">

                <li class="nav-">
                    <a class="navbar-link active" href="/admin/">Dashboard</a>
                </li

                <li class="nav-item">
                    <a class="nav-link" href="/admin/?page=listcase">Manage Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Laws</a>
                </li>
            </ul>
        </nav>
