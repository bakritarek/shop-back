<?php

namespace WBBundle\Controller;

use altayalp\FtpClient\DirectoryFactory;
use altayalp\FtpClient\FileFactory;
use altayalp\FtpClient\Servers\FtpServer;
use altayalp\FtpClient\Servers\SftpServer;
use JMS\Serializer\SerializerBuilder;
use PortalBundle\Entity\DeviceSettingType;
use PortalBundle\Entity\UserPortal;
use ShopBundle\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FTPControllerController extends Controller
{
    public function getPicturAction() {

        $emPortal = $this->getDoctrine()->getManager('portal');

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods','*');

        $em = $this->getDoctrine()->getManager('sh733');
        $item = $em->getRepository(Items::class)->findOneBy(['itemno'=>'11659801SB']);
        $host = 'ftp.strato.com';
        $user = 'ftp_ideal@singoli-chemie.de';
        $password = 'singoli1';
        $server =ftp_connect($host);
        ftp_login($server, $user, $password);
        $fin = '';
        $pictures = ftp_nlist($server, 'items/'.$item->getItemno().'/');
        try{
            mkdir(__DIR__.'/../../../web/items/733/'.$item->getItemno(), 0777);
        } catch (\Exception $exception) {

        }

        foreach ($pictures as $picture) {
            if (strstr($picture, 'jpg')) {
                ftp_get($server, __DIR__.'/../../../web/items/733/'.$item->getItemno().'/'.$picture, 'items/'.$item->getItemno().'/'.$picture, FTP_BINARY);
            }
        }



        return $response = new JsonResponse($item->getItemno());


    }
}
