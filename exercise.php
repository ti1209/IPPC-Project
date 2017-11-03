<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y년 m월 d일') ."\n";

ini_set('date.timezone', 'UTC');
$time1 = date('H:i:s', time() - date('Z'));

echo $time1."\n";
?>
