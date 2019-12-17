<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapController
{
    /**
     * @return Response
     * @Route('/')
     */
    public function index(): Response
    {
        return $this->render('map/homepage.html.twig');

    }

}