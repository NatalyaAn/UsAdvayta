<?php

$file = 'flyerRamanatha2017.docx';
header("Content-disposition: attachment; filename=$file");
header("Content-type: application/docx");
readfile($file);
exit;

?>

