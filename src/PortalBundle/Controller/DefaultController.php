<?php

namespace PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS');
        header("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        $response = new JsonResponse();


        return $response->setData('1');
    }
}
