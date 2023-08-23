<?php
function mytest () {
    static $x = 0;
    echo $x;
    $x++;
}

myTest ();
myTest ();
myTest ();
?>