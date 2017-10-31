<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 21/09/2017
 * Time: 17:06
 */

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../nine.ico">

    <title>Calslaan 9 C</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/Supernice.css" rel="stylesheet">

</head>



<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Cal93</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#home" id="home-link">Home</a></li>
            <li><a href="#corvee" id="corvee-link" >Corvee</a></li>
            <li><a href="#page2" id="page2-link">Page 2</a></li>
            <li><a href="#page3" id="page3-link">Page 3</a></li>
        </ul>
    </div>
</nav>

<?php
if ( isset($_POST["form_code"])) {
    include 'pages/corvee_post_handler.php';
}
?>

<div id="main-content">
</div>
<script type="text/javascript" src="js/page_loader.js"></script>



</body>
</html>




