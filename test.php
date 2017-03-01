<?php

require('./src/Luhn.php');

//echo \Jayin\Luhn::parser('x');
//echo '-';
echo \Jayin\Luhn::parser('7992739871x');
echo "\n";
echo \Jayin\Luhn::parser('8986031644200646919G');//5
