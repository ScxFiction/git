<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scxripts Fiction Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom style for template -->
    <link href="<?php echo BASE_URL; ?>templates/css/custom.css" rel="stylesheet">

</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role= "navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Scxripts <span class="glyphicon glyphicon-equalizer"></span></a> 
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="register.php">Create An Account</a></li>
                    <li><a href="create.php">Create Topic</a></li>
                </ul>
            </div> <!--/.nav-collapse -->
        </div>
    </div> <!-- Navbar section header -->

    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-col">
                        <div class="block">
                            <h1 class="pull-left">Welcome to Exercise  <span class="glyphicon glyphicon-send">Forum</span> </h1>
                            <h4 class="navbar-right">A simple PHP forum engine</h4>
                            <div class="clearfix"></div>
                            <hr/> <!-- line break before topics -->