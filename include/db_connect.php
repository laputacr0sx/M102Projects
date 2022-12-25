<?php

error_reporting(0);

function OpenCon()
{
    $dbhost = "sql200.epizy.com";
    $dbuser = "epiz_33167176";
    $dbpass = "2jsfD1pFz5P";
    $db = "epiz_33167176_project";

    ($conn = new mysqli($dbhost, $dbuser, $dbpass, $db)) or
        die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}
