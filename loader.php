<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 09/06/17
 * Time: 08:41
 */
init();

function init() {

    openFile('framework');
    openFile('controllers');
    openFile('modeles');
}

function openFile($dir) {
    // Open a directory, and read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (!is_dir($file)) {
//                    echo "filename:" . $file . "<br>";
                    require_once $dir . '/' . $file;
                }
            }
            closedir($dh);
        }
    }
}
