<?php

namespace UserBundle\Controller;

use PortalBundle\Entity\accountsystems;
use PortalBundle\Entity\UserPortal;
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
        header('Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS');
        header("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        $data = json_decode($request->getContent(), true);

        $username = $data['login'];
        $password = $data['pswrd'];
        $systemid = $data['systmId'];

        $em = $this->getDoctrine()->getManager('portal');
        $emDefault = $this->getDoctrine()->getManager('default');
        $accountsystems = $em->getRepository(accountsystems::class)->findOneBy(['id' => $systemid]);

        $data = [
            'code' => 0
        ] ;

        if ($accountsystems) {
           if ($accountsystems->getShopApp()) {
               $user = $em->getRepository(UserPortal::class)->findOneBy(['login'=>$username,'systemid'=>$systemid]);
               if ($user) {
                   $salt = $user->getSalt();
                   $password = hash('SHA256', $password.$salt);

                   $test = strstr($password , $user->getPassword());

                   if ($test == true)
                   {
                       $data = [
                           'id'=>$user->getId(),
                           'username' => $username,
                           'systemid' => $systemid,
                           'name' => $user->getUsername(),
                           'code' => 1
                       ];
                   }


               }
           }

        }
        $response = new JsonResponse();

        return $response->setData($data);

    }
}
