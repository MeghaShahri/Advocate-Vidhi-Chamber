<?php 
include 'simple_html_dom.php';
$html = file_get_html('https://doj.gov.in/news');
//  echo '<h1>' . $html->find('title',0)->iplaintext . '</h1>';

$html->find('div[id="content"]', 0);
echo $html;

?>
