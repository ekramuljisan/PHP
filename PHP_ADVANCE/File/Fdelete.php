<?php
if(file_exists("file/txt/f2.txt")){
    unlink("file/txt/f2.txt");
    echo "File deleted";
}