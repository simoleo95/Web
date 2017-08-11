<?php
    global $config;

    // DATABASE
    $config['mysql']['dbms']='localhost';
    $config['mysql']['dbname']='web';
    $config['mysql']['host']='root';
    $config['mysql']['password']='';

    // SMARTY
    $config['debug']=false;
    $config['smarty']['template_dir'] =
        'C:\xampp\htdocs\Web\Lastminute\templates\templates';
    $config['smarty']['compile_dir'] =
        'C:\xampp\htdocs\Web\Lastminute\templates\templates_c\'';
    $config['smarty']['config_dir'] =
        'C:\xampp\htdocs\Web\Lastminute\templates\configs\'';
    $config['smarty']['cache_dir'] =
        'C:\xampp\htdocs\Web\Lastminute\templates\cache\'';
    
function debug($var){
    global $config;
    if ($config['debug']){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}
?>
