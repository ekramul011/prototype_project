<?php


namespace App\classes;


class Series
{
    public $i, $startingNumber, $endingNumber, $result, $resultString, $output, $res;
    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
    }

    public function seriesOne()
    {
        if ($this->startingNumber > $this->endingNumber)
        {
            for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
            {
                $this->result .= $this->i.' ';
            }
        }
        else
            {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                $this->result .= $this->i.' ';
            }
        }

        header("Location: action.php?page=series_one&result=$this->result");
    }

    public function seriesThree()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->resultString .= $this->i. '+';
            $this->result = $this->result + $this->i;
        }
        $this->output = rtrim($this->resultString, '+');
        $this->result = $this->output.'='.$this->result;
        $this->res = base64_encode($this->result);
        header("Location: action.php?page=series_three&result=$this->res");

    }
}