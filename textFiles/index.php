<?php
    $fileList = scandir("./");
    foreach ($fileList as $file) {
        if ( pathinfo($file)['extension'] == "txt" ) {
            $file = htmlspecialchars($file);
            echo "<a href=\"$file\"/> $file </a><br>";  
        }
    }
?>
