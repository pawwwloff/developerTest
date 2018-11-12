<?php
/**
 * Created by PhpStorm.
 * User: pawww
 * Date: 12.11.2018
 * Time: 16:03
 */
$xml_file_link = "https://lenta.ru/rss";
$xml_file = simplexml_load_file($xml_file_link) or die ("Error: Cannot get the xml file");
for ($i = 0; $i < 5; $i++) {
    $item = $xml_file->channel->item[$i];
    echo '*' . $item->title . PHP_EOL;
    echo '*' . $item->link . PHP_EOL;
    echo '*' . $item->description . PHP_EOL;
    echo '======================================' . PHP_EOL . PHP_EOL;
}