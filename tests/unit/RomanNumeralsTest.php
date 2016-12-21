<?php

use App\RomanNumerals;


class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{

       /**  @expectedException InvalidArgumentException */


   /** @test */

  function it_calculates_the_roman_numeral_for_1()
 
    {

     $test1 = new RomanNumerals();

      $this->assertEquals('I', $test1->convert(1));

    }


    /** @test */

  function it_calculates_the_roman_numeral_for_2()
 
    {

     $test2 = new RomanNumerals();

      $this->assertEquals('II', $test2->convert(2));

    }

        /** @test */

  function it_calculates_the_roman_numeral_for_4()
 
    {

       $test3 = new RomanNumerals();

      $this->assertEquals('IV', $test3->convert(4));

    }

         /** @test */

    function it_calculates_the_roman_numeral_for_5()
    {

        $test4 = new RomanNumerals();

        $this->assertEquals('V', $test4->convert(5));
    }


          /** @test */

    function it_calculates_the_roman_numeral_for_6()
    {

        $test5 = new RomanNumerals();

        $this->assertEquals('VI', $test5->convert(6));
    }

            /** @test */

    function it_calculates_the_roman_numeral_for_9()
    {
        $test6 = new RomanNumerals();

        $this->assertEquals('IX', $test6->convert(9));

    }

           /** @test */

    function it_calculates_the_roman_numeral_for_10()
    {

        $test7 = new RomanNumerals();

        $this->assertEquals('X', $test7->convert(10));

    }

             /** @test */

    function it_calculates_the_roman_numeral_for_11()
    {
         $test8 = new RomanNumerals();

         $this->assertEquals('XI', $test8->convert(11));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_20()
    {
         $test9 = new RomanNumerals();

         $this->assertEquals('XX', $test9->convert(20));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_50()
    {

         $test10 = new RomanNumerals();

         $this->assertEquals('L', $test10->convert(50));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_100()
    {
        $test11 = new RomanNumerals();

        $this->assertEquals('C', $test11->convert(100));

    }

             /** @test */

    function it_calculates_the_roman_numeral_for_500()
    {

        $test12 = new RomanNumerals();

        $this->assertEquals('D', $test12->convert(500));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_1000()
    {
        $test13 = new RomanNumerals();

        $this->assertEquals('M', $test13->convert(1000));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_1999()
    {
        $test14 = new RomanNumerals();

        $this->assertEquals('MCMXCIX', $test14->convert(1999));

    }

            /** @test */

    function it_calculates_the_roman_numeral_for_4990()
    {

        $test15 = new RomanNumerals();

        $this->assertEquals('MMMMCMXC', $test15->convert(4990));

    }


            /** 
            * @test 
            * @expectedException InvalidArgumentException
            */

 

    function it_takes_exception_with_zero()
    {

        $test16 = new RomanNumerals();

       $this->assertEquals($this->fail('zero is an exception'), $test16->convert(0));


    }





}