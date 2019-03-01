<?php
/**
 * Created by PhpStorm.
 * User: tarek
 * Date: 25.02.19
 * Time: 16:23
 */

namespace ShopBundle\Service;


use Doctrine\ORM\EntityManager;
use PortalBundle\Entity\UserPortal;

class UserDataVerification
{

    public function VerifyUser($user, $salt, EntityManager $em) {


        $user = $em->getRepository(UserPortal::class)->findOneBy(['login' => $user]);
        if ($user) {
            $realSalt = $user->getSalt();
            if ($realSalt === $salt)
                return true;
            else
                 return false;
        }



    }
}