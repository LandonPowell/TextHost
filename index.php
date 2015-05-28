<!DOCTYPE html>
<html>
    <head>
        <title>Minimalist Text Host</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <h1>Minimalist Text Host</h1>
        <a href="textFiles/index.php">Browse Uploads</a>
        <br><br>
        <form action="upload.php" method="post">
            <input type="text" name="fileName" placeholder="File Name"> <br>
            <textarea name="fileContent" placeholder="Paste Here"></textarea>
            <input type="submit">
        </form>
    </body>
</html>
