<?php
    class Employee{
        public $fname;
        public $lname;
        public $position;

        function __construct($fname, $lname, $pos){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->position = $pos;
        }
    }
?>