<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SecurityController extends Controller
{
    /**
     * @Route("/login",name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error=$authenticationUtils->getLastAuthenticationError();
        $lastUsername=$authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig',[
            'last_username'=>$lastUsername,
            'error'=>$error,
        ]);
    }

    /**
     * @Route("/signup",name="signup")
     * @param Request $request
     */
    public function signup(Request $request)
    {

    }

    /**
     * @Route("/user/{id}/recovery-pass")
     * @param Request $request
     */
    public function passwordRecovery(Request $request)
    {

    }

}