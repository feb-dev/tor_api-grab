<?php
require_once 'simple_html_dom.php';

$source_url = 'https://check.torproject.org/';
$html_source = file_get_html($source_url);
$ip = $html_source->find('<strong>', 0)->plaintext;
?>
