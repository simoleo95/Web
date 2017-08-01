<?php
    require_once 'includes/autoload.inc.php';
    require_once 'includes/config.inc.php';

 $a=new FAsta();
 $t=$a->load("1");
 echo $t->userC;
?>