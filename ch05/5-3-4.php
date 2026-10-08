#Name: 李芸瑄
#SID: C113181135
#EX04
<HR>
<?php
$totle = 0;
for($i = 0; $i <=15; $i++) {
    if ($i % 2==1)
        continue;

    echo"| " . $i;
    $totle += $i;
}