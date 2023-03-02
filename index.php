<?php
define('_ROOTPATH_', __DIR__);


 spl_autoload_register();

 use App\Controller\Controller;                     // 1) notre requete arrive sur INDEX, dans index on fait un nouveau controlleur principal ; on appelle route DIRECTION controller.php

$controller = new Controller();
$controller->route();

?>