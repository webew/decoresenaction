<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParrainController extends AbstractController
{
    /**
     * @Route("/parrain", name="parrain")
     */
    public function index()
    {
        return $this->render('parrain/index.html.twig', [
            'controller_name' => 'ParrainController',
        ]);
    }
}
