<?php
    class Palindrome
    {
        private $input;

        function __construct($input)
        {
            $this->input = $input;
        }

        function getInput()
        {
            return $input;
        }

        function setInput($new_input)
        {
            $this->input = $new_input;
        }



        function checkPalindrome()
        {
            $input1 = preg_replace('/' . " " . '/i', "", $this->input);
            $input2 = strrev($input1);
            var_dump($input2);
            if ($input2 == $input1) {
                return true;
            } else {
                return false;
            }
        }
    }

    // "borroworrob"     "borroworrob"
