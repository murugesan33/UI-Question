<?php
// for filters that accept options, use this format
$options = array(
    'options' => array(
        'default' => 3, // value to return if the filter fails
        // other options here
        'min_range' => 0
    ),
    'flags' => FILTER_FLAG_ALLOW_OCTAL,
);
$var = filter_var('0755', FILTER_VALIDATE_INT, $options);

$var = filter_var('asasassdd', FILTER_SANITIZE_NUMBER_INT);
echo $var;

?>