<?php
//strict_types only works in the file it is specified so we have to specify
//it in another file if we want to use the function from another file with it
declare(strict_types= 1);
require 'index.php';

echo sum(7,9);