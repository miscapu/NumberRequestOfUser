<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 28/07/2018
 * Time: 23:02
 */
//Starting session with session_start
session_start();
//establishing control structures in script with superglobal session include data of number
//of visits of user
if (empty($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else{
    $_SESSION['cpunt']++;
}
?>
