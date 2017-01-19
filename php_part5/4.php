<?php
header('Content-Type: text/plain');
if ($f = fopen(__FILE__, 'r')) {
    fpassthru($f);
}