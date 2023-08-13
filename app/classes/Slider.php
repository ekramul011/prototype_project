<?php


namespace App\classes;


class Slider
{
    public $sliders = [], $data = [];

    public function __construct()
    {
        $this->sliders = [
            0 => [
                'id' => 1,
                'description' => 'Welcome To Dashboard',
                'image' => 'assets/img/slider/1.jpg',
            ],
            1 => [
                'id' => 2,
                'description' => 'Welcome To Dashboard',
                'image' => 'assets/img/slider/2.jpg',
            ],
            2 => [
                'id' => 3,
                'description' => 'Welcome To Dashboard',
                'image' => 'assets/img/slider/3.jpg',
            ],
            3 => [
                'id' => 4,
                'description' => 'Welcome To Dashboard',
                'image' => 'assets/img/slider/4.jpg',
            ],
        ];
    }

    public function getAllSlider()
    {
        return $this->sliders;
    }
}