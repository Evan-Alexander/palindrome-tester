<?php

    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        // function test_checkPalindrome_SingleWord()
        // {
        //     //Arrange
        //    $input = "racecar";
        //    $test_palindrome = new Palindrome($input);
        //
        //    //Act
        //    $result = $test_palindrome->checkPalindrome($input);
        //
        //    //Assert
        //    $this->assertEquals("racecar", $result);
        // }
        //
        // function test_checkPalindromeMultipleWord()
        // {
        //     //Arrange
        //    $input = "abc cba";
        //    $test_palindrome = new Palindrome($input);
        //
        //    //Act
        //    $result = $test_palindrome->checkPalindrome($input);
        //
        //    //Assert
        //    $this->assertEquals("abc cba", $result);
        // }

        function test_checkPalindromeMultipleWord2()
        {
            //Arrange
           $input = "borrow or rob";
           $test_palindrome = new Palindrome($input);

           //Act
           $result = $test_palindrome->checkPalindrome($input);

           //Assert
           $this->assertEquals(true, $result);
        }

    }
