<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$url = "http://ws.audioscrobbler.com/2.0/?method=artist.search&artist=harry%20nilsson&api_key=4cdce97b7ba59093d754c88bdc99ccb4";

echo "<p>{$url}</p>";

$xml = simplexml_load_file($url);

echo "<pre style=\"background-color: #ccc;\">";

$attributes = $xml->attributes();

var_dump($attributes);


echo "</pre>";

$artistmatches = $xml->results->artistmatches;


foreach($artistmatches->artist as $artist)
{
    echo "<br />x " . $artist->name;
}

echo "<pre style=\"background-color: whitesmoke;\">";

var_dump($artistmatches);


echo "</pre>";

echo "<pre>";

var_dump($xml);


echo "</pre>";