<?php

/**
 * PHP filter module
 * sanitize input variables using filter_input() and sanitize filters
 */
//creating simple POST form
$formPOST = <<<FORM
<form method="POST">
Enter string for url encoding sanitization: <input type="text" name="string1" value="{$_POST['string1']}">
<input type="submit" name="validate" value="validate">
</form>
FORM;

//creating simple GET form
$formGET = <<<FORM
<form method="GET">
Enter string for string sanitization(strip tags): 
<input type="text" name="string2" value="{$_GET['string2']}">
<input type="submit" name="validate" value="validate">
</form>
FORM;

echo '<center>';
echo $formPOST;
echo $formGET;

//POST validation
if (isset($_POST['validate']) && trim($_POST['string1']) != '') {
    //validate POST input
    $sanitizePOST = filter_input(INPUT_POST, 'string1', FILTER_SANITIZE_STRING);
    echo '<div style="background-color:yellow;padding:10px;color:#000;font-size:16px;">POST METHOD</div>';

    echo '<div style="background-color:green;padding:10px;color:#fff;font-size:16px;">
           <b>' . $_POST['string1'] . '</b> sanitized with <i>FILTER_SANITIZE_STRING</i> = 
           <b>' . $sanitizePOST . '</b>
          </div>';
}
//GET validation
elseif (isset($_GET['validate']) && trim($_GET['string2']) != '') {
    //validate GET input
    $sanitizeGET = filter_input(INPUT_GET, 'string2', FILTER_SANITIZE_STRING);
    echo '<div style="background-color:yellow;padding:10px;color:#000;font-size:16px;">GET METHOD</div>';
    echo '<div style="background-color:green;padding:10px;color:#fff;font-size:16px;">
           <b>' . $_GET['string1'] . '</b> sanitized with <i>FILTER_SANITIZE_STRING</i> = 
           <b>' . $sanitizeGET . '</b>
          </div>';
}
echo '</center>';
?>