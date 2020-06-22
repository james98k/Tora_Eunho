<?php 
    // $DOCUMENT_ROOT = $SERVER['DOCUMENT_ROOT']

    $fp = fopen("1.txt","r") or die("file can not be opened");

    while(!feof($fp)){
        echo fgets($fp);
    }

    fclose($fp);
    // if(!$fp) {
    //     echo 'Could not processed!</body></html>';
    //     exit;
    // }
?>