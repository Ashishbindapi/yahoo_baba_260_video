<?php
echo substr(decoct(fileperms("readme.txt")),2);

chmod("readme.txt",0400);
if (is_executable("readme.txt")) {
    echo "Yes it is Executable .";
}else{
    echo "Yes it is not Executable .";
}