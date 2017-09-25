<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 25/09/2017
 * Time: 02:09
 */

if(!$_POST['page']) die("0");
$page = $_POST['page'];
if(file_exists('pages/'.$page.'.php'))
    echo file_get_contents('pages/'.$page.'.php');
else echo 'There is no such page! ', $page;
?>