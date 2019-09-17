<?php
$filename = '/tmp/readiness';

if (file_exists($filename)) {
    echo "Ok";
} else {
    header("HTTP/1.1 500 Internal Server Error");    
}
?>
