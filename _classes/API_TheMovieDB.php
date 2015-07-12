<?php

    /**
     * Description of API_TheMovieDB
     *
     * @author Jeffrey
     */

    class API_TheMovieDB extends API
        {
            private $url                    = "http://api.themoviedb.org/3/";
            private $key                    = "f5100af9458f136f2e7e38267a6aabfa";
            //private $url                  = "http://private-85e98-themoviedb.apiary.io/3/"; *
            //private $url                  = "http://private-85e98-themoviedb.apiary-mock.com/3/"; *
            // * -- simple reminders that APIs change.
            
            public static $url_imdb         = "http://www.imdb.com/";
            public static $url_themoviedb   = "https://www.themoviedb.org/";
            
            // image path links (image files appended later)
            public $url_image               = "https://image.tmdb.org/t/p/";
            
            // retrieve images for found persons (profile)
            public function url_profile($filename)
            {
                $result = "{$this->url_image}w185{$filename}";
                return $result;
            }
            
            // retrieve images for found movies (posters)
            public function url_poster($filename)
            {
                $result = "{$this->url_image}w185{$filename}";
                return $result;
            }
            
            // retrieve images for found movies (backdrops)
            public function url_backdrop($filename)
            {
                $result = "{$this->url_image}w300{$filename}";
                return $result;
            }
            
            // retrieve urls for found data
            public function url_found($id, $topic, $subtopic=NULL)
            {
                $topic          = urlencode($topic);
                $result         = "{$this->url}{$topic}/{$id}";
                if ($subtopic)
                {
                    $subtopic   = urlencode($subtopic);
                    $result     = "{$result}/{$subtopic}";
                }
                $result         = "{$result}?api_key={$this->key}";
                return $result;
            }
            
            // retrieve urls for text searches            
            public function url_search($topic, $text, $pages=NULL)
            {
                $text       = urlencode($text);
                $topic      = urlencode($topic);
                $result     = "{$this->url}search/{$topic}"
                    . "?api_key={$this->key}"
                    . "&query={$text}"
                    . "&include_adult=true";
                if ($pages)
                {
                    $result = "{$result}&page={$pages}";
                }
                return $result;
            }
            
            // retrieve total pages and results
            public function totals($topic, $text)
            {
                /*
                 * Whatever numbered page is pulled from search_movie/person,
                 * total_pages and total_results are the same on each page.
                 */
                $result     = NULL;
                $text       = urlencode($text);
                $topic      = urlencode($topic);
                $url        = "{$this->url}search/{$topic}"
                    . "?api_key={$this->key}"
                    . "&query={$text}"
                    . "&include_adult=true";                    
                $data       = $this->retrieve_data($url, TRUE);                
                $result     = array(
                  'total_pages'     => $data['total_pages'],
                  'total_results'   => $data['total_results'],  
                );                
                return $result;
            }

        }