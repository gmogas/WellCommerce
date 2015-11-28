<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\Factory;

use WellCommerce\Bundle\AppBundle\Entity\UserGroup;
use WellCommerce\Bundle\CoreBundle\Factory\AbstractFactory;

/**
 * Class UserGroupFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class UserGroupFactory extends AbstractFactory
{
    /**
     * @return \WellCommerce\Bundle\AppBundle\Entity\UserGroupInterface
     */
    public function create()
    {
        $group = new UserGroup();

        return $group;
    }
}