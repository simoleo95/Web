<?php /* Smarty version Smarty-3.1.13, created on 2017-08-05 10:26:17
         compiled from "C:\xampp\htdocs\Lastminute\templates\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38199088598303689ccbe9-09808263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354670e197bccf0348ceaa3612802c9f24f5ed27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lastminute\\templates\\templates\\home.tpl',
      1 => 1501921575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38199088598303689ccbe9-09808263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598303689cfc26_13679561',
  'variables' => 
  array (
    'title' => 0,
    'displayL' => 0,
    'coloreU' => 0,
    'coloreP' => 0,
    'errore' => 0,
    'displayR' => 0,
    'erroreR' => 0,
    'displayC' => 0,
    'erroreC' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598303689cfc26_13679561')) {function content_598303689cfc26_13679561($_smarty_tpl) {?><!DOCTYPE html>
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
                    <a href="#" class="list-group-item">categoria 1</a>
                    <a href="#" class="list-group-item">categoria 2</a>
                    <a href="#" class="list-group-item">categoria 3</a>
                </div>
                <h4 id="stringa" class="message" onclick="mostra()">Premi qui per registrarti</h4>

                <div class="login-page">
                    <div class="form">
                        <form class="login-form" method="POST" style="display:<?php echo $_smarty_tpl->tpl_vars['displayL']->value;?>
">
                            <input type="text" placeholder="username" name="username" 
                            style="background: <?php echo $_smarty_tpl->tpl_vars['coloreU']->value;?>
"/>
                            <input type="password" placeholder="password" name="password" style="background: <?php echo $_smarty_tpl->tpl_vars['coloreP']->value;?>
"/>
                            <button name="entra">login</button>
                            <input type="text" name="errore" id="errore" value="<?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
"
                            />
                        </form>
  
                        <form class="registra-form" style="display:<?php echo $_smarty_tpl->tpl_vars['displayR']->value;?>
" method="POST">
                            <input type="text" placeholder="username" name="usernameR"
                            style="background: <?php echo $_smarty_tpl->tpl_vars['coloreU']->value;?>
"> 
                            <input type="password" placeholder="password" name="passwordR" style="background: <?php echo $_smarty_tpl->tpl_vars['coloreP']->value;?>
"/> 
                            <input type="text" placeholder="nome" name="nomeR"> 
                            <input type="text" placeholder="cognome" name="cognomeR"/>
                            <input type="text" placeholder="email" name="emailR"> 
                            <button name="registra">registrati</button>  
                            <input type="text" name="erroreR" id="erroreR" value="<?php echo $_smarty_tpl->tpl_vars['erroreR']->value;?>
"/>
                        </form>
                
                        <form class="cancella-form" method="POST" style="display:<?php echo $_smarty_tpl->tpl_vars['displayC']->value;?>
">
                            <input type="text" placeholder="username" name="username" 
                            style="background: <?php echo $_smarty_tpl->tpl_vars['coloreU']->value;?>
"/>
                            <input type="password" placeholder="password" name="password" style="background: <?php echo $_smarty_tpl->tpl_vars['coloreP']->value;?>
"/>
                            <button name="cancella">cancella</button>
                            <input type="text" name="erroreC" id="erroreC" value="<?php echo $_smarty_tpl->tpl_vars['erroreC']->value;?>
"
                            />
                        </form>

                <h4 id="cancella" class="message" onclick="cancella()">Premi qui per cancellarti</h4>

                    </div>
                </div>
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

    <!-- Javascript -->
    <script>
    function mostra(){
        var a = document.getElementsByClassName('cancella-form');
        var x = document.getElementsByClassName('registra-form');
        var z = document.getElementsByClassName('login-form');
        var s = document.getElementById('stringa');
        var y = x[0].style.display;
        if(y == "none"){
            s.innerHTML = "Premi qui per loggare";
            for(var i =0; i<x.length; i++){
                x[i].style.display ="block";
                z[i].style.display ="none";
                a[i].style.display ="none";
            }
        }
        else{   
                s.innerHTML="Premi qui per registrarti";
                for(var i =0; i<x.length; i++){
                    x[i].style.display ="none";
                    z[i].style.display ="block";
                    a[i].style.display ="none";                    
            }
        }
    }
    function cancella(){
        var a = document.getElementsByClassName('cancella-form');
        var x = document.getElementsByClassName('registra-form');
        var z = document.getElementsByClassName('login-form');
        var s = document.getElementById('stringa');
        var y = a[0].style.display;
        if(y == "none"){
            for(var i =0; i<x.length; i++){
                a[i].style.display ="block";
                x[i].style.display ="none";
                z[i].style.display ="none";                
            }
        }
        else{    
                s.innerHTML = "Premi qui per registrarti";
                for(var i =0; i<x.length; i++){
                a[i].style.display ="none";
                x[i].style.display ="none";
                z[i].style.display ="block";  

            }
        }
    }
    </script>

</body>

</html>
<?php }} ?>