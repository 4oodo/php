<?php

function secondsToDays($seconds) {
    return $seconds / 86400;
}


$seconds = 172800;
echo secondsToDays($seconds);
?>