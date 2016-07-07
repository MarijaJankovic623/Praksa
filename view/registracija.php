<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo MY_PATH ?>view/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo MY_PATH ?>view/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo MY_PATH ?>view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.html">Uloguj se</a>
                </li>
                <li>
                    <a href="about.html">Registruj se</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>REGISTRUJ SE</h3>
            <form name="registracija" id="registracijaForm" novalidate>
                <div class="control-group form-group">

                    <div class="controls">
                        <label>Korisnicko ime:</label>
                        <input type="text" class="form-control" id="korisnickoime" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Lozinka:</label>
                        <input type="tel" class="form-control" id="lozinka" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>

                <div class="control-group form-group">

                    <div class="controls">
                        <label>Email adresa:</label>
                        <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Registruj se</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo MY_PATH ?>view/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo MY_PATH ?>view/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="<?php echo MY_PATH ?>view/js/jqBootstrapValidation.js"></script>
<script src="<?php echo MY_PATH ?>view/js/contact_me.js"></script>

</body>

</html>

