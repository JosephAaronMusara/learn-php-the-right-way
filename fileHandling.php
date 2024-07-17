<?php
//dealing with files - we can make, delete dirs, open, read, write files etc
//mkdir('unclejoe/forex',recursive: true);
//rmdir('uncle');

//checking file existence

if(file_exists('boom1000.txt')){
    echo filesize('boom1000.txt');
    file_put_contents('boom1000.txt',' zvakanaka mambo');
    clearstatcache();
    echo filesize('boom1000.txt');
    
}else{
    echo 'file does not exist';
}