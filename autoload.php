<?php
$path = __DIR__.'/src/';
$bundles = array('Body');

foreach($bundles as $bundle) {
    $files = glob($path.$bundle.'/*.php');

    foreach($files as $key => $file)
        if (strpos($file,'Interface') !== false) {
            $el = $files[$key];
            unset($files[$key]);
            array_unshift($files, $el);
        }

    foreach($files as $file)
        require_once $file;
}