<?php

namespace ShopBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use PortalBundle\Entity\UserPortal;
use ShopBundle\Entity\Group1;
use ShopBundle\Entity\Group2;
use ShopBundle\Service\UserDataVerification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryControllerController extends Controller
{
    public function getAllAction(Request $request) {

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);


        $response = new JsonResponse();
        $username = $data['user'];
        $systemid = $data['systemid'];
        $salt = $data['salt'];
        $jsonObject = 'no data';
        $emPortal = $this->getDoctrine()->getManager('portal');
        $em = $this->getDoctrine()->getManager('sh733');
        $user = $emPortal->getRepository(UserPortal::class)->findOneBy(['login'=>$username,'systemid'=>$systemid]);
        if ($user) {
            $rSalt = $user->getSalt();
            if ($rSalt === $salt) {
                $categorys = $em->getRepository(Group1::class)->findAll();
                $serializer = SerializerBuilder::create()->build();
                $jsonObject = $serializer->serialize($categorys, 'json');
            }
        }


        return $response = new Response($jsonObject);

    }

    public function getGroupe2Action(Request $request, $id) {

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);


        $response = new JsonResponse();
        $username = $data['user'];
        $systemid = $data['systemid'];
        $salt = $data['salt'];
        $jsonObject = 'no data';
        $cv = 0;
        $emPortal = $this->getDoctrine()->getManager('portal');
        $em = $this->getDoctrine()->getManager('sh733');
        $user = $emPortal->getRepository(UserPortal::class)->findOneBy(['login'=>$username,'systemid'=>$systemid]);
        if ($user) {
            $rSalt = $user->getSalt();
            if ($rSalt === $salt) {
                $parent = $em->getRepository(Group1::class)->find($id);
                $categorys = $em->getRepository(Group2::class)->getBy($parent);
                $serializer = SerializerBuilder::create()->build();
                $jsonObject = $serializer->serialize($categorys, 'json');
            }
        }


        return $response = new Response($jsonObject);

    }
    public function VerifyUserAction($user, $salt) {
        $em = $this->getDoctrine()->getManager('portal');

        $user = $em->getRepository(UserPortal::class)->findOneBy(['login'=>$user]);
        $result = false;
        if ($user) {
            $realSalt = $user->getSalt();
            if ($realSalt === $salt)
                $result = true;
        }

        return $user->getLogin();
    }
}
