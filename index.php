<?php
header('Content-Disposition: attachment; filename="document.html"');
header('Content-Type: application/octet-stream');
header('Content-Length: ' . filesize('document.html'));
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
readfile('document.html');
?>