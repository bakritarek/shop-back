<?php

namespace ShopBundle\Command;

use ShopBundle\Entity\Address;
use ShopBundle\Entity\Company;
use ShopBundle\Entity\DeliveryMethods;
use ShopBundle\Entity\DeliveryTerms;
use ShopBundle\Entity\Group1;
use ShopBundle\Entity\Group2;
use ShopBundle\Entity\Group3;
use ShopBundle\Entity\Group4;
use ShopBundle\Entity\Group5;
use ShopBundle\Entity\ItemDescription;
use ShopBundle\Entity\Items;
use ShopBundle\Entity\ItemStock;
use ShopBundle\Entity\PaymentTerms;
use ShopBundle\Entity\PriceList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use WBBundle\Entity\Log;

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
        $emDefault = $this->getContainer()->get('doctrine')->getEntityManager('default');

        $log = new Log();
        $log->setType('Synchro Data');
        $log->setFunction('Synchro Data');
        $log->setMessage('synchro data begin at '.gmdate('M d Y H:i:s'));
        $log->setSystemid('733');
        $emDefault->persist($log);
        $emDefault->flush();

        $q = $em->createQuery('delete from ShopBundle:DiscountList');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:ItemDescription');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:ItemStock');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:PriceList');
        $q->execute();
        $q = $em->createQuery('delete from ShopBundle:Address');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:Company');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:DeliveryMethods');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:DeliveryTerms');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:PaymentTerms');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:Group5');
        $q->execute();

        $q = $em->createQuery('delete from ShopBundle:Group4');
        $q->execute();


        $q = $em->createQuery('delete from ShopBundle:Group3');
        $q->execute();


        $q = $em->createQuery('delete from ShopBundle:Group2');
        $q->execute();


        $q = $em->createQuery('delete from ShopBundle:Group1');
        $q->execute();






        //DeliveryMethods
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=deliverymethods&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        $i= 1;
        if ($js) {
            foreach ($js as $obj) {
                $DeliveryMethods = new DeliveryMethods();

                $DeliveryMethods->setGlobalid($obj['globalid']);
                $DeliveryMethods->setImportid($obj['importid']);
                $DeliveryMethods->setMethod($obj['method']);
                $DeliveryMethods->setSatelliteid($obj['satelliteid']);
                $DeliveryMethods->setSourceid($obj['sourceid']);
                $DeliveryMethods->setText($obj['text']);

                $em->persist($DeliveryMethods);
            }
        }

        $em->flush();

        //DeliveryTerms
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=deliveryterms&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js) {
            foreach ($js as $obj) {
                $DeliveryTerms = new DeliveryTerms();

                $DeliveryTerms->setText($obj['text']);
                $DeliveryTerms->setSourceid($obj['sourceid']);
                $DeliveryTerms->setSatelliteid($obj['satelliteid']);
                $DeliveryTerms->setImportid($obj['importid']);
                $DeliveryTerms->setGlobalid($obj['globalid']);
                $DeliveryTerms->setTerm($obj['term']);

                $em->persist($DeliveryTerms);
            }
        }

        $em->flush();



        //PaymentTerms
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=paymentterms&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js){
            foreach ($js as $obj) {
                $PaymentTerms = new PaymentTerms();

                $PaymentTerms->setTerm($obj['term']);
                $PaymentTerms->setGlobalid($obj['globalid']);
                $PaymentTerms->setImportid($obj['importid']);
                $PaymentTerms->setSatelliteid($obj['satelliteid']);
                $PaymentTerms->setSourceid($obj['sourceid']);
                $PaymentTerms->setText($obj['text']);

                $em->persist($PaymentTerms);
            }
        }
        $em->flush();

        //ItemDescription
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=itemdescription&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js){
            foreach ($js as $obj) {
                $itemDescription = new ItemDescription();

                $itemDescription->setGlobalid($obj['globalid']);
                $itemDescription->setText($obj['text']);
                $itemDescription->setSortorder($obj['sortorder']);
                $itemDescription->setTextgroup($obj['textgroup']);
                $itemDescription->setType($obj['type']);
                $itemDescription->setItemno($obj['itemno']);
                $em->persist($itemDescription);
            }
        }
        $em->flush();


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

        $js = json_decode($json, true);
        if ($js) {
            foreach ($js as $obj) {
                $company = new Company();


                $company->setBusinesstype($obj['businesstype']);
                $company->setCompanyno($obj['companyno']);
                $company->setCompanyname($obj['companyname']);
                $company->setSalesman($obj['salesman']);
                $company->setPricegroup($obj['pricegroup']);
                $company->setDiscountgroup1($obj['discountgroup']);
                $company->setDiscountgroup2($obj['discountgroup2']);

                $paymentTerms = $em->getRepository(PaymentTerms::class)->findOneBy(['term' => $obj['paymentterms']]);
                $deliveryMethod = $em->getRepository(DeliveryMethods::class)->findOneBy(['method' => $obj['deliverymethod']]);
                $deliveryTerms = $em->getRepository(DeliveryTerms::class)->findOneBy(['term' => $obj['deliveryterms']]);

                $company->setPaymentterms($paymentTerms);
                $company->setDeliverymethod($deliveryMethod);
                $company->setDeliveryterms($deliveryTerms);

                $em->persist($company);
            }
        }
        $em->flush();


        //Address
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=address&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js) {
            foreach ($js as $obj) {

                $Address = new Address();
                $Address->setGlobalid($obj['globalid']);
                $Address->setAddressno($obj['addressno']);
                $Address->setAddresstypeno($obj['addresstypeno']);
                $Address->setCity($obj['city']);
                $Address->setCountry($obj['country']);
                $Address->setGpslat($obj['gpslat']);
                $Address->setGpslong($obj['gpslong']);
                if ($obj['isdefault'] === '1')
                    $isdefault = true;
                else
                    $isdefault = false;
                $Address->setIsdefault($isdefault);
                $Address->setNote($obj['note']);
                $Address->setPersonno($obj['personno']);
                $Address->setPostcode($obj['postalcode']);
                $Address->setState($obj['state']);
                $Address->setStreet($obj['street']);

                $company = $em->getRepository(Company::class)->findOneBy(['companyno'=>$obj['companyrefno']]);

                $Address->setCompanyrefno($company);

                $em->persist($Address);
            }
        }
        $em->flush();



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

        $js = json_decode($json, true);

        if ($js){
            foreach ($js as $obj) {

                $item = new Items();


                $item->setText1($obj['text1']);
                $item->setHaspermission($obj['haspermission']);
                $item->setItemgroup1($obj['itemgroup1']);
                $item->setItemno($obj['itemno']);
                $item->setText2($obj['text2']);
                $item->setUnit($obj['unit']);
                $item->setItemgroup2($obj['itemgroup2']);
                $item->setItemgroup3($obj['itemgroup3']);
                $item->setItemgroup4($obj['itemgroup4']);
                $item->setItemgroup5($obj['itemgroup5']);
                $item->setVattype($obj['vattype']);

                $itemDescription = $em->getRepository(ItemDescription::class)->findOneBy(['itemno'=>$obj['itemno']]);

                $item->setItemdescription($itemDescription);

                $em->persist($item);
            }
        }
        $em->flush();


        //ItemGroups
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

        $groups3 = $em->getRepository(Items::class)->Group3();

        foreach ($groups3 as $group) {
            $gr2 = $em->getRepository(Group2::class)->findOneBy(['itemgroup2' => $group['parent']]);

            $grou3 = new Group3();
            $grou3->setItemgroup3($group['itemgroup']);
            $grou3->setParent($gr2);

            $em->persist($grou3);
        }
        $em->flush();

        $groups4 = $em->getRepository(Items::class)->Group4();

        foreach ($groups4 as $group) {
            $gr2 = $em->getRepository(Group3::class)->findOneBy(['itemgroup3' => $group['parent']]);

            $grou3 = new Group4();
            $grou3->setItemgroup4($group['itemgroup']);
            $grou3->setParent($gr2);

            $em->persist($grou3);
        }
        $em->flush();

        $groups5 = $em->getRepository(Items::class)->Group5();

        foreach ($groups5 as $group) {
            $gr2 = $em->getRepository(Group4::class)->findOneBy(['itemgroup4' => $group['parent']]);

            $grou3 = new Group5();
            $grou3->setItemgroup5($group['itemgroup']);
            $grou3->setParent($gr2);

            $em->persist($grou3);
        }
        $em->flush();

        //ItemStock
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=itemstock&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js){
            foreach ($js as $obj) {

                $itemStock = new ItemStock();

                $itemStock->setGlobalid($obj['globalid']);
                $itemStock->setUnit($obj['unit']);
                $itemStock->setLocationid($obj['locationid']);
                $itemStock->setQuantity($obj['quantity']);

                $item = $em->getRepository(Items::class)->findOneBy(['itemno'=>$obj['itemno']]);

                $itemStock->setItemno($item);

                $em->persist($itemStock);
            }
        }

        $em->flush();


        //PriceList
        $url = 'http://192.168.100.138:8090/Service/Replicator/GetDataDump?Instance=default&DeviceID=TESTUDID&Raw=true&format=json&DeviceVersion=1&Device=iphone&table=pricelist&limit=99999999';
        $json = file_get_contents($url);
        $json = '['.$json.']';
        $words = ['\n','\t','\r'];
        $json = str_replace($words,' ',$json);
        $json = str_replace('null','""',$json);
        $json = str_replace('}','},',$json);
        $length = strlen($json) -2;
        $json = substr($json,0, $length);


        $json = $json.']';

        $js = json_decode($json, true);

        if ($js){
            foreach ($js as $obj) {

                $priceList = new PriceList();

                $priceList->setUnit($obj['unit']);
                $priceList->setGlobalid($obj['globalid']);
                $priceList->setBase($obj['base']);
                $priceList->setCurrency($obj['currency']);
                $priceList->setDiscountable($obj['discountable']);
                $priceList->setFromdate($obj['fromdate']);
                $priceList->setGroup1($obj['group1']);
                $priceList->setGroup2($obj['group2']);
                $priceList->setLimitdown($obj['limitdown']);
                $priceList->setMinprice($obj['minprice']);
                $priceList->setPrice($obj['price']);
                $priceList->setPricetype($obj['pricetype']);
                $priceList->setUntildate($obj['untildate']);

                $item = $em->getRepository(Items::class)->findOneBy(['itemno' => $obj['itemno']]);
                $company = $em->getRepository(Company::class)->findOneBy(['companyno' => $obj['companyno']]);

                $priceList->setCompanyno($company);
                $priceList->setItemno($item);

                $em->persist($itemStock);
            }
        }
        $em->flush();

        $log = new Log();
        $log->setType('Synchro Data');
        $log->setFunction('Synchro Data');
        $log->setMessage('synchro data ends at '.gmdate('M d Y H:i:s'));
        $log->setSystemid('733');
        $emDefault->persist($log);
        $emDefault->flush();


        $output->writeln('Synchro for sh733 is done');
    }

}
