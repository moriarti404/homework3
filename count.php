<?php
$brick = [$_POST['x-side'], $_POST['y-side'], $_POST['z-side']];
$hole = [$_POST['a-side'], $_POST['b-side']];

function check_size($brick, $hole) {
    sort($brick);
    sort($hole);
    if(($hole[0] >= $brick[0]) and ($hole[1] >= $brick[1])){
        echo "The brick will pass through the hole";
    } else {
        echo "The brick will not pass through the hole";
    }
    return(NULL);
}
print_r(check_size($brick, $hole));
?>