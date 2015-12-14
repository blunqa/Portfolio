<?php 

include("config.php");
require_once("functions.php");
include("includes/iheader.php");
SSLon();

if(empty($_GET['portfolio']) && empty($_GET['projekti'])) {
    include("includes/register.php");
} else if(empty($_GET['projekti'])) {
    include('vportfolio.php');
} else {
    include('projekti.php');
}
include("includes/ifooter.php"); 

?>
