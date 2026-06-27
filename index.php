<?php
/**
 * @package DCISTEM PHP Framework
 * @subpackage Index
 * 
 * @author Eka Rafi Dimasyono <rafee12@yahoo.com>
*/
define("PANDORA", 1);
$errorlevel=error_reporting();
error_reporting($errorlevel & ~E_NOTICE);
//error_reporting($error_level);
include "includes/libraries/core.php";
Core::init();
?>