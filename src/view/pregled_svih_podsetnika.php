<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notifikator</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo MY_PATH ?>web/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo MY_PATH ?>web/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo MY_PATH ?>web/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Notifikator</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="<?php echo MY_PATH ?>web/index.php/Index/prelistavanje">Pregled svih podsetnika</a>
                </li>

                <li>
                    <a href="<?php echo MY_PATH ?>web/index.php/Index/dodavanje">Dodaj novi podsetnik</a>
                </li>

                <li>
                    <a href="<?php echo MY_PATH ?>web/index.php/Index/logout">Izloguj se</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->


<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                MOJI PODSETNICI
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <?php $i = 0;
    foreach ($podsetnici as $podsetnik) { ?>
        <?php if ($i % 3 == 0) echo("<div class='row'>");
        $i++; ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i><b><?php echo $podsetnik['naziv']; ?></h4>
                </div>
                <div class="panel-body">
                    <p><?php echo $podsetnik['opis']; ?></p>
                    <hr>
                    <p><?php echo $podsetnik['vreme']; ?></p>
                    <hr>
                    <p><?php if ($podsetnik['ponedeljak'] == 1) echo 'PONEDELJAK' ?></p>

                        <p><?php if ($podsetnik['utorak'] == 1) echo 'UTORAK' ?></p>

                        <p><?php if ($podsetnik['sreda'] == 1) echo 'SREDA' ?></p>

                        <p><?php if ($podsetnik['cetvrtak'] == 1) echo 'CETVRTAK' ?></p>

                        <p><?php if ($podsetnik['petak'] == 1) echo 'PETAK' ?></p>

                        <p><?php if ($podsetnik['subota'] == 1) echo 'SUBOTA' ?></p>

                        <p><?php if ($podsetnik['nedelja'] == 1) echo 'NEDELJA' ?></p>

                        <hr>

                    <a href="<?php echo MY_PATH . 'web/index.php/Index/brisanje/' . $podsetnik['id_podsetnik']; ?>" class="btn btn-default"> Obrisi </a>
                </div>
            </div>
        </div>
        <?php if ($i % 3 == 0 ) echo("</div>"); ?>
    <?php } ?>




    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo MY_PATH ?>web/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo MY_PATH ?>web/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
