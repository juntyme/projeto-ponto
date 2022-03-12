<?php

/// Controller temporário!!

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));

$workedInterval = $wh->getWorkedInterval()->format('%H:%I:%S');
echo '<br>';
print($workedInterval);


// [$t1, $t2, $t3, $t4] = $wh->getTimes();
// print_r($t2);


// $i1 = DateInterval::createFromDateString('9 hours');
// $i2 = DateInterval::createFromDateString('6 hours');

// $r1 = sumIntervals($i1, $i2);
// $r2 = subtractIntervals($i1, $i2);
// print_r($r1);
// print_r($r2);
// print_r(getDataFromInterval($r1));
