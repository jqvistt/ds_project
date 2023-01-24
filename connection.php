<?php

$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "digishop_cico";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

die("There was an error connecting to the service. Contact system administrator if problem persists.");

}