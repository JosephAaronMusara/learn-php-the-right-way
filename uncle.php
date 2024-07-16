<?php
/* Date & time */
date_default_timezone_set("Asia/Hong_Kong");

echo date_default_timezone_get() .'<br /><br />';

echo date('n/d/Y g:ia',strtotime('tomorrow')) .'<br /><br />';
echo date('n/d/Y g:ia',strtotime('first day of february')) .'<br /><br />';
echo date('n/d/Y g:ia',strtotime('last day of march')) .'<br /><br />';
echo date('n/d/Y g:ia',strtotime('last day of december 2019')) .'<br /><br />';
$date = date('n/d/Y g:ia',strtotime('second friday of August')) .'<br /><br />';

echo '<pre>';
print_r(date_parse_from_format('n/d/Y g:ia',$date)) .'<br /><br />';
echo '</pre>';


$currentTime = time();

echo "$currentTime <br />";//current time

echo $currentTime + 5 * 24 * 60 * 60 .'<br />';//5 days from now

echo $currentTime - 24 * 60 * 60 .'<br /><br />'; //yesterday

echo date('n/d/Y g:ia', $currentTime) .'<br />';
echo date('n/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) .'<br />';
echo date('n/d/Y g:ia', $currentTime  - 24 * 60 * 60) .'<br />';


