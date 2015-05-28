<?php
    $fileURL = "textFiles/" . $_POST["fileName"] . ".txt";
    file_put_contents($fileURL, $_POST["fileContent"]);
    header("location:" . $fileURL);                         
?>
