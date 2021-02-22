<?php 
include 'simple_html_dom.php';
$html = file_get_html('https://amlegals.com/indian-lawyers-firm-amlegals/practice-areas/');
//  echo '<h1>' . $html->find('title',0)->iplaintext . '</h1>';

$html->find('bt_bb_port', 0)->plaintext ;
echo $html;

?>
