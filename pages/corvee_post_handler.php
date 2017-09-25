<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/09/2017
 * Time: 21:43
 */

if (isset($_POST['form_code'])) {
    $chore_code = $_POST['form_code'];
    set_code_done($chore_code);
}

function set_code_done($code)
{
    // connect with database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "corve";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE records SET records.done_room_id=records.room_id WHERE records.code=\"" . $code . "\" AND DATE(records.end_date) > DATE(NOW());"; //
    $conn->query($sql);

    $conn->close();
}