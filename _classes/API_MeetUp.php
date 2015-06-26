<?php

/**
 * Description of API_MeetUp
 *
 * @author Jeffrey
 */

    class API_MeetUp extends API {
    
        private $key = "673f4953e4f7e43d6f65431a292479";
        private $url = "https://api.meetup.com ";

        // retrieve urls for MeetUp.Com API
        public function url_member_id($id_member)
        {
            // https://api.meetup.com/2/member/9700980?key=673f4953e4f7e43d6f65431a292479&sign=true&photo-host=public&page=20
            $url_member_id = $this->url
                    + "/2/member/"
                    + $id_member
                    + "?"
                    + $this->key;
                    // Not sure whether more parameters are needed.
                    // There's a bit where you can omit stuff -- "&omit=string,delimited,list,no,spaces"
                    // but for simplicity I'd simply get everything and parse out what I need later.
            return $url_member_id;
        }

    }
