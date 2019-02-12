<?php

namespace WBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Yaml\Yaml;
use WBBundle\Entity\App;

class DefaultController extends Controller
{
    public function AddSystemAction($id, KernelInterface $kernel) {
        $em = $this->getDoctrine()->getManager('default');
        $system = $em->getRepository(App::class)->findOneBy(['systemid'=>$id]);
        if (!$system) {
            $file = Yaml::parseFile('/var/www/html/nexti/app/config/config.yml');
            $dbName = 'db'.$id;
            $file['doctrine']['dbal']['connections']["$dbName"] = [
                'driver'=> 'pdo_pgsql','host'=> '192.168.100.136','dbname'=> "$dbName",'user'=> 'postgres',
                'password'=> 'Nexti2018<','charset'=> 'UTF8'
            ];
            $file['doctrine']['orm']['entity_managers']["$dbName"] = [
                'connection'=>"$dbName",
                'mappings' => [
                    'CalendarBundle'=>null
                ]
            ];
            $file = Yaml::dump($file);

            file_put_contents('/var/www/html/nexti/app/config/config.yml', $file);
            $cmd = "doctrine:database:create --connection=$dbName";
            // install the bundle & run this code, e.g. in a controller

            $console = new \CoreSphere\ConsoleBundle\Executer\CommandExecuter($kernel);
            $responses = $console->execute("cache:clear");


            $console = new \CoreSphere\ConsoleBundle\Executer\CommandExecuter($kernel);
            $responses = $console->execute("doctrine:database:create --connection=$dbName");
            $responses = $console->execute("doctrine:schema:update --force --em=$dbName");
            $responses = $console->execute("cache:clear");
            $responses = $console->execute("cache:clear");
            $responses = $console->execute("cache:clear");
            $app = new app();

            $app->setSystemid($id);
            $app->setEnabled(true);

            $em->persist($app);
            $em->flush();



        }
        else
            $responses = 'nothing';
        $response = new JsonResponse();

        return $response->setData([$responses]);

    }
}
