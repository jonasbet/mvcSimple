<?php
namespace Itb;


class MainController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function  listPostersAction(){
        $posterRepo = new PosterRepository();
        $posters = $posterRepo->getAll();
        $template = 'listPosters.html.twig';
        $args = [
          'posters' => $posters,
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function editFormAction($id){
        $posterRepo = new PosterRepository();
        $poster = $posterRepo->getOne($id);
        $template = 'editForm.html.twig';
        $args = [
            'poster' => $poster,
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question3aAction(){
        $template = 'question3a.html.twig';
        $args = [
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question3bAction(){
        $template = 'question3b.html.twig';
        $month = 'june';
        $args = [
            'month' => $month
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question3cAction(){
        $template = 'question3c.html.twig';
        $fuels = [
            'wood','cool' ,'turf'
        ];
        $args = [
            'fuels' => $fuels
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question3dAction(){
        $template = 'question3d.html.twig';
        $seasons = [
            'summer' => 'warm rain',
            'autumn' => 'cool rain',
            'winter' => 'cold rain',
            'spring' => 'cool rain'

        ];
        $args = [
            'seasons' => $seasons
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question3eAction(){
        $template = 'question3e.html.twig';
        $args = [
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function question4aAction(){
        $template = 'question4a.html.twig';
        $isLoggedIn = true;
        $args = [
            'isLoggedIn' => $isLoggedIn
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}
