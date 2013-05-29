<?php
include_once("simple_html_dom.php");


// Create DOM from URL or file
 $html = file_get_html('http://tw.yahoo.com');
// // Find all images
 foreach($html->find('img') as $element){
        echo $element->src . "\n";
 }
 //
//        // Find all links
 //       foreach($html->find('a') as $element)
   //            echo $element->href . '<br>'; 



?>
