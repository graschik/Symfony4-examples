<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.03.2018
 * Time: 17:37
 */

namespace App\Controller;

use App\Service\Calculator;
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
        return $this->render('home/index.html.twig', ['title' => 'stasik loh']);
    }

    /**
     * @Route("/sum/{a}/{b}",name="home.sum")
     * @param Calculator $calculator
     * @param $a
     * @param $b
     * @return Response
     */
    public function sumAction(Calculator $calculator, $a, $b)
    {
        return $this->render('home/sum.html.twig', [
            'a' => $a,
            'b' => $b,
            'sum' => $calculator->sum((int)$a, (int)$b),
        ]);
    }
}