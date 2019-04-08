<?php

namespace UserBundle\Controller;

use PortalBundle\Entity\accountsystems;
use PortalBundle\Entity\UserPortal;
use ShopBundle\Entity\Company;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Users;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function LoginAction(Request $request, $systemid) {

        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Request-Headers: *');
        header('Content-Type','*');

        $data = json_decode($request->getContent(), true);
        $systemid = '733';
        $companyNo = '25625';//$data['company_no'];
        $password = 'Nexti2019';//$data['pswrd'];


        $emPortal = $this->getDoctrine()->getManager('portal');
        $em = $this->getDoctrine()->getManager('sh'.$systemid);
        $emDefault = $this->getDoctrine()->getManager('default');
        $accountsystems = $emPortal->getRepository(accountsystems::class)->findOneBy(['id' => $systemid]);

        $data = [
            'code' => 0
        ] ;

        if ($accountsystems) {
           if ($accountsystems->getShopApp()) {
               $company = $em->getRepository(Company::class)->findOneBy(['companyno' => $companyNo]);
               if ($company) {
                    $DBPassword = 'Nexti2019';
                   $test = strstr($DBPassword, $password);
                   if ($test) {
                       $data = [
                           'companyno'=>$companyNo,
                           'companyname' => $company->getCompanyname(),
                           'systemid' => $systemid,
                           'code' => 1
                       ];
                   }
               }
           }

        }
        $response = new JsonResponse();

        return $response->setData($data);

    }
}
