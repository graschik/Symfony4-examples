<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Question;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/",name="home.index")
     */
    public function indexAction()
    {
        $question = new Question();
        $question->setTextQuestion('Стасик лох?');

        $answer = new Answer();
        $answer->setTextAnswer('Да');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);

        $answerYes = new Answer();
        $answerYes->setTextAnswer('Да');
        $answerYes->setIsCorrect(false);
        $answerYes->setQuestion($question);

        $em=$this->getDoctrine()->getManager();
        $em->persist($question);
        $em->persist($answer);
        $em->persist($answerYes);

        $em->flush();

        return new Response("kke");
    }
}