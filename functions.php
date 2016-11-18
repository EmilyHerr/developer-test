<?php
global $count;
if ($count > 0) {
    
} else {
    $count = 1;
}
function byTheNumbers() {
    global $count;
    
    $output = '<div class="numbers">';
    $output .= $count;
    $output .= '</div>';
    $count++;
    echo $output;
}
?>