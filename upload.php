<?php
    $fileURL = "textFiles/" . $_POST["fileName"] . ".txt";
    if(!file_exists($fileURL)){
    file_put_contents($fileURL, $_POST["fileContent"]);
    header("location:" . $fileURL);                    
    }
    else{
    die("A paste with that name already exists! pick a different name");
    }
?>
