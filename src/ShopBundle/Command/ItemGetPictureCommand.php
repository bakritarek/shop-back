<?php

namespace ShopBundle\Command;

use PortalBundle\Entity\DeviceSetting;
use PortalBundle\Entity\DeviceSettingType;
use ShopBundle\Entity\Items;
use ShopBundle\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use WBBundle\Entity\Log;

class ItemGetPictureCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('item:get-picture')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $em = $this->getContainer()->get('doctrine')->getEntityManager('sh733');

        $q = $em->createQuery('delete from ShopBundle:Picture');
        $q->execute();

        $emDefault = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $emPortal = $this->getContainer()->get('doctrine')->getEntityManager('portal');
        $systemid = 733;
        $items = $em->getRepository(Items::class)->findAll();
        try{
            mkdir(__DIR__.'/../../../web/items/'.$systemid, 0777);
        } catch (\Exception $e) {
            $log = new Log();
            $log->setSystemid($systemid);
            $log->setMessage('folder with systemid '.$systemid.' exist');
            $log->setFunction('get picture function');
            $log->setType('no type');
            $emDefault->persist($log);
            $emDefault->flush();
        }


        foreach ($items as $item) {
            $pictured = false;
            $devicesettingType = $emPortal->getRepository(DeviceSettingType::class)->AdvancedSetting($systemid);

            $host = 'ftp.strato.com';
            $user = 'ftp_ideal@singoli-chemie.de';
            $password = 'singoli1';
            $server =ftp_connect($host);
            ftp_login($server, $user, $password);

            try{
                $pictures = ftp_nlist($server, 'items/'.$item->getItemno().'/');
                mkdir(__DIR__.'/../../../web/items/'.$systemid.'/'.$item->getItemno(), 0777);
                foreach ($pictures as $picture) {
                    if (strstr($picture, 'jpg') || strstr($picture, 'png')) {

                        ftp_get($server, __DIR__.'/../../../web/items/733/'.$item->getItemno().'/'.$picture, 'items/'.$item->getItemno().'/'.$picture, FTP_BINARY);

                        if (!$pictured) {
                            $item->setPhoto($picture);
                            $em->persist($item);

                        }
                        $pic= new Picture();

                        $pic->setItem($item);
                        $pic->setUrl($picture);
                        $em->persist($pic);
                        $pictured = true;
                    }
                }
                $em->flush();
            }catch (\Exception $e) {
                $log = new Log();
                $log->setSystemid($systemid);
                $log->setMessage('the picture cant be found in ftp for itemno '.$item->getItemno());
                $log->setFunction('get picture function');
                $log->setType('no type');
                $emDefault->persist($log);
                $emDefault->flush();

            }

        }

        $output->writeln('Command result.');
    }

}
