<style>
    .file
    {
        margin:10px;
    }
</style>

<?php 

    echo "<div class='file'>".readfile('fullform.txt')."</div>";

    $file= fopen("fullform.txt", "r") or die("unable to open file");
    
    echo "<div class='file'>".fread($file,filesize('fullform.txt'))."</div>";

    echo "<div class='file'>".fgets($file)."</div>";

    while(!feof($file)) 
    {
        echo fgets($file) . "<br>";
    }

    fclose($file);

    $newfile=fopen("fopen.txt", "w") or die("unable to open file");
    $txt = "John Doe\n";
    fwrite($newfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($newfile, $txt);
    fclose($newfile);
?>