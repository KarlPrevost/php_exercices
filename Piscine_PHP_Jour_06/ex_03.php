<?php

function write_into_my_file(string $str, string $file, bool $append = false) {
if ($append) {
$return_value = file_put_contents($file, $str, FILE_APPEND);
if (!$return_value)
return false;
return true;
}
$return_value = file_put_contents($file, $str);
if (!$return_value)
return false;
return true;
}
?>