<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin")
 */
class AnnuaireController extends AbstractController
{
    /**
     * @Route("/annuaire", name="annuaire")
     */
    public function index()
    {
        return $this->render('annuaire/index.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }
}
