<?php

DEFINE ('DB_HOST', 'localhost'); //Database server -- Typically "localhost"
DEFINE ('DB_USER', 'group4cc_admin'); //Database User Name
DEFINE ('DB_PASSWORD', 'B(,65hYvc+fv'); //Database User Password
DEFINE ('DB_NAME', 'group4cc_Roots_Tech'); //Database Name


//This connects us to the database schul253_week9ex
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to SOIS MySQL server with error: ' . mysqli_connect_error());







?>