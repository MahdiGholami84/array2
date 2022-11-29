<?php
$c = array('Iran', 'Iraq', 'Turkey', 'Russia');
$a = "Iran_America_France_Germany";
#echo implode("-", $c);
$b = explode("_", $a);
print_r($b);