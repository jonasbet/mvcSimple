<?php
namespace Itb;

class PosterRepository
{
    private $products;

    public function __construct()
    {
        $this->products = [];
        $this->insert(1, 'thor.jpg', '9.00');
        $this->insert(2, 'tintin.jpg', '25.00');
    }

    public function insert($id, $imageName, $price)
    {
        $p = new Poster();
        $p->setId($id);
        $p->setImageName($imageName);
        $p->setPrice($price);

        $this->products[$id] = $p;
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getOne($id)
    {
        $product = $this->products[$id];

        return $product;
    }


}