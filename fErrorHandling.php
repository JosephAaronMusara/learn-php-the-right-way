<?php
//Error handling

function errorHandler(int $type, string $msg, ?string $file=null, ?int $line=null){
    echo "$type :  $msg in $file on line $line";
}

set_error_handler('errorHandler',E_ALL);//This overrides all error handlers including the ones defined in runtime and not php.ini
//some errors eg parse error are not handled by custom error handler
echo $x;