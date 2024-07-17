<?php
//dealing with files - we can make, delete dirs, open, read, write files etc
//mkdir('unclejoe/forex',recursive: true);
//rmdir('uncle');

//checking file existence

// if(! file_exists('boom1000.txt')){

//     echo 'file not found';
    
// }else{
//     $file = fopen('boom1000.txt','r');
//     while(($line = fgets($file)) !== false) {
//         echo "$line <br />";
//     }
//     fclose($file);

// }
// $content = file_get_contents('boom1000.txt');
// echo $content;

// file_put_contents('uncle.txt','pakaipa'); //creating and writing to a file at once
// file_put_contents('uncle.txt',' zvekutodaro',FILE_APPEND);

// unlink('uncle.txt');//deleting a file
copy('uncle.txt','joe.docx');// to move or rename, use remane on both files and dirs