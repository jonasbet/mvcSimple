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
        $id = filter_input(INPUT_GET, 'id');
        if(empty($action)){
            $action = filter_input(INPUT_POST, 'id');
        }
        switch($action){

            case 'editForm':
                $this->mainController->editFormAction($id);
                break;

            case 'question3a':
                $this->mainController->question3aAction();
                break;

            case 'question3b':
                $this->mainController->question3bAction();
                break;

            case 'question3c':
                $this->mainController->question3cAction();
                break;

            case 'question3d':
                $this->mainController->question3dAction();
                break;

            case 'question3e':
                $this->mainController->question3eAction();
                break;

            case 'question4a':
                $this->mainController->question4aAction();
                break;


            case 'home':
            default:
                $this->mainController->listPostersAction();
        }
    }

}