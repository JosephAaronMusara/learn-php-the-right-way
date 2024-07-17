<?php
//dealing with files - we can make, delete dirs, open, read, write files etc
//mkdir('unclejoe/forex',recursive: true);
//rmdir('uncle');

//checking file existence

if(! file_exists('boom1000.txt')){

    echo 'file not found';
    
}else{
    $file = fopen('boom1000.txt','r');
    while(($line = fgets($file)) !== false) {
        echo "$line <br />";
    }

}