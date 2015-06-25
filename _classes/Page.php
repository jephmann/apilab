<?php

/**
 * Description of Page
 *
 * @author Jeffrey
 */

    class Page {
        
        public $path = NULL;
        public $title = "API Lab";
        public $subtitle = NULL;

        function getTitle() {
            return $this->title;
        }

        function getSubtitle() {
            return $this->subtitle;
        }
        function setTitle($title) {
            $this->title = $title;
        }

        function setSubtitle($subtitle) {
            $this->subtitle = $subtitle;
        }
        
    }
