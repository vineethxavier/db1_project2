<?php
session_start();
mysql_connect("localhost:3306", "root", "admin") or die ("Oops! Server not connected"); // Connect to the host
mysql_select_db("project") or die ("Oops! DB not connected"); // select the database
?>