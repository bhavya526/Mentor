<?php
$x=5;
$y=15;
function myTest() {
$GLOB['y']=
$GLOBALS['x']+$GLOBALS['y'];
}
myTest();
echo $y; // 
?> 