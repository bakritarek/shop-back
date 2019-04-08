<?php

namespace ShopBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use PortalBundle\Entity\UserPortal;
use ShopBundle\Entity\Group1;
use ShopBundle\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemControllerController extends Controller
{
    public function DisplayAllAction(Request $request, $systemid) {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);
        $companyno = 25625;//$data['companyno'];
        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $items = $em->getRepository(Items::class)->getAllItems($companyno);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($items, 'json');

       return $response = new Response($jsonObject);
    }

    public function getItemsByCategoryAction(Request $request, $systemid) {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);
        $category = $data['cat'];

        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $items = $em->getRepository(Items::class)->getByCategory($category);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($items, 'json');

        return $response = new Response($jsonObject);
    }

    public function getItemsBySubCategoryAction(Request $request, $systemid) {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);

        $parent = $data['Parent'];
        $category = $data['Cat'];

        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $items = $em->getRepository(Items::class)->getBySubCategory($parent, $category);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($items, 'json');

        return $response = new Response($jsonObject);
    }

    public function getItemsBySubSubCategoryAction(Request $request, $systemid) {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $data = json_decode($request->getContent(), true);

        $grandparent = $data['GrandParent'];
        $parent = $data['Parent'];
        $category = $data['Cat'];

        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $items = $em->getRepository(Items::class)->getBySubSubCategory($grandparent,$parent, $category);
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($items, 'json');

        return $response = new Response($jsonObject);
    }

    public function ItemDetailsAction($id, $systemid) {
        set_time_limit(-1);
        $em = $this->getDoctrine()->getManager('sh'.$systemid);

        $item = $em->getRepository(Items::class)->find($id);


        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($item, 'json');

        return $response = new Response($jsonObject);
    }
}
