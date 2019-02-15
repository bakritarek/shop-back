<?php

namespace ShopBundle\Command;

use ShopBundle\Entity\Company;
use ShopBundle\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ShopSynchroDataCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('shop:synchro-data')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager('sh733');

        //Companys
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=company&limit=99999999';
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

        foreach ($js as $obj) {
            $company = new Company();
            $company->setBusinesstype($obj['businesstype']);
            $company->setCompanyno($obj['companyno']);
            $company->setCompanyname($obj['companyname']);
            $company->setSalesman($obj['salesman']);
            $company->setPricegroup($obj['pricegroup']);
            $company->setDiscountgroup1($obj['discountgroup1']);
            $company->setDiscountgroup2($obj['discountgroup2']);
            $company->setPaymentterms($obj['paymentterms']);
            $company->setDeliverymethod($obj['deliverymethod']);
            $company->setDeliveryterms($obj['deliveryterms']);

            $em->persist($company);
        }

        //Items
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
            $item->setHaspermission($obj['haspermission']);
            $item->setItemgroup1($obj['itemgroup1']);
            $item->setItemno($obj['itemno']);
            $item->setText2($obj['text2']);
            $item->setUnit($obj['unit']);
            $item->setItemgroup2($obj['itemgroup2']);
            $item->setVattype($obj['vattype']);

            $em->persist($item);
        }
        $em->flush();

        $output->writeln('Synchro for sh733 is done');
    }

}
