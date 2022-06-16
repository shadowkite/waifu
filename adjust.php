<?php

$files = glob('json/*');
foreach($files as $file) {
    file_put_contents($file, str_replace('\\/', '/', file_get_contents($file)));
}