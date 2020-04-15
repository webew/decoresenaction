<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuiEtesVousController extends AbstractController
{
    /**
     * @Route("/quietesvous", name="qui_etes_vous")
     */
    public function index()
    {
        return $this->render('qui_etes_vous/index.html.twig', [
            'controller_name' => 'QuiEtesVousController',
        ]);
    }
}
