<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{

    #[Route('/', name: 'home')]
    public function index(){
        $n = 3; // size of matrix (3x3)
        return $this->render('main/index.html.twig', [
            'n' => $n,
        ]);
    }
}
