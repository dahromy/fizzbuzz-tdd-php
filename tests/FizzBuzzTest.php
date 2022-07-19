<?php

namespace App\Test;

use App\FizzBuzz;
use function PHPUnit\Framework\assertEquals;

beforeEach(function (){
    $this->fizzBuzz = new FizzBuzz();
});

it("should return 1 if number is 1", function (){
    assertEquals("1", $this->fizzBuzz->generate(1, 1));
});

it("should return 2 if number is 2", function (){
    assertEquals("2", $this->fizzBuzz->generate(2, 2));
});

it("should return Fizz if number is 3", function (){
    assertEquals("Fizz", $this->fizzBuzz->generate(3, 3));
});

it("should return Fizz if number is 6", function (){
    assertEquals("Fizz", $this->fizzBuzz->generate(6, 6));
});

it("should return Buzz if number is 5", function (){
    assertEquals("Buzz", $this->fizzBuzz->generate(5, 5));
});

it("should return Buzz if number is 10", function (){
    assertEquals("Buzz", $this->fizzBuzz->generate(10, 10));
});

it("should return FizzBuzz if number is 15", function (){
    assertEquals("FizzBuzz", $this->fizzBuzz->generate(15, 15));
});

it("should return FizzBuzz if number is 30", function (){
    assertEquals("FizzBuzz", $this->fizzBuzz->generate(30, 30));
});

it("should return 12 if numbers are 1 to 2", function (){
    assertEquals("12", $this->fizzBuzz->generate(1, 2));
});

it("should return 12Fizz if numbers are 1 to 3", function (){
    assertEquals("12Fizz", $this->fizzBuzz->generate(1, 3));
});

it("should return 12Fizz4Buzz if numbers are 1 to 5", function (){
    assertEquals("12Fizz4Buzz", $this->fizzBuzz->generate(1, 5));
});

it("should return 12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz if numbers are 1 to 5", function (){
    assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $this->fizzBuzz->generate(1, 15));
});