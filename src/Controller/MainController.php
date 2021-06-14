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
    public function question1(): Response
    {
        return $this->json([
        'question' => 'What is the capital of Chile?',
        'choices' => ['London', 'Santiago', 'Sucre', 'Quito'],
        'answer' => 'Santiago'

        ]);
    }

        /**
     * @Route("/question2", name="question2")
     */
    public function question2(): Response
    {
        return $this->json([
        'question' => 'Who was the head of state in Japan during the second world war?',
        'choices' => ['Emperor Naruhito' ,'Emperor Hirohito','Yamagata Aritomo', 'Boris Johnson'],
        'answer' => 'Emperor Hirohito'

        ]);
    }

           /**
     * @Route("/question3", name="question3")
     */
    public function question3(): Response
    {
        return $this->json([
        'question' => 'Which planet is the hottest?',
        'choices' => ['Earth' ,'Mercury','Saturn', 'Venus'],
        'answer' => 'Venus'

        ]);
    }

           /**
     * @Route("/question4", name="question4")
     */
    public function question4(): Response
    {
        return $this->json([
        'question' => 'Which country gifted the Statue of Liberty to the U.S.?',
        'choices' => ['France' ,'Spain','China', 'Canada'],
        'answer' => 'France'

        ]);
    }

           /**
     * @Route("/question5", name="question5")
     */
    public function question5(): Response
    {
        return $this->json([
        'question' => 'Which country consumes the most chocolate',
        'choices' => ['Germany' ,'Switzerland','USA', 'Scotland'],
        'answer' => 'Switzerland'

        ]);
    }
}
