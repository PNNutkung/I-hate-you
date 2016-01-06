<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Count of ihateyou</title>
    </head>
    <body>
        <?php
            $filepath = "test.txt";
            if(!file_exists($filepath)){
                echo "Doesn't count yet!";
            }
            else{
                $handle = fopen($filepath,"r");
                $content = fgets($handle,filesize($filepath));
                echo "<h1>Count : $content</h1>";
                fclose($handle);
            }
        ?>
    </body>
</html>
