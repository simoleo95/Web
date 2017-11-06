<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$title}</title>

    <!-- Bootstrap Core CSS -->
    <link href="templates/templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templates/templates/css/shop-homepage.css" type="text/css" rel="stylesheet">
	<link href="templates/templates/css/ricerca.css" type="text/css" rel="stylesheet">
	<link href="templates/templates/css/scorri.css" type="text/css" rel="stylesheet">
    <link href="templates/templates/css/popup.css" type="text/css" rel="stylesheet">
    <link href="templates/templates/css/timeTo.css" type="text/css" rel="stylesheet"/>
    <link href="templates/templates/css/form.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
   <link href="templates/templates/css/rating.css" type="text/css" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Per il popup -->
    <div id="example-popup" class="popup">
        <div class="popup-body">
            <span class="popup-exit"></span>
            <div class="popup-content">

            </div>
        </div>
    </div>
    <div class="popup-overlay"></div>


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
                <a class="navbar-brand" href="index.php">{$title}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id=scorri class="nav navbar-nav">
                    <li>
                        <a>Categorie</a>

                        <ul>
                            <li><a href="index.php?controller=categoria&task=seleziona&group=Elettronica" class="list-group-item">Elettronica</a></li>
                            <li><a href="index.php?controller=categoria&task=seleziona&group=Sport" class="list-group-item">Sport</a></li>
                            <li><a href="index.php?controller=categoria&task=seleziona&group=Hobby" class="list-group-item">Hobby</a></li>
                            <li><a href="index.php?controller=categoria&task=seleziona&group=Immobili" class="list-group-item">Immobili</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
               </ul>
                <div class="col-sm-3 col-md-4 pull-right">
                    {*<div id="cerca-box" class="ricerca">*}
                        <form class="navbar-form" role="search" method="post" action="index.php">
                            <div class="input-group">
                                <input type="hidden" name="controller" value="asta" />
                                <input type="hidden" name="task" value="ricerca" />
                                <input id="cerca-query" style="width: 300px; border-radius: 3px 0 0 3px; background: #444; border: 0; color: #ccc;" type="text" name="testo" class="query form-control" placeholder="Cerca"/>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" style="color: #999; background: #444; border-color: #444;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    {*</div>*}
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div  class="row">

            <div class="col-md-3"/>
                {if isset($username)}
                <p style="text-align: center">Benvenuto <b>{$username}</b>!</p>
                {/if}
                {if isset($insMieAste)}
                    {$insMieAste}
                {/if}
                {if isset($insAnnuncio)}
                    {$insAnnuncio}
                {/if}
                {if isset($login)}
                    {$login}
                {/if}
                {if isset($logout)}
                    {$logout}
                {/if}
            </div>

            <div id="mainContent">
				
				
                
                    {$mainContent}
                
			
				
		</div>

    </div>




	<!-- /.container -->

    <div class="container">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <!--<p>Copyright &copy; Your Website 2014</p>-->
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


    <script src="templates/templates/jquery-libs/jquery-3.2.1.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="templates/templates/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="templates/templates/js/jquery.diyslider.min.js"></script>
    <script src="templates/templates/js/ricerca.js"></script>
    <script src="templates/templates/js/jquery.timeTo.js"></script>
    <script src="templates/templates/js/scorri.js"></script>
    <script src="templates/templates/js/scroll.js"></script>
    <script src="templates/templates/js/slider.js"></script>
    <script src="templates/templates/js/popup.js"></script>
    <script src="templates/templates/js/rating.js"></script>
</body>

</html>
