<?php

$con = mysqli_connect('127.0.0.1','root','','login_db');


function row_count($result){
    
    return mysqli_num_rows($result);

}
function escape($string) {

    global $con;
    return mysqli_real_escape_string($con, $string);
}


function query($query) {

    global $con;
    $result = mysqli_query($con, $query);

    return $result;

}

function confirm($result){
    global $con;

    if(!$result){

        die("Query Failed". mysqli_error($con));
    }
}
function fetch_array($result){

    global $con;

    return mysqli_fetch_array($result);
}


?>

<?php include("includes/footer.php") ?>