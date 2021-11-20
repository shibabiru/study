<?php

$now = new DateTime();
//var_dump($now);
$current_year_month = $now->format('Y年 m月');

$end = new DateTime('last day of this month');

$days = [];
for ($i = 1; $i <= $end->format('d'); $i++) {
    $date = $now->format('Y-m') . '-' . $i;
    $dateTime = new DateTime($date);
    $days[] = $dateTime;
}

$first = new DateTime('first day of this month');
