<?php

$dir = "orcr_uploads\Honda";
$txt = "abc123";

// Check if the folder exist
if( file_exists($dir) )
{
    // scan the files
    $files = scandir($dir);
   
    foreach (array(".jpg", ".pdf", ".png") as $ext) {
        if (in_array($txt . $ext, $files)) {    
            $print = $txt.$ext;
            break;
        }
    }

    print ($print);

}


?>