<?php

    /**
     * Description of API_LastFM
     *
     * @author Jeffrey
     */

    class API_LastFM extends API {
        //put your code here
        private $key    = "4cdce97b7ba59093d754c88bdc99ccb4";
        private $url    = "http://ws.audioscrobbler.com/2.0/";
        private $secret = "adfb42f655d43b99401aa14b73b99f89";

        public function url_search_artist ($artist)
        {            
            /*  
             * JSON:
             *   http://ws.audioscrobbler.com/2.0/?method=artist.search&artist=cher&api_key=4cdce97b7ba59093d754c88bdc99ccb4&format=json
             * XML:
             *   http://ws.audioscrobbler.com/2.0/?method=artist.search&artist=cher&api_key=4cdce97b7ba59093d754c88bdc99ccb4
             */
            
            $artist = urlencode($artist);
            $result = "{$this->url}"
                . "?api_key={$this->key}"
                . "&method=artist.search"
                . "&artist={$artist}";

            return $result;
        }
    }
