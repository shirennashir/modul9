<?php
header("content-Type:application/zip");
header("content-Length:".filesize($file));
header("content-Disposition: attachment;filename=$file");
readfile($file);
?>