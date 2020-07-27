<?php

//Custom shortcode for qoute left
function custom_qoute_l($atts, $content = null) {
    return '<q class="qoute-l">' . $content . '</q>';
}

add_shortcode('qoute-l', 'custom_qoute_l');

//Custom shortcode for qoute right
function custom_qoute_r($atts, $content = null) {
    return '<q class="qoute-r">' . $content . '</q>';
}

add_shortcode('qoute-r', 'custom_qoute_r');