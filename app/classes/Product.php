<?php


namespace App\classes;


class Product
{
    public $products = [], $data = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id' => 1,
                'category_id' => 2,
                'name' => 'New Fashion T-Shirt',
                'price' => 1500,
                'description' => '',
                'image' => 'assets/img/product/1.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 2,
                'name' => 'Smart Jens Pant',
                'price' => 2500,
                'description' => '',
                'image' => 'assets/img/product/2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Formal Shirt for Men',
                'price' => 1700,
                'description' => '',
                'image' => 'assets/img/product/3.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 1,
                'name' => 'Sony Mobile',
                'price' => 150000,
                'description' => '',
                'image' => 'assets/img/product/4.jpg',
            ],
            4 => [
                'id' => 5,
                'category_id' => 1,
                'name' => 'Nokia',
                'price' => 15000,
                'description' => '',
                'image' => 'assets/img/product/5.jpg',
            ],
            5 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Cricket Bat',
                'price' => 5000,
                'description' => '',
                'image' => 'assets/img/product/6.jpg',
            ],
            6 => [
                'id' => 7,
                'category_id' => 3,
                'name' => 'Cricket Ball',
                'price' => 150,
                'description' => '',
                'image' => 'assets/img/product/7.jpg',
            ],
            7 => [
                'id' => 8,
                'category_id' => 4,
                'name' => 'Hand Bag',
                'price' => 700,
                'description' => '',
                'image' => 'assets/img/product/8.jpg',
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getCategoryProduct($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->data, $product);
            }
        }
        return $this->data;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}