<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/question1", name="question1")
     */
    public function index(): Response
    {
        return $this->json([
        'question' => 'What is the capital of Chile?',
        'choices' => ['London, Santiago, Sucre, Quito'],
        'answer' => 'Santiago'

        ]);
    }
}
