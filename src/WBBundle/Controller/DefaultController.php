<?php

namespace WBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Yaml\Yaml;
use WBBundle\Entity\App;
use WBBundle\Entity\Log;

class DefaultController extends Controller
{
    public function AddSystemAction($id, KernelInterface $kernel) {
        $em = $this->getDoctrine()->getManager('default');
        $system = $em->getRepository(App::class)->findOneBy(['systemid'=>$id]);
        $log = new Log();
        if (!$system) {
            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('No system id detected');
            $em->persist($log);
            $em->flush();
            $file = Yaml::parseFile('/var/www/html/shop/app/config/config.yml');
            $dbName = 'sh'.$id;
            $file['doctrine']['dbal']['connections']["$dbName"] = [
                'driver'=> 'pdo_pgsql','host'=> '192.168.100.136','dbname'=> "$dbName",'user'=> 'postgres',
                'password'=> 'Nexti2018<','charset'=> 'UTF8'
            ];
            $file['doctrine']['orm']['entity_managers']["$dbName"] = [
                'connection'=>"$dbName",
                'mappings' => [
                    'ShopBundle'=>null
                ]
            ];
            $file = Yaml::dump($file);

            file_put_contents('/var/www/html/shop/app/config/config.yml', $file);

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('Config file changed');
            $em->persist($log);
            $em->flush();

            $cmd = "doctrine:database:create --connection=$dbName";
            // install the bundle & run this code, e.g. in a controller

            $console = new \CoreSphere\ConsoleBundle\Executer\CommandExecuter($kernel);
            $responses = $console->execute("cache:clear");

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('First Cache clear executed');
            $em->persist($log);
            $em->flush();

            $console = new \CoreSphere\ConsoleBundle\Executer\CommandExecuter($kernel);
            $responses = $console->execute("doctrine:database:create --connection=$dbName");

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('Data base created');
            $em->persist($log);
            $em->flush();

            $responses = $console->execute("doctrine:schema:update --force --em=$dbName");

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('schema update for systemid '.$id);
            $em->persist($log);
            $em->flush();

            $responses = $console->execute("doctrine:schema:update --force");

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('schema updated for default');
            $em->persist($log);
            $em->flush();

            $responses = $console->execute("cache:clear");

            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('second cache clear');
            $em->persist($log);
            $em->flush();

            $app = new App();

            $app->setSystemid($id);
            $app->setEnabled(true);

            $em->persist($app);
            $em->persist($log);
            $em->flush();



        }
        else {
            $responses = 'nothing';
            $log->setType('AddSystem');
            $log->setSystemid($id);
            $log->setMessage('systemid detected in table app');
            $em->persist($log);
            $em->flush();
        }

        $response = new JsonResponse();

        return $response->setData([$responses]);

    }
}
