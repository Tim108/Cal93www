<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 21/09/2017
 * Time: 17:17
 */
?>

<?php
$tasks = array('woonkamer', 'douches', 'wc', 'kattenbak', 'hal');

echo '<div class="container">';

for ($i = 0; $i < count($tasks); $i++) {
    if ($i % 3 == 0) {
    }
    echo '<div class="row">';

    echo '<div class="col-md-4">';
    echo '<h2>', $tasks[$i], '</h2>';
    echo '<p>', $i, '--', $i % 3, '</p>';
//        echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
//                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
//                euismod. Donec sed odio dui. </p>';
//        echo '<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>';
    echo '</div>';

    if ($i % 3 == 0) {
        echo '</div>';
    }
}
echo '<hr></div>';
?>
