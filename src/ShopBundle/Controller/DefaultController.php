<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $emDB = $this->getDoctrine()->getManager('sh733');

        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=items&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json);

        $i= 1;
        foreach ($js as $obj) {
            $obj = get_object_vars($obj);
            $item = new Items();

            $item->setText1($obj['text1']);
            $emDB->persist($item);
        }
        $emDB->flush();
        $response = new JsonResponse();

        return $response->setData($json);
    }
}
