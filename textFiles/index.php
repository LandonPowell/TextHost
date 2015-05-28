<?php
    $fileList = scandir("./");
    foreach ($fileList as $file) {
        if ( pathinfo($file)['extension'] == "txt" ) {
            echo "<a href=\"$file\"/> $file </a><br>";  
        }
    }
?>
