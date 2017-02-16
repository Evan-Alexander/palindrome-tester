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

            $input1_array = str_split($input1, 1);
            $input2_array = array();
            var_dump(count($input1_array));
            for($i=count($input1_array)-1; $i>=0; $i--){
            array_push($input2_array,  $input1_array[$i]);
            }

            $input2 = implode($input2_array);
            if ($input2 == $input1) {
                return true;
            } else {
                return false;
            }
        }
    }

    // "borroworrob"     "borroworrob"
