<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Company;
use ShopBundle\Entity\DeliveryMethods;
use ShopBundle\Entity\DeliveryTerms;
use ShopBundle\Entity\Group1;
use ShopBundle\Entity\Group2;
use ShopBundle\Entity\ItemDescription;
use ShopBundle\Entity\Items;
use ShopBundle\Entity\ItemStock;
use ShopBundle\Entity\PaymentTerms;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager('sh733');

        $groups1 = $em->getRepository(Items::class)->Group1();

        foreach ($groups1 as $group1) {
            $group = new Group1();

            $group->setItemgroup1($group1['itemgroup']);

            $em->persist($group);

        }
        $em->flush();

        $groups2 = $em->getRepository(Items::class)->Group2();

        foreach ($groups2 as $group) {
            $gr1 = $em->getRepository(Group1::class)->findOneBy(['itemgroup1' => $group['parent']]);

            $grou2 = new Group2();
            $grou2->setItemgroup2($group['itemgroup']);
            $grou2->setParent($gr1);

            $em->persist($grou2);
        }
        $em->flush();

        $response = new JsonResponse();

        return $response->setData($groups2);
    }
}
