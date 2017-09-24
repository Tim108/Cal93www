<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/09/2017
 * Time: 15:55
 */


// the stuff i want:
$tasks = array();
$descriptions = array();
$histories = array();
$codes = array();


// connect with database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corve";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// get tasks and descriptions
$sql = "SELECT name, description FROM chores";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($tasks, $row["name"]);
        $descriptions[$row["name"]] = $row["description"];
    }
}

//get histories and codes
foreach ($tasks as $task) {
    $single_history = array();
    $subsql = "(SELECT records.* FROM records, chores WHERE chores.name = \"" . $task .  "\" AND records.chore_id = chores.id ORDER BY records.id DESC LIMIT 6)";
    $sql = "SELECT rooms.name FROM " . $subsql . " r, rooms WHERE r.room_id = rooms.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($single_history, $row["name"]);
        }
    }
    $histories[$task] = $single_history;

    $sql = "SELECT r.code FROM " . $subsql . " r LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $codes[$task] = $row["code"];
        }
    }
}

$conn->close();
?>