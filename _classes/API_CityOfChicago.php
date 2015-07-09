<?php

    /**
     * Description of API_CityOfChicago
     *
     * @author Jeffrey
     */

   class API_CityOfChicago extends API {

        private $key    = NULL; // there is no API key
        private $url    = "http://data.cityofchicago.org/resource/";

        public function url_data($code) {
            $result = "{$this->url}{$code}.json";
            return $result;
        }
           
   }
