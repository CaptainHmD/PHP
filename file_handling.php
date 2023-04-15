<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/


$file = 'docs/names.txt'; // add path to variable

//! check if the file exist
if(file_exists($file)){
    // echo readfile($file); // print the file
    $handle = fopen($file,'r');
    $content = fread($handle,filesize($file));
    fclose($handle);
    echo $content;
}else{
    //for writing
    $handle = fopen($file,'w'); // if there is no file it will create one
    $content = 'hamad '.'ibrahim '.'ahmed ';
    fwrite($handle,$content);
    fclose($handle);
}




?>