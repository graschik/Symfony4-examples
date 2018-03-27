<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends Controller
{
    /**
     * @Route("/admin/quiz/control",name="quiz.control")
     * @return Response
     */
    public function quizControl()
    {

    }

    /**
     * @Route("/admin/quiz/create",name="quiz.create")
     * @return Response
     */
    public function createQuiz()
    {

    }

    /**
     * @Route("/admin/quiz/update/{id}",name="quiz.update")
     * @return Response
     */
    public function updateQuiz()
    {

    }

    /**
     * @Route("/admin/quiz/delete/{id}",name="quiz.delete")
     * @return Response
     */
    public function deleteQuiz()
    {

    }

    /**
     * @Route("/admin/quiz/show/{id}",name="quiz.show")
     * @return Response
     */
    public function showQuizById()
    {

    }

}