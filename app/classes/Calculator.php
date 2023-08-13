<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $secondNumber, $result, $choice;

    public function __construct($forresult)
    {
        $this->firstNumber = $forresult['first_number'];
        $this->secondNumber = $forresult['second_number'];
        $this->choice = $forresult['choice'];
    }

    public function myCalculator()
    {



//        if ($this->choice == '+')
//        {
//            $this->result = $this->firstNumber + $this->secondNumber;
//        }
//        elseif ($this->choice == '-')
//        {
//            $this->result = $this->firstNumber - $this->secondNumber;
//        }
//        elseif ($this->choice == '/')
//        {
//            $this->result = $this->firstNumber / $this->secondNumber;
//        }
//        elseif ($this->choice == '%')
//        {
//            $this->result = $this->firstNumber % $this->secondNumber;
//        }
//        elseif ($this->choice == '*')
//        {
//            $this->result = $this->firstNumber * $this->secondNumber;
//        }

        switch ($this->choice)
        {
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result = $this->firstNumber / $this->secondNumber;
                break;
            case '%':
                $this->result = $this->firstNumber % $this->secondNumber;
                break;
        }

//        $this->result = $this->firstNumber + $this->secondNumber;

        header("Location: action.php?page=calculator&message=$this->result&first_number=$this->firstNumber&second_number=$this->secondNumber");
    }
}