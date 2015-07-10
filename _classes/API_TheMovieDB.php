<?php

    /**
     * Description of API_TheMovieDB
     *
     * @author Jeffrey
     */

    class API_TheMovieDB extends API
        {
            private $key = "f5100af9458f136f2e7e38267a6aabfa";
            //private $url = "http://private-85e98-themoviedb.apiary.io/3/";
            //private $url = "http://private-85e98-themoviedb.apiary-mock.com/3/";
            private $url = "http://api.themoviedb.org/3/";
            
            public static $url_imdb = "http://www.imdb.com/";
            public static $url_themoviedb = "https://www.themoviedb.org/";

            // retrieve urls for movies
            public function url_title($id_title)
            {
                $result = "{$this->url}movie/{$id_title}?api_key={$this->key}";
                return $result;
            }
            public function url_title_credits($id_title)
            {
                $result = "{$this->url}movie/{$id_title}/credits?api_key={$this->key}";
                return $result;
            }
            public function url_title_images($id_title)
            {
                $result = "{$this->url}movie/{$id_title}/images?api_key={$this->key}&language=en&include_image_language=en,null";
                return $result;
            }
            
            // retrieve urls for persons
            public function url_name($id_name)
            {
                $result = "{$this->url}person/{$id_name}?api_key={$this->key}";
                return $result;
            }
            public function url_name_credits($id_name)
            {
                $result = "{$this->url}person/{$id_name}/movie_credits?api_key={$this->key}";
                return $result;
            }
            public function url_name_images($id_name)
            {
                $result = "{$this->url}person/{$id_name}/images?api_key={$this->key}";
                return $result;
            }
            
            // retrieve urls for text searches
            public function url_search_title($text)
            {
                $text = urlencode($text);
                $result = "{$this->url}search/movie"
                . "?api_key={$this->key}"
                . "&query={$text}";
                return $result;
            }
            public function url_search_name($text)
            {
                $text = urlencode($text);
                $result = "{$this->url}search/person"
                . "?api_key={$this->key}"
                . "&query={$text}";
                return $result;
            }

        }