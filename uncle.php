<?php
/* Date & time */
date_default_timezone_set("Asia/Hong_Kong");

echo date_default_timezone_get() .'<br />';

$currentTime = time();

echo "$currentTime <br />";//current time

echo $currentTime + 5 * 24 * 60 * 60 .'<br />';//5 days from now

echo $currentTime - 24 * 60 * 60 .'<br />'; //yesterday

echo date('n/d/Y g:ia', $currentTime) .'<br />';
echo date('n/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) .'<br />';
echo date('n/d/Y g:ia', $currentTime  - 24 * 60 * 60) .'<br />';


