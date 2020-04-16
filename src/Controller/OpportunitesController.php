<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpportunitesController extends AbstractController
{
    /**
     * @Route("/opportunites", name="opportunites")
     */
    public function index()
    {
        return $this->render('opportunites/index.html.twig', [
            'controller_name' => 'OpportunitesController',
        ]);
    }
}
