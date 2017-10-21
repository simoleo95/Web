<?php /* Smarty version Smarty-3.1.13, created on 2017-10-21 17:23:39
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1865159eb587d6c09a1-87768354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e6566d21414ab7baa89c20c13fd5cb6ab6a1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\home.tpl',
      1 => 1508599415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865159eb587d6c09a1-87768354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb587d70bc55_43833499',
  'variables' => 
  array (
    'title' => 0,
    'username' => 0,
    'insMieAste' => 0,
    'insAnnuncio' => 0,
    'login' => 0,
    'logout' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb587d70bc55_43833499')) {function content_59eb587d70bc55_43833499($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="templates/templates/css/shop-homepage.css" type="text/css" rel="stylesheet">
	<link href="templates/templates/css/ricerca.css" type="text/css" rel="stylesheet">
	<link href="templates/templates/css/scorri.css" type="text/css" rel="stylesheet">
    <link href="templates/templates/css/popup.css" type="text/css" rel="stylesheet">
    <link href="templates/templates/css/timeTo.css" type="text/css" rel="stylesheet"/>
    <link href="templates/templates/css/form.css" type="text/css" rel="stylesheet"/>

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
                <a class="navbar-brand" href="index.php"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
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
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div  class="row">

            <div class="col-md-3"/>
                <?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
                <p style="text-align: center">Benvenuto <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>!</p>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['insMieAste']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['insMieAste']->value;?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['insAnnuncio']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['insAnnuncio']->value;?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['logout']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['logout']->value;?>

                <?php }?>
            </div>

            <div id="mainContent">
				
				
                
                    <?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>

                
			
				
        </div>

    </div>




	<!-- /.container -->

    <div class="container">



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


    <script src="templates/templates/jquery-libs/jquery-3.2.1.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="templates/templates/js/bootstrap.min.js"></script>

	<script src="templates/templates/js/ricerca.js"></script>


    <!-- jQuery -->
    <script src="templates/templates/js/jquery.timeTo.js"></script>
    <script src="templates/templates/js/scorri.js"></script>
    <script src="templates/templates/js/scroll.js"></script>

    <script src="templates/templates/js/popup.js"></script>

</body>

</html>
<?php }} ?>