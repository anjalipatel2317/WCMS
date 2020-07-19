<?php
if(!isset($_SESSION)){
    session_start();
}

spl_autoload_register( function ( $class_name ) {
    include "Admin/Model/".$class_name . '.class.php';
//    echo "Admin/Model/".$class_name . '.class.php';
} );
?>