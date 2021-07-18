<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 12/09/2017
 * Time: 10:11
 */
foreach ($_SERVER as $key => $value) {
    printf("\$_SERVER['%s'] = %s<br>" ,
        htmlspecialchars($key), htmlspecialchars($value)) ;
}


?>