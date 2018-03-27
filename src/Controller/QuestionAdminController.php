<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionAdminController
{
    /**
     * @Route("admin/quiz/{quiz_id}/question/create",name="question.create")
     * @return Response
     */
    public function createQuestion()
    {

    }

    /**
     * @Route("admin/quiz/{quiz_id}/question/update/{id}",name="question.create")
     * @return Response
     */
    public function updateQuestion()
    {

    }

    /**
     * @Route("admin/quiz/{quiz_id}/question/delete/{id}",name="question.create")
     * @return Response
     */
    public function deleteQuestion()
    {

    }

    /**
     * @Route("/admin/quiz/{quiz_id}/question/show",name="question.show-all")
     * @return Response
     */
    public function showQuestions()
    {

    }

    /**
     * @Route("/admin/quiz/{quiz_id}/question/show/{id}",name="question.show")
     * @return Response
     */
    public function showQuestionById()
    {

    }
}