<?php

$currentTime = time(); //current time in seconds

echo $currentTime + 5 * 24 * 60 * 60; //five days future
echo '<br />';

echo $currentTime - 24 * 60 * 60; //1 day ago
echo '<br />';

echo date('m/d/y g:ia', $currentTime + 5 * 24 * 60 * 60);
echo '<br />';

echo date_default_timezone_get()."\n";
echo '<br />';

date_default_timezone_set('UTC');
echo '<br />';

echo date('m/d/y g:ia');
echo '<br />';

echo date('m/d/y g:ia', mktime(0,0,4,10, null));
echo '<br />';

echo date('m/d/y g:ia', strtotime('2021-10-21 07:00:00'));
echo '<br />';

echo date('m/d/y g:ia', strtotime('tomorrow'));
echo '<br />';


echo date('m/d/y g:ia', strtotime('last day of january 2021'));
echo '<br />';

$date = date('m/d/y g:ia', strtotime('last day of january 2021'));

echo '<pre>';
print_r(date_parse($date)).'<br />';
echo '<pre>';

echo '<pre>';
print_r(date_parse_from_format($date)).'<br />';
echo '<pre>';
