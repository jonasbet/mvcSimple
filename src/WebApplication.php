<?php

namespace Itb;


class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../views';
    private $mainController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        if(empty($action)){
            $action = filter_input(INPUT_POST, 'action');
        }

        switch($action){


            case 'home':
            default:
                $this->mainController->listPostersAction();
        }
    }

}