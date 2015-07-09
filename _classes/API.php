<?php

    /**
     * Description of API
     *
     * @author Jeffrey
     */

    class API
    {
        private $key    = NULL;
        private $url    = NULL;
        private $secret = NULL;
        
        public static function retrieve_data($url_full, $format=NULL)
        {
            $result = NULL;
            $json = NULL;
            if($format) // TRUE     = XML
            {
                $json = file_get_contents($url_full);
                $result = json_decode($json, TRUE);
            }
            else        // FALSE    = JSON
            {
                $result = simplexml_load_file($url_full);
            }
            return $result;
        }

    }