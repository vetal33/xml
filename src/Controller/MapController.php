<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MapController extends AbstractController
{
    /**
     *
     *
     *
     *
     * @return Response
     * @Route("/")
     */
    public function homepage()
    {
        $article = 'adfdfoii';
        return $this->render('map/homepage.html.twig', [
            'title' => $article,
        ]);
    }

}