<?php
    class MyList{
        public $arrayList;
        function ArrayList($arr = ""){
            if (is_array($arr == true)) $this->arrayList = $arr;
            else $this->arrayList = array();
        }
        
        function insert($index, $obj){
            $this->arrayList[$index] = $obj;
        }
        function add ($obj){
            array_push($this->arrayList, $obj);
        }

        function remove ($index){
            unset($this->arrayList[$index]);
        }

        function get($index){
            if ($index < $this->size()) return $this->arrayList[$index];            
        }

        function clear(){
            unset($this->arrayList);
        }

        function addAll($arr){
            $totalArray = array_merge($this->arrayList, $arr);
            return $totalArray;
        }

        function indexOf($obj){
            $index = array_search($obj, $this->arrayList);
            echo $index;
        }

        function isEmpty(){
            if ($this->size() == 0) return 'This array is empty';
            else return 'This array is not empty';
        }

        function sort(){
            asort($this->arrayList);
        }
        function reset(){
           array_splice($this->arrayList, 0);
        }
        function size(){
            return count($this->arrayList);
        }  
    }