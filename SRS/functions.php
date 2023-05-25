<?php

require_once("job_connection.php");

function display_data()
{
    global $con;
    $query = " select * from postjobs ";
    $result = mysqli_query($con, $query);
    return $result;
}

?>