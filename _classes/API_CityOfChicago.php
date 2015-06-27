<?php

/**
 * Description of API_CityOfChicago
 *
 * @author Jeffrey
    */

   class API_CityOfChicago extends API {

           private $key    = NULL;
           private $url    = "http://data.cityofchicago.org/";
           
           public function url_resource() {
               $url_resource = "{$this->url}resource/xzkq-xp2w.json";
               return $url_resource;
           }

   }
