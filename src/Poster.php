<?php
namespace Itb;

class Poster
{
    private $id;
    private $imageName;
    private $price;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function __toString()
    {
        $text = '';
        $text .= 'id = ' . $this->id;
        $text .= ', image name = ' . $this->imageName;
        $text .= ', price = ' . $this->price;

        return $text;
    }


}