<?php

/**
 * Description of API_CityOfChicago
 *
 * @author Jeffrey
 */

   class API_CityOfChicago extends API {

        private $key    = NULL;
        private $url    = "http://data.cityofchicago.org/resource/";

        public function url_data($code) {
            $url = "{$this->url}{$code}.json";
            return $url;
        }
           
   }
