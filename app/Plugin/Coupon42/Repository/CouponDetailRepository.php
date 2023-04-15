<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\Coupon42\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\Coupon42\Entity\CouponDetail;
use Doctrine\Persistence\ManagerRegistry;

/**
 * CouponDetailRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CouponDetailRepository extends AbstractRepository
{
    /**
     * CouponDetailRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponDetail::class);
    }
}
