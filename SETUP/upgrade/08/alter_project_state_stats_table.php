<?php

$relPath='../../../pinc/';
include_once($relPath.'base.inc');

header('Content-type: text/plain');

// ------------------------------------------------------------

echo "Adding a column to project_state_stats...\n";
$sql = "
    ALTER TABLE project_state_stats
        ADD COLUMN num_pages INT(12) NOT NULL DEFAULT 0 AFTER num_projects; 
";

echo "$sql\n";

mysqli_query(DPDatabase::get_connection(), $sql) or die( mysqli_error(DPDatabase::get_connection()) );

// ------------------------------------------------------------

echo "\nDone!\n";


// vim: sw=4 ts=4 expandtab
?>
