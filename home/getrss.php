<?php
//http://www.w3schools.com/php/php_ajax_rss_reader.asp
$xml=("http://www.gallup.com/tag/Politics.rss");

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++)
  {
  $title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;

  echo "<p><a target='_blank' href='" . $link  . "'>" . $title . "</a>" . "<br />" . $desc . "</p>";
  }
?> 
