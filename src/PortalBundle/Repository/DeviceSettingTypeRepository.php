<?php

namespace PortalBundle\Repository;

/**
 * DeviceSettingTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DeviceSettingTypeRepository extends \Doctrine\ORM\EntityRepository
{
    public function AdvancedSetting($id) {
        $qb= $this->createQueryBuilder('dst')
            ->leftJoin('dst.devicesetting', 'devicesetting')
            ->where('devicesetting.companyid = :id')
            ->andWhere('devicesetting.groupid IS NULL')
            ->andWhere('devicesetting.userid IS NULL')
            ->andWhere('devicesetting.deviceid IS NULL')

            ->leftJoin('dst.settingdescription', 'settingdescription')
            ->andWhere("settingdescription.locale = 'default'")

            ->select('settingdescription.description as setting')
            ->addSelect('devicesetting.value as value')
            ->addSelect('dst.defaultvalue as default')

            ->setParameter('id', $id)
        ;

        return $qb->getQuery()->getResult();
    }
}
