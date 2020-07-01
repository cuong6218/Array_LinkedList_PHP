<?php
    class Node1{
        public $data;
        public $link;
        function __construct($data)
        {
            $this->data = $data;
            $this->link = NULL;
        }
        function getNode1(){
            return $this->data;
        }
    }