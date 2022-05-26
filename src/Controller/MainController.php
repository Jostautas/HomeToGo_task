<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InputType;

class MainController extends AbstractController{

    #[Route('/', name: 'home')]
    public function index(Request $request){
        $n = 3; // size of matrix (3x3)
        $table = array( '_', '_', '_',
                        '_', '_', '_',
                        '_', '_', '_');

        $form = $this -> createForm(InputType::class);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();
            $xInput = $data['xInput'];
            $yInput = $data['yInput'];

            if($table[$yInput * $n + $xInput] == '_'){
                $table[$yInput * $n + $xInput] = 'X';
            }

            /*for($i = 0; $i < $n; $i++){
                for($j = 0; $j < $n; $j++){
                    if($table[$i * $n + $j] == '_'){
                        $table[$i * $n + $j] = 'X';
                    }
                }
            }*/

            return $this->render('main/index.html.twig', [
                'n' => $n,
                'table' => $table,
                'form' => $form->createView(),
            ]);
    }

    return $this->render('main/index.html.twig', [
        'n' => $n,
        'table' => $table,
        'form' => $form->createView(),
    ]);
    }
}