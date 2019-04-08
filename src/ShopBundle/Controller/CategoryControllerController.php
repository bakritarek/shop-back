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
    public function getAllAction(Request $request, $systemid) {

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $categorys = $em->getRepository(Group1::class)->findBy([], ['itemgroup1'=>'ASC']);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($categorys, 'json');



        return $response = new Response($jsonObject);

    }

    public function getGroupe2Action(Request $request, $id) {

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);


        $response = new JsonResponse();
        $systemid = $id;
        $salt = $data['salt'];
        $jsonObject = 'no data';
        $emPortal = $this->getDoctrine()->getManager('portal');
        $em = $this->getDoctrine()->getManager('sh733');
        $parent = $em->getRepository(Group1::class)->find($id);
        $categorys = $em->getRepository(Group2::class)->getBy($parent);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($categorys, 'json');


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
