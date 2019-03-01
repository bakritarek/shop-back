<?php

namespace WBBundle\Controller;

use altayalp\FtpClient\DirectoryFactory;
use altayalp\FtpClient\FileFactory;
use altayalp\FtpClient\Servers\FtpServer;
use altayalp\FtpClient\Servers\SftpServer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FTPControllerController extends Controller
{
    public function getPicturAction() {
        $host = 'ftp.nexti.de';
        $user = 'ftp1112492-user733';
        $password = 'xyTg195g!';

        $server = new FtpServer($host);
        $server->login($user, $password);

        $file = FileFactory::build($server);
        $list = $file->ls('items/1000122/');
        $file->download('items/1000122/Unbenannt_C1300ABCC11548028FCA4DF4C12B26D1.png', 'img.png');

        $response = new JsonResponse();

        return $response->setData($list);


    }
}
