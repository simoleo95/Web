<<<<<<< Updated upstream
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 10:32:26
=======
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 11:51:02
>>>>>>> Stashed changes
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145981807c738a01-79710874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e6566d21414ab7baa89c20c13fd5cb6ab6a1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\home.tpl',
<<<<<<< Updated upstream
      1 => 1507797068,
=======
      1 => 1507801859,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145981807c738a01-79710874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5981807c752ab0_30291969',
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
<?php if ($_valid && !is_callable('content_5981807c752ab0_30291969')) {function content_5981807c752ab0_30291969($_smarty_tpl) {?><!DOCTYPE html>
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
	
	<link href="templates/templates/css/ricerca.css" rel="stylesheet">
	
	<link href="templates/templates/css/scorri.css" rel="stylesheet">

    <link href="templates/templates/css/popup.css" type="text/css" rel="stylesheet">

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
    <nav id= speriamo class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>						
                    </li>	
					<li>
						<a>Categorie</a>
					 
					  <ul>
						  <li><a href="index.php?controller=categoria&task=seleziona&group=Elettronica" class="list-group-item">Elettronica</a></li> 
						  <li><a href="index.php?controller=categoria&task=seleziona&group=Sport" class="list-group-item">Sport</a></li>
						  <li><a href="index.php?controller=categoria&task=seleziona&group=Hobby" class="list-group-item">Hobby</a></li> 
						  <li><a href="index.php?controller=categoria&task=seleziona&group=Immobili" class="list-group-item">Immobili</a></li>
				    </li> 
					  </ul>
					
                    </li>
                				
               </ul>
				
            </div>
            <!-- /.navbar-collapse -->
			
        </div>
        <!-- /.container -->
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
				
				<p class="lead">Ricerca </p>
				<div id="cerca-box" class="ricerca" onmouseover="coloreboxcerca('EEEEEE')" onmouseout="coloreboxcerca('999999')">
                    <form  id = myform method="post" action="index.php">
					  <input type="hidden" name="controller" value="asta" />
                      <input type="hidden" name="task" value="ricerca" />
                      <input id="cerca-query" type="text" name="testo" class="query"/>						   
                      <input type="image" src="templates/templates/images/bt_cerca.png"/>
                     </form>
                </div>
				
                
                
            </div>	

            <!--    <div class="row carousel-holder">

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

                </div> -->
            <div id="mainContent">
                <?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>

            </div>
           
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
    <script src="templates/templates/js/scorri.js"></script>
    <script src="templates/templates/js/scroll.js"></script>
    <script src="templates/templates/js/popup.js"></script>

</body>

</html>
<?php }} ?>