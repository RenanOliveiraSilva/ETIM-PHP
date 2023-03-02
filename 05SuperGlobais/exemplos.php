<?php
if ($_SERVER['REQUEST_METHOD])

echo '<hr>';
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y']; 
}

addition();
echo $z;
echo '<br>';
echo '<hr>';

echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo '<hr>';
?>