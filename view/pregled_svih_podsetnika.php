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
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
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
                <li class="active">
                    <a href="<?php echo MY_PATH ?>index.php/Index/prelistavanje">Pregled svih podsetnika</a>
                </li>

                <li>
                    <a href="<?php echo MY_PATH ?>index.php/Index/dodavanje">Dodaj novi podsetnik</a>
                </li>

                <li>
                    <a href="<?php echo MY_PATH ?>index.php/Index/logout">Izloguj se</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

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

                    <a href="#" class="btn btn-default"> Izmeni </a>
                </div>
            </div>
        </div>
        <?php if ($i % 3 == 0 ) echo("</div>"); ?>
    <?php } ?>


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

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>

