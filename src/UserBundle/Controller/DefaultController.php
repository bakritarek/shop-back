<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function LoginAction(Request $request) {

        header('Access-Control-Allow-Headers: *');

        $data = json_decode($request->getContent(), true);

        $login = $data['login'];
        $password = $data['pswrd'];
        $systemid = $data['systmId'];

        $em = $this->getDoctrine()->getManager('default');


        $response = new JsonResponse();

        return $response->setData($data);
    }
}
