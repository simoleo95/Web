<?php /* Smarty version Smarty-3.1.13, created on 2017-08-08 17:34:00
         compiled from "C:\xampp\htdocs\prova\Lastminute\templates\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20754421725989d9e8d9a005-29227818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8926d1e01e6be3ae6a8d46f2dbdd69a172f4f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prova\\Lastminute\\templates\\templates\\home.tpl',
      1 => 1502191318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20754421725989d9e8d9a005-29227818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'login' => 0,
    'logout' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5989d9e8d9df73_23101832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5989d9e8d9df73_23101832')) {function content_5989d9e8d9df73_23101832($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="templates/templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templates/templates/css/shop-homepage.css" rel="stylesheet">

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
                <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Home</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
					<a href="index.php?controller=registra" class="list-group-item">Registrazione</a>
                </div>
				<?php echo $_smarty_tpl->tpl_vars['login']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['logout']->value;?>

            </div>	
			
			 <div class="col-md-9">


                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				

                <div class="row">

                    <?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>

					

                </div>

            </div>

        </div>

    </div>
	
	
	
    
	<!-- /.container -->

    <div class="container">

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
    <script src="templates/templates/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="templates/templates/js/bootstrap.min.js"></script>

</body>

</html>
<?php }} ?>