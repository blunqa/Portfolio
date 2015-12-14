<?php 

include("config.php");
require_once("functions.php");
include("includes/iheader.php");
SSLon();

if(empty($_GET['portfolio'])) {
include("includes/register.php");
} else {
    
    include('vportfolio.php');
}
include("includes/ifooter.php"); 

?>
