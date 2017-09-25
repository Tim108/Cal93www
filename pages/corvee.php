<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 21/09/2017
 * Time: 17:17
 */
?>

<?php
include 'corvee_database_connection.php';
include 'task_code_modal.php';
//include 'corvee_post_handler.php';

echo '<div class="container">';

for ($i = 0; $i < count($tasks); $i++) {

    if ($i % 3 == 0) {
        echo '<div class="row">';
    }

    echo '<div class="col-md-4">';
    echo '<h2>', $tasks[$i], '</h2>';
    echo '<h4>', $histories[$tasks[$i]][0][0], '</h4>';
    echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>';
    ?>
<div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">History
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <?php
            $task_history = $histories[$tasks[$i]];
            for ($h = 1; $h < count($task_history); $h++) {
                $red = "";
                if ($task_history[$h][1] == 0) {
                    $red = '<span style="alignment:right; color:#a00000;" class="glyphicon glyphicon-remove"></span>';
                }
                echo '<li><a>', $task_history[$h][0], $red, '</a></li>';
            }
            ?>
        </ul>
        <button class="btn btn-primary" data-toggle="modal" data-target="#task_code_modal" style="float: right;">Done did it!</button>
    </div>
</div>
    <?php
    echo '</div>';

    if ($i % 3 == 2) {
        echo '</div>';
    }
}
echo '</div><hr>';
?>
