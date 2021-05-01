<?php
$utc_date = DateTime::createFromFormat(
    'Y-m-d G:i:s',
    '2021-05-01 04:29:40',
    new DateTimeZone('UTC')
);



$acst_date = clone $utc_date; // we don't want PHP's default pass object by reference here
$acst_date->setTimeZone(new DateTimeZone('Asia/Kolkata'));

echo 'UTC:  ' . $utc_date->format('Y-m-d g:i A').'<br>';  // UTC:  2011-04-27 2:45 AM
echo 'INDIA: ' . $acst_date->format('Y-m-d g:i A');
