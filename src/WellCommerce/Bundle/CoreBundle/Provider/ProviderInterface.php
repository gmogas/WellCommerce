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

namespace WellCommerce\Bundle\CoreBundle\Provider;

/**
 * Interface ProviderInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface ProviderInterface
{
    /**
     * Returns related collection builder
     *
     * @return \WellCommerce\Bundle\DataSetBundle\CollectionBuilder\CollectionBuilderFactoryInterface
     */
    public function getCollectionBuilder();
}