<?php  
    require "db_config.php";
    require "ProjectDatabase.php";

// Database query
$sql = "SELECT * FROM projects;";
$projects = ProjectDatabase::getDataFromSQL($sql);

echo json_encode($projects);

?>