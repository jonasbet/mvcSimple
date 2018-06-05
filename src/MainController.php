<?php
namespace Itb;


class MainController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

}
