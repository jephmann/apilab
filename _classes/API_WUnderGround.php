<?php

    /**
     * Description of API_WUnderGround
     *
     * @author Jeffrey
     */

    class API_WUnderGround extends API
    {         
        private $key = "fa4a10d736578d22";
        private $url = "http://api.wunderground.com";

        // retrieve appropriate URLs
        public function url_base()
        {
            $result = "{$this->url}/api/{$this->key}";
            return $result;
        }

        public function url_forecast()
        {
            $result = "{$this->url_base()}/forecast/q";
            return $result;
        }
                
        public function url_forecast_citystate($city, $state)
        {
            $result = "{$this->url_forecast()}/{$state}/{$city}.json";
            return $result;
        }

        public function url_forecast_zip($zip)
        {
            $result = "{$this->url_forecast()}/{$zip}.json";
            return $result;
        }
    }