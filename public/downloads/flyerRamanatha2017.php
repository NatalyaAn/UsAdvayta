<?php

$file = 'flyerRamanatha2017.jpg';
header("Content-disposition: attachment; filename=$file");
header("Content-type: application/docx");
readfile($file);
exit;

?>

