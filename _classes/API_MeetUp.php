<?php

    /**
     * Description of API_MeetUp
     *
     * @author Jeffrey
     */

    class API_MeetUp extends API {
    
        private $key = "673f4953e4f7e43d6f65431a292479";
        private $url = "http://api.meetup.com";

        // retrieve urls for MeetUp.Com API
        
        public function url_group_id($id_group)
        {
            //$result = "http://api.meetup.com/2/groups?key=673f4953e4f7e43d6f65431a292479&sign=true&photo-host=public&group_id=14630102&page=20";
  
            $result = "{$this->url}/2/groups"
                . "?key={$this->key}"
                . "&sign=true"
                . "&photo-host=public"
                . "&group_id={$id_group}";
                // Not sure whether more parameters are needed.
                // There's a bit where you can omit stuff -- "&omit=string,delimited,list,no,spaces"
                // but for simplicity I'd simply get everything and parse out what I need later.
            return $result;
        }
        
        public function url_member_id($id_member)
        {
            // $result = http://api.meetup.com/2/member/9700980?key=673f4953e4f7e43d6f65431a292479&sign=true
            $result = "{$this->url}/2/member/{$id_member}"
                . "?key={$this->key}"
                . "&sign=true";
                // Not sure whether more parameters are needed.
                // There's a bit where you can omit stuff -- "&omit=string,delimited,list,no,spaces"
                // but for simplicity I'd simply get everything and parse out what I need later.
            return $result;
        }
        
        public function url_topics()
        {
            // $result = http://api.meetup.com/topics?key=673f4953e4f7e43d6f65431a292479&sign=true&photo-host=public&order=name
            $result = "{$this->url}/topics"
                . "?key={$this->key}"
                . "&sign=true"
                . "&photo-host=public"
                . "&order=name";
                // Default sort ("&order") is by "name".
                // I could make this a parameter of the function at any time.
                // I simply don't want to (yet).
            return $result;
        }

    }
