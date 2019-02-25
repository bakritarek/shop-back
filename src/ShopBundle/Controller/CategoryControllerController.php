<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Group1;
use ShopBundle\Service\UserDataVerification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CategoryControllerController extends Controller
{
    public function getAllAction(Request $request, UserDataVerification $dataVerification) {

        $data = json_decode($request->getContent(), true);

        $user = $data['username'];
        $salt = $data['salt'];
        $req = $data['request'];
        $systemid = $data['systemid'];

        $dataVerification->VerifyUser($user, $salt);
        $response = new JsonResponse();

        if (!$dataVerification)
            return $response->setData([
                'message' => 'no user found',
                'code' => 0
            ]);

        $em = $this->getDoctrine()->getManager('sh'.$systemid);

        $categorys = $em->getRepository(Group1::class);

        return $response->setData($categorys);

    }
}
